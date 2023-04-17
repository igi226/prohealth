<?php

namespace App\Http\Controllers\Admin\Testimonial;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonials'] = Testimonial::get();
        return view("Admin.Testimonials.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Testimonials.create");
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
            "message" => "required|string|max:1000",
            "occupation" => "required|string",
        ]);
        $data = $request->except("_token");
        if ($request->has("image")) {
            
            $image = $request->file("image");
            
            $testimonialsImage =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();
        
            $image->storeAs("public/testimonialsImage", $testimonialsImage);
            // $image->move(public_path("testimonialsImage"), $testimonialsImage);
        
            $data["image"] = $testimonialsImage;
        }
        //  dd($data);
        Testimonial::create($data);
        return redirect()->route("testimonials.index")->with("msg", $data['name'] . " added successfully");
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
        return view("Admin.Testimonials.edit", [ "testimonials" => Testimonial::where("id", $id)->first()]);
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
        $data = $request->except('_method', '_token', 'image');
        $img = DB::table('testimonials')->where("id", $id)->select('image')->first();
         if ($request->has("image")) {
          File::delete("storage/testimonialsImage/" . $img->image);
             $image = $request->file("image");
             $testimonialsImage =
                 time() .
                 rand(0000, 9999) .
                 "." .
                 $image->getClientOriginalExtension();
            $image->storeAs("public/testimonialsImage", $testimonialsImage);
             $data["image"] = $testimonialsImage;
         }else {
             $data["image"] = $img->image;
         }
         $update = Testimonial::where('id', $id)->update($data);
         if($update){
             return redirect('/admin/testimonials')->with("msg", " Information Updated Successfully");
         }else{
             return redirect()->back()->with('msg', 'some error occur!');
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
        Testimonial::where('id', $id)->delete();
        return redirect()->back()->with("msg", "The testimonial deleted successfully");
    }
}
