<?php

namespace App\Http\Controllers\User\Index;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use App\Models\Cms;
use App\Models\ConsultAppointment;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
   public function index() {
      $data["home1"] = Cms::where("slug", "healing-starts-from-you")->first();
      $data["home2"] = Cms::where("slug", "best-treatment-at-our-health-hoodlum-studio")->first();
      $data["home3"] = Cms::where("slug", "symptoms-for-consultation")->first();
      $data["home4"] = Cms::where("slug", "welcome-to-health-hoodlum")->first();
      $data["home5"] = Cms::where("slug", "meditation-yoga-retreats")->first();
      $data["home6_a"] = Cms::where("slug", "the-happiness-program")->first();
      $data["home6_b"] = Cms::where("slug", "1672808974213993-the-happiness-program")->first();
      $data["home6_c"] = Cms::where("slug", "1672809000505517-the-happiness-program")->first();
      $data["home7"] = Cms::where("slug", "taking-yoga-beyond-the-mat-training")->first();
      $data["home8"] = Cms::where("slug", "choose-your-package")->first();
      $data["home9"] = Cms::where("slug", "testimonials")->first();
      $data["home10"] = Cms::where("slug", "latest-news")->first();
      
      $data["consultations"] = DB::table("consultations")->get();
      // dd($data);
      $data['packages'] = DB::table('packages')->get();
      $data['testimonials'] = Testimonial::get();
      $data['blogs'] = blogs::get();
    return view('User.Index.index', $data);
   }
   public function services() {
      $data["serviceCms1"] = Cms::where("slug", "functional-care")->first();
      $data["serviceCms2"] = Cms::where("slug", "clinical-nutrition")->first();
      $data["serviceCms3"] = Cms::where("slug", "dr-andrino-is-a-fantastic-diagnostician-across-disciplines")->first();
      $data["serviceCms4"] = Cms::where("slug", "drugless-family-wellness")->first();
      $data["serviceCms5"] = Cms::where("slug", "fees")->first();
      return view("User.services", $data);
   }

   public function takeConsultation() {
      
      $data["consultations"] = DB::table("consultations")->get();
      return view("User.consultantForm", $data);
   }

   public function postConsultation( Request $request ) {
      $request->validate([
         "consultation_id" => "required|numeric",
         "message" => "string|max:500|nullable",
      ]);
      $data = $request->except("_token");
      // dd($data);
      $data["user_id"] = auth()->id();
      ConsultAppointment::create($data);
      return back()->with("msg", "Thanks for taking service, we will get back to you");
   }

   public function submitQuery( Request $request ) {
      $request->validate([
         "name" => "required|string",
         "email" => "required|email",
         "subject" => "required|string",
      ]);
      $data = $request->except("_token");
      $store = DB::table("queries")->insert($data);
      if($store) {
         return back()->with("msg", "Thanks for your time, we will go through your query.");
      }else {
         return back()->with("msg", "Some error occur!");
      }
   }

   public function sendNewsletter( Request $request ) {
      $request->validate([
         "email_n" => "required|email"
      ]);
      $find = DB::table("newsletters")->where("email_n", $request->email_n)->first();
      if(!$find){
         $store = DB::table("newsletters")->insert([
            "email_n" => $request->email_n
         ]);
         if($store) {
            return back()->with("msg_s", "Thanks for subscribing our newsletter");
         }else{
            return back()->with("msg_s", "Some error occur, try again!");
         }
      }else{
         return back()->with("msg_s", "You already subscribed");
      }
      
   }
}
