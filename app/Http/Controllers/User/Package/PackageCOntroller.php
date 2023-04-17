<?php

namespace App\Http\Controllers\User\Package;

use App\Http\Controllers\Controller;
use App\Models\OrderHistory;
use App\Models\Packages;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PackageCOntroller extends Controller
{
   public function packages() {
      $data['packages'] = DB::table('packages')->get();
      return view("User.packages", $data);
   }

   public function buyPlan($id) {
      $data["package"] = Packages::where('id', $id)->first();
      return view("User.buyPlan", $data);
   }

   public function proceedToPay( Request $request ) {
      $package= DB::table("packages")->where("id", $request->package_id)->first();
      $data["package_id"] = $request->package_id;
      $data["user_id"] = auth()->id();
      $data["amount"] = $package->package_price;
      $current_date = date("Y-m-d");
      if($package->package_type == "Monthly") {
         $data["end_date"] = date("Y-m-d", strtotime("+30 days", strtotime($current_date)));
      }elseif($package->package_type == "Yearly") {
         $data["end_date"] = date("Y-m-d", strtotime("+364 days", strtotime($current_date)));
      }
      $place_order = OrderHistory::create($data);
      return redirect()->route("user.myPlan");

   }

   public function myPlan () {
      $data["myplans"] = OrderHistory::where("user_id", auth()->id())->get();
      return view("User.Dashboard.myplans", $data);
   }
}
