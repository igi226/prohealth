<?php

namespace App\Http\Controllers\Admin\Package;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['packages'] = DB::table('packages')->get();
        return view('Admin.Packages.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Packages.create');
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
            'package_name' => 'required|string',
            'package_features' => 'required|string',
            'package_type'  => 'required|string',
            'available_consultation'  => 'required|numeric',
        ]);
        $data = $request->except('_token');
        $slug = Str::slug($data['package_name']);
       $slug_count = DB::table('packages')->where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().rand(100000, 999999).'-'.$slug;
        } 
       $data['slug'] = $slug;
        $store = Packages::create($data);
        if ($store) {
            return redirect()->route('packages.index')->with('msg', $data['package_name'].' Created Successfully');
        } else {
            return redirect()->back()->with('msg',' Some Error Occur!');

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
        $data['package'] = Packages::where('slug', $slug)->firstOrFail();
        return view('Admin.Packages.edit', $data);
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
        $request->validate([
            'package_name' => 'required|string',
            'package_features' => 'required|string',
            'package_type'  => 'required|string',
            'package_price'  => 'required|string',
            'available_consultation'  => 'required|numeric',
        ]);
        $data = $request->except('_token', '_method');
        // dd($data);
        $update = Packages::where('slug', $slug)->update($data);
        if ($update) {
            return redirect()->route('packages.index')->with('msg', $data['package_name'].' Updated Successfully');
        } else {
            return redirect()->back()->with('msg',' Some Error Occur!');

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
        $package = Packages::where('slug', $slug)->firstOrFail();
        $package->delete();
        return redirect()->back()->with('msg', $package->package_name. " Deleted Successfully");
    }
}
