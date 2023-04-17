<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Mail\AdminForgetPassword;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Validator;
class AuthController extends Controller
{
    public function loginForm() {
        return view('Admin.Auth.login');
    }

    public function login( Request $request ) {
        $validator = FacadesValidator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|password',
        ]);
        $data = $request->all();
        if(Auth::guard('admin')->attempt(["email" => $data["email"], "password" => $data["password"]])){
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return back()->with("msg", "Invalid credentials");
        }
    }

    public function adminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with("msg", "Logged out successfully");
    }

    public function forgotPasword () {
        return view('Admin.Auth.forgetPassword');

    }

    public function getPaswordMail( Request $request ) {
        $request->validate([
            "email" => "required|email"
        ]);
        $to_mail = $request->email;
        $temporary_password = $this->genratePassword();
        $check = Admin::where('email', $to_mail)->first();
        if($check) {
        $admin_name = $check->name;
            Mail::to($to_mail)
                ->send(new AdminForgetPassword($temporary_password, $admin_name));
            $check->update(['password'=> Hash::make($temporary_password)]);
            return redirect()->route('admin.login')->with("msg", "Please check the mail");
        }else {
            return back()->with("msg", "This email doesn't exists");
        }
        
    }

    function genratePassword() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
     
        for ($i = 0; $i < 10; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
     
        return $randomString;
    }
}
