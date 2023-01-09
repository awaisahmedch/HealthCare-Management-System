<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Database;
// use App\Http\Controllers\mycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(session()->has('name')){
        return redirect("profile");
    }
    return view('welcome');
});
Route::get("appointment", function(){
    return view("appointment");
});
Route::get("hospital", function(){
    return view("hospital");
});
Route::get("main_dashboard", function(){
    return view("main_dashboard");
});
Route::view("register","registration");
Route::get("profile", function(){
    if(!session()->has('name')){
        return redirect("/");
    }
    return view("profile");
});
Route::get("labs", function(){
    return view("labs");
});


Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get("ambulance", function(){
    return view("ambulance");
});
Route::get("doctor_dashboard", function(){
    return view("doctor_dashboard");
});
Route::get("logout" ,function(){
    session()->pull('name');
    return redirect("/");
});
Route::get("users", function(){
    return view("users");
});
//  Route::view('index','insertRead');
// Route::post('insertData',[mycontroller::class ,'insertRead']);
// Route::get('wel',[mycontroller::class,'readdata']);

Route::post("signup", [Database::class, "addData"]);
Route::get("signin", [Database::class, "login"]);
Route::get("del", [Database::class, "delete"]);
