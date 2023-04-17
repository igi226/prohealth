<?php

namespace App\Http\Controllers\Admin\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["quizzes"] = Quiz::get();
       return view("Admin.Quiz.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Quiz.create");
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
            "question" => "required|string",
            "ans1" => "required|string",
            "ans2" => "required|string",
            // "ans3" => "required|string",
            "correct_ans" => "required",
           
        ]);
        $data = $request->except("_token");
        Quiz::create($data);
        return redirect()->route("quizzes.index")->with("msg", "Question added sucessfully");
        // try {
           
        // } catch (\Throwable $th) {
        //     return back()->with("msg", "Some error occur!, try again");
        // }
        
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
        $data["quizze"] = Quiz::findOrFail($id);
        return view("Admin.Quiz.edit", $data);
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
            "question" => "required|string",
            "ans1" => "required|string",
            "ans2" => "required|string",
            // "ans3" => "required|string",
            "correct_ans" => "required",
           
        ]);
        $data = $request->except("_token", "_method");
        // dd($data);
        Quiz::where("id", $id)->update($data);
        return redirect()->route("quizzes.index")->with("msg", "Question updated sucessfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteQsn = Quiz::findOrFail($id);
        $deleteQsn->delete();
        return back()->with("msg", "The Question has been deleted successfully");

    }
}
