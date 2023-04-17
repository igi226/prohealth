<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\Interface\UserInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    private $userInterface;
    public function __construct( UserInterface $userInterface)
    {
       $this->userInterface = $userInterface; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = $this->userInterface->all();
        return view('Admin.User.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users",
        ]);
        $data = $request->except("_token");
        $slug = Str::slug($data['name']);
        $slug_count = DB::table('users')->where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().rand(100000, 999999).'-'.$slug;
        }
        $data['slug'] = $slug;
        
        $store  = DB::table('users')->insert($data);
        if($store){
            return redirect()->route('users.index')->with("msg", "New user created successfully");
        }else {
            return back()->with("msg", "Some error occur!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user = DB::table('users')->where('slug', $slug)->first();
        return view("Admin.User.edit")->with("user", $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();
        if($user){
        $data = $request->except('_token', '_method');
        if($data['password'] != null){
         
         $data['password'] = Hash::make($data['password']);
        }else{
         $data['password'] = $user->password;
        } 
        $update = User::where('slug',$slug)->update($data);
        if ($update) {
            return redirect('admin/users')
                ->with("msg", "User Information Updated Successfully");
         } else {
            return redirect()
                ->back()
                ->with("msg", "Some Error Occured!");
        }
      } else{
         return redirect()
                ->back()
                ->with("msg", "User doesn't exist!");
        }
     }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $delete_user = User::where('slug',$slug)->first();
        // dd($delete_user->consult_appointments);
        foreach($delete_user->consult_appointments as $appointment) {
            $appointment->delete();
        }
        foreach($delete_user->order_histories as $order) {
            $order->delete();
        }
        $delete_user->delete();
        return redirect()->back()->with('msg',$delete_user->name .' Deleted Successfully with its all appointments and subscriptions.');
    }

    public function changeS(Request $request)
    {
        $status = User::where('slug',$request->slug)->update(['status'=>$request->status]);
        if($status){
            return response()->json([
                'status' => 1,
                'msg' => 'Status Successfully Updated'
            ]);
        }
    }
}
