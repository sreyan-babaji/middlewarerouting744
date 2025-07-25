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
        // if(session()->has('log_id')){
        //     $user_id = session()->get('log_id');
        //     $user = User::where('id',$user_id);
        //     if($user){
        //         Auth::login(user);
        //     }
        // }

        if (Cookie::has('login_id')) {
            $userId = Cookie::get('login_id');
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

    //login .data fetch
    public function loged_in(Request $request){

        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            // Session::put('log_id', Auth::user()->id);

            Cookie::queue('login_id', Auth::user()->id, 120);
            
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

            return redirect()->route('login')->withoutCookie('login_id');
        }
        else{
           return redirect()->back();
        }  
    }
}
