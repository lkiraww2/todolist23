<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SigninController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function login(Request $request)
    {
    $user = User::where("email", $request->email)->first();
    
       if($user){
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect("/home")->with("success","login success");
       }
    }
}
