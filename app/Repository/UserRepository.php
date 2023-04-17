<?php
namespace App\Repository;

use App\Repository\Interface\UserInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class UserRepository implements UserInterface {
    public function all( ) {
        return DB::table("users")->get();
    }

    // public function store(Request $request) {
    //     $request->validate([
    //         "name" => "required|string",
    //         "name" => "required|email",
    //     ]);
    //     $data = $request->except("_token");
    //     $store  = DB::table('users')->insert($data);
    //     return $store;
    // }

    public function changeS(Request $request) {
        $status = DB::table('users')->where('slug',$request->slug)->update(['status'=>$request->status]);
        return $status;
    }
}