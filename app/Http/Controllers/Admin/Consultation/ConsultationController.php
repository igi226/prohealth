<?php

namespace App\Http\Controllers\Admin\Consultation;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["consultations"] = DB::table("consultations")->get();
        return view("Admin.Consultations.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Consultations.create");
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
            "short_description" => "required|string|max:50",
            "image" => "required",
        ]);
        $data = $request->except("_token");
        if ($request->has("image")) {
            $image = $request->file("image");
            $ConsultImage =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();
            $image->storeAs("public/ConsultImage", $ConsultImage);
            $data["image"] = $ConsultImage;
        }
        Consultation::create($data);
        return redirect()->route("consultations.index")->with("msg", $data['name'] . " added successfully");
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
        $data["consultation"] = DB::table("consultations")->where("id", $id)->first();
        return view("Admin.Consultations.edit", $data);
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
            "name" => "required|string",
            "short_description" => "required|string|max:50",
          
        ]);
        $img = DB::table('consultations')->where("id", $id)->select('image')->first();
        $data = $request->except("_token", "_method");
        if ($request->has("image")) {
            File::delete("storage/ConsultImage/" . $img->image);
            $image = $request->file("image");
            $ConsultImage =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();
            $image->storeAs("public/ConsultImage", $ConsultImage);
            $data["image"] = $ConsultImage;
        }else {
            $data["image"] = $img->image;
        }
        Consultation::where("id", $id)->update($data);
        return redirect("admin/consultations")->with("msg", "The consultantion has been updated successfully.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_consultantion = Consultation::where('id',$id)->first();
        $delete_consultantion->delete();
        return redirect()->back()->with('msg',$delete_consultantion->name .' Deleted Successfully');
    }
}
