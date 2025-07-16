<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImgUploadController;

//img upload
Route::get('img-upload',[ImgUploadController::class,'upload_view'])->name('upload.view');
Route::post('img-uploaded',[ImgUploadController::class,'uploaded'])->name('uploaded');


//all dashboard
Route::get('/', function () { return view('welcome');})->name('dashboard');

//login
Route::controller(AuthController::class)->group(function(){
    Route::get('login','login_view')->name('login');
    Route::post('loged-in','loged_in')->name('loged_in');
    Route::get('logout','logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard',[DashboardController::class,'single_dashboard'])->name('single.dashboard');
    //user
    Route::prefix('user')->middleware('user')->group(function(){
        Route::get('user1', function(){return 'user php1';})->name('user1');
        Route::get('user2', function(){return 'user 2';})->name('user2');
        Route::get('user3', function(){return 'user 3';})->name('user3');
        Route::get('user4', function(){return 'user 4';})->name('user4');
    });

    //editor
    Route::prefix('editor')->middleware('editor')->group(function(){
        Route::get('editor1', function(){return 'editor 1';})->name('editor1');
        Route::get('editor2', function(){return 'editor 2';})->name('editor2');
        Route::get('editor3', function(){return 'editor 3';})->name('editor3');
        Route::get('editor4', function(){return 'editor 4';})->name('editor4');
    });

    //admin
    Route::prefix('admin')->middleware('admin')->name('ad.')->group(function(){
        Route::get('admin1', function(){return 'admin 1';})->name('admin1');
        Route::get('admin2', function(){return 'admin 2';})->name('admin2');
        Route::get('admin3', function(){return 'admin 3';})->name('admin3');
        Route::get('admin4', function(){return 'admin 4';})->name('admin4');
    });

    //super admin
    Route::prefix('superadmin')->middleware('superadmin')->group(function(){
        
        Route::get('superadmin1', function(){return 'superadmin 1';})->name('superadmin1');
        Route::get('superadmin2', function(){return 'superadmin 2';})->name('superadmin2');
        Route::get('superadmin3', function(){return 'superadmin 3';})->name('superadmin3');
        Route::get('superadmin4', function(){return 'superadmin 4';})->name('superadmin4');
    });

});

Route::get('user-dashboard',function(){return view('user_dashboard');})->middleware('user_dashboard')->name('u.dashboard');
Route::middleware('editor_dashboard')->get('editor-dashboard', function(){ return view('editor_dashboard');})->name('e.dashboard');
Route::middleware('admin_dashboard')->get('admin-dashboard', function(){ return view('admin_dashboard');})->name('a.dashboard');
Route::middleware('superadmin_dashboard')->get('super-admin-dashboard', function(){ return view('super_admin_dashboard');})->name('s.a.dashboard');