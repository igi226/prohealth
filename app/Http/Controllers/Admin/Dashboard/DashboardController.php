<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Models\Admin;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('Admin.Dashboard.dashboard');
    }

    public function adminProfile() {
        $data['admin_info'] = Admin::where('slug', 'admin-healthhoodlum')->first();
        return view("Admin.Profile.updateProfile", $data);
    }

    public function adminProfileUpdate( Request $request ) {
       
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
        ]);
        $data = $request->except("_token");
      
        $update = Admin::where('slug', 'admin-healthhoodlum')->update($data);
        if ($update) {
            return redirect()
                ->back()
                ->with("msg", "Admin Information Updated Successfully");
        } else {
            return redirect()
                ->back()
                ->with("msg", "Some Error Occur!");
        }
    }

    public function adminChangePassword() {
        return view('Admin.Profile.changePassword');
    }

    public function changePassword( Request $request) {
        $validate = Validator::make($request->all(), [
            "old_password" => "required|password",
            "new_password" => "required|password|min:8",
            "confirm_password" => "same:new_password",
        ]);
        if ($validate->fails()) {
            return redirect('admin/admin-change-password')
            ->withErrors($validate)
            ->withInput();
         }
        $old_password = DB::table('admins')->where("slug", "admin-healthhoodlum")->first();
        if (Hash::check($request->old_password, $old_password->password)) {
            if($request->new_password == $request->confirm_password){
                $old_password->update(['password' => Hash::make($request->new_password)]);
                return redirect()->back()->with('msg', 'Password updated successfully');
            }else{
                return redirect()->back()->with("msg", "Confirm password should match with current password");  
            }
            
            
        }else{
            return redirect()->back()->with("msg", "Current Password doesn not Match");
        }
    }

    public function siteSettings() {
        $data['siteInfos'] = DB::table('admins')->first();
        return view('Admin.Dashboard.siteSettings', $data);
    }

    public function siteSettingsupdate( Request $request) {

        $request->validate([
            "instagram" => "string|nullable",
            "youtube" => "string|nullable",
            "facebook" => "string|nullable",
            "twitter" => "string|nullable",
            "site_about" => "required|string|max:500",
            "site_favicon" => "nullable",
            "site_logo" => "nullable",
            "site_phone" => "string|nullable",
            "site_email" => "email|nullable",
            "site_address" => "required|string",
            "site_name" => "required|string",
        ]);
        $data = $request->except("_token");
        $img = Admin::where("slug", "admin-healthhoodlum")->select('site_logo', 'site_favicon')->first();
        if ($request->has("site_logo")) {
            File::delete("storage/SiteImages/" . $img->site_logo);
            $image = $request->file("site_logo");
            $site_logo =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();
            $image->storeAs("public/SiteImages", $site_logo);
            $data["site_logo"] = $site_logo;
        }
        else {
           $data["site_logo"] = $img->site_logo;
        }

        if ($request->has("site_favicon")) {
           File::delete("storage/SiteImages/" . $img->site_favicon);
           $image = $request->file("site_favicon");
           $site_favicon =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();
            $image->storeAs("public/SiteImages", $site_favicon);
            $data["site_favicon"] = $site_favicon;
        }else {
           
            $data["site_favicon"] = $img->site_favicon;
        }
        $update = DB::table('admins')->where("slug", "admin-healthhoodlum")->update($data);
        if($update) {
            return back()->with("msg", "Site informations are updated successfully");
        }else {
            return back()->with("mag", "some error occur");
        }

    }

    public function queries() {
        $data["queries"] = Query::get();
        return view("Admin.Query.queries", $data);
    }

    public function queriesView( $id ) {
        $data["query"] = DB::table("queries")->where("id", $id)->first();
        return view("Admin.Query.view", $data);
    }

    public function queriesDelete($id) {
        $query = Query::where("id", $id)->first();
        $query->delete();
        return back()->with("msg", "The Query has been deleted succesfully");
    }
    
   
}
