<?php

namespace App\Http\Controllers\Admin\Appoinments;

use App\Http\Controllers\Controller;
use App\Models\ConsultAppointment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['appoinments'] = ConsultAppointment::get();
        // dd($data['appoinments']->users);
        return view("Admin.Appoinments.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $data["appointments"] = ConsultAppointment::where("id", $id)->first();
        // dd($data);
        return view("Admin.Appoinments.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "consultation_id" => "required|numeric",
            
        ]);
        $data = $request->except("_token", "_method");
        // dd($data);
        $update = ConsultAppointment::where("id", $id)->update($data);
        if($update) {
            return redirect()->route("appointments.index")->with("msg", "The appointment has been updated successfully");
        }else{
            return back()->with("msg", "Some error occur! try again");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointments = ConsultAppointment::where("id", $id)->firstOrFail();
        $appointments->delete();
        return back()->with("msg", "The appointment is deleted successfully");
    }

    public function changeAS( Request $request ) {
        dd($request->all());
        ConsultAppointment::where("id", $request->appointment_id)->update(["status" => $request->status]);
        return response()->json([
            "status" => 1,
            "msg" => "Status is updated successfully"

        ]);
    }
}
