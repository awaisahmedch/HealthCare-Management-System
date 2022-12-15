<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Database;
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
    // if(session()->has('name')){
    //     return redirect("profile");
    // }
    return view('welcome');
});
Route::get("appointment", function(){
    // if(!session()->has('name')){
    //     return redirect("/");
    // }
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
Route::get("doctor_dashboard", function(){
    return view("doctor_dashboard");
});
Route::get("logout" ,function(){
    session()->pull('name');
    return redirect("/");
});
Route::post("signup", [Database::class, "addData"]);
Route::get("signin", [Database::class, "login"]);
Route::get("del", [Database::class, "delete"]);
