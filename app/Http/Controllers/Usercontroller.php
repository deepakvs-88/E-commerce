<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class Usercontroller extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return 'Username or password not Matched';
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $req){
        $user= new User;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->passsword);
       $user->save();
       return redirect('/login');
    }
}
