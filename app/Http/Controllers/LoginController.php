<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function adminLogin (){
        return view("dashboard/login");
    }

    public function loginUser (Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        return $request->all();

    }

    public function userData(){
        $admin = [
            "name" => "Muhammad Sajid",
            "email" => "sajid@gmail.com",
            "mobile" => "03084211442",
            "password" => bcrypt("admin"),
        ];
        return $admin;
        $user= new User;
        $user->name = "Muhammad Sajid";
        $user->email = "sajid@gmail.com";
        $user->mobile = "03084211442";
        $user->password = bcrypt("admin");
        return $user;
        if($user->save()){
            echo "Data inserted";
        }else{
            echo "Any error";
        }
        exit;
    }
}
