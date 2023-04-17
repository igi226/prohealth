<?php

namespace App\Http\Controllers\User\AboutCompany;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use App\Models\Quiz;
use App\Models\Result;
use App\Models\VideoCms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutCompanyController extends Controller
{
    public function whatIdo()
    {
        $data["whatWedo"] = Cms::where("slug", "what-we-do-at-health-hoodlum")->first();
        return view("User.whatWeDo", $data);
    }

    public function whoIam()
    {
        $data["whoIam"] = Cms::where("slug", "who-is-the-health-hoodlum")->first();
        return view("User.whoIAm", $data);
    }

    public function whoICanHelp()
    {
        $data["whoIcanHelp1"] = Cms::where("slug", "miscellaneous")->first();
        $data["whoIcanHelp2"] = Cms::where("slug", "hormonal")->first();
        $data["whoIcanHelp3"] = Cms::where("slug", "autoimmune-disease")->first();
        $data["whoIcanHelp4"] = Cms::where("slug", "digestive")->first();
        $data["whoIcanHelp5"] = Cms::where("slug", "cardiometabolic")->first();
        return view("User.whoICanHelp", $data);
    }

    public function aboutUs()
    {
        $data["about"] = Cms::where("slug", "1673242606356930-best-treatment-at-our-health-hoodlum-studio")->first();
        $data["about2"] = Cms::where("slug", "your-spiritual-guide")->first();
        $data["about3"] = Cms::where("slug", "your-spiritual-guide-02")->first();
        return view("User.aboutUs", $data);
    }

    public function contactUs()
    {
        $data["contact"] = Cms::where("slug", "get-in-touch-with-us")->first();
        $data["site_infos"] = DB::table("admins")->where("slug", "admin-healthhoodlum")->select("site_name", "site_address", "site_phone", "site_email")->first();
        return view("User.contactUs", $data);
    }

    public function help()
    {
        $data["help"] = Cms::where("slug", "the-health-hoodlum")->first();
        $data["help1"] = Cms::where("slug", "section-1")->first();
        $data["help2"] = Cms::where("slug", "section-2")->first();
        $data["help3"] = Cms::where("slug", "section-3")->first();
        $data["help4"] = Cms::where("slug", "section-4")->first();
        $data["help5"] = Cms::where("slug", "section-5")->first();
        $data["help6"] = Cms::where("slug", "section-6")->first();
        $data["help7"] = Cms::where("slug", "section-7")->first();
        return view("User.help", $data);
    }
    public function whatIsIntegrative()
    {
        $data["integrative1"] = Cms::where("slug", "functional-care-demo-01")->first();
        $data["integrative2"] = Cms::where("slug", "functional-care-demo-02")->first();
        $data["integrative3"] = Cms::where("slug", "functional-care-demo-03")->first();
        $data["integrative4"] = Cms::where("slug", "1673241968420461-functional-care-demo-01")->first();

        return view("User.whatIsIntegrative", $data);
    }


    public function videos()
    {
        $data["videos"] = VideoCms::get();
        return view("User.videos", $data);
    }

    public function quiz()
    {
        $data["quizzes"] = Quiz::get();
        return view("User.quizSection", $data);
    }

    public function quizPost( Request $request )
    {
        $data = $request->except("_token");
        // $quiz_ans = [];
        foreach ($data as $key => $value) {
            $result["question_id"] = (int) filter_var($key, FILTER_SANITIZE_NUMBER_INT);
            $result["given_ans"] = $value;
            $result["user_id"] = auth()->id();
            Result::create($result);
            // array_push($quiz_ans, $result);
        }
        // $total_questions = Quiz::count();
        // $total_attempt_qsn = count($quiz_ans);
        //  foreach($quiz_ans as $check_ans){
        //     $quiz_qsn = Quiz::find($check_ans["question_id"]);
        //     if($quiz_qsn->correct_ans == $check_ans["given_ans"])

        //  }

        return back();

        
       
    }
    public function privacyPolicy()
    {
        return view("User.privacyPolicy");
    }

    public function lab() {
        return view('User.lab');
    }
}