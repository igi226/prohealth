<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserDashboardController extends Controller
{
    public function profile() {
        return view("User.Dashboard.profile");
    }

    public function editProfile() {
        return view("User.Dashboard.editProfile");
    }

    public function updateProfile( Request $request) {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "bio"   => "string|max:500|nullable"
        ]);
        $data = $request->except("_token", "image");
        $img = User::where('id', auth()->id())->select('image')->first();
        if ($request->has("image")) {
        File::delete("storage/UserImage/" . $img->image);
            $image = $request->file("image");
            $profile_img =
                time() .
                rand(0000, 9999) .
                "." .
                $image->getClientOriginalExtension();
                $image->storeAs("public/UserImage", $profile_img);
            $data["image"] = $profile_img;
        }else {
            $data["image"] = $img->image;
        }
        User::where("id", auth()->user()->id)->update($data);
        return redirect()->route("user.profile")->with("msg", "Profile updated successfully");
    }
}
