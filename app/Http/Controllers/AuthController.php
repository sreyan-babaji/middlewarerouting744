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
            if(Auth::check() and Auth::user()->user_role=='user'){
                return redirect()->route('u.dashboard');
            }
            elseif(Auth::check() and Auth::user()->user_role=='editor'){
                return redirect()->route('e.dashboard');
            }
            elseif(Auth::check() and Auth::user()->user_role=='admin'){
                return redirect()->route('ad.a.dashboard');
            }
            elseif(Auth::check() and Auth::user()->user_role=='super_admin'){
                return redirect()->route('s.a.dashboard');
            }
            else{return view('login');}

        }
        else{
            return redirect()->back();
        }
    }

    //logout
    public function logout(){
        if(Auth::logout()){
            return redirect()->route('login');
        }
        else{
           return redirect()->back();
        }
        
        
    }
}
