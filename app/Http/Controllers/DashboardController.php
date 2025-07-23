<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function single_dashboard(){
            if(Auth::user()->user_role=='user'){
                return redirect()->route('u.dashboard');
            }
            elseif(Auth::user()->user_role=='editor'){

                return redirect()->route('e.dashboard');
            }
            elseif(Auth::user()->user_role=='admin'){
                return redirect()->route('a.dashboard');
            }
            elseif(Auth::user()->user_role=='super_admin'){
                return redirect()->route('s.a.dashboard');
            }
            else{return redirect()->route('login');}
    }
}
