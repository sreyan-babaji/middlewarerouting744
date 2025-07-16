<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AuthController extends Controller
{
    //login view
    public function login_view(){
        if(Auth::check()){
             return redirect()->route('dashboard');
        }
        else{
           return view('login');
        }
    }

    //login data fetch
    public function loged_in(Request $request){

        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            return redirect()->route('single.dashboard');
        }
        else{
            return redirect()->back();
        }
    }

    //logout
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('login');
        }
        else{
           return redirect()->back();
        }  
    }
}
