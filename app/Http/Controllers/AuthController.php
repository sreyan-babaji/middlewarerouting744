<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    //login view
    public function login_view(){

        if (Cookie::has('user_id')) {
            $userId = Cookie::get('user_id');
            $user = User::find($userId);
            if ($user) {
                Auth::login($user);
            }
        }

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
            Session::put('welcome','welcome to this website');

            Cookie::queue('user_id', Auth::user()->id, 120);
            
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
