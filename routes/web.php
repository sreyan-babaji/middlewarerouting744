<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

//login
Route::controller(AuthController::class)->group(function(){
    Route::get('login','login_view')->name('login');
    Route::post('loged-in','loged_in')->name('loged_in');
    Route::get('logout','logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function(){
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

Route::get('user-dashboard',function(){return'this is user Dashboard';})->name('user_dashboard');
Route::get('editor-dashboard',function(){return'this is editor Dashboard';})->name('editor_dashboard');
Route::get('admin-dashboard',function(){return'this is admin Dashboard';})->name('admin_dashboard');
Route::get('super-admin-dashboard',function(){return'this is super admin Dashboard';})->name('superadmin_dashboard');