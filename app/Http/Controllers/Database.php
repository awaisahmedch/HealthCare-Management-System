<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Database extends Controller
{
    function addData(Request $request){
        $newuser = new Student;
        $newuser->name = $request->input('name');
        $newuser->password = $request->input('password');
        $newuser->role_as = '0';
        $newuser->save();
        return redirect("/");
    }
    function login(Request $request){
        $auth1 = 0;
        $auth2 = 0;
        $userName = $request->input('name');
        $userPass = $request->input('password');  
        $checkDataForAdmin =DB::table("students")->where("name",$userName)->where("password",$userPass)->where('role_as','1')->get();
        $checkDataForPatient =DB::table("students")->where("name",$userName)->where("password",$userPass)->where('role_as','0')->get();
        //echo $checkData;
        $auth1 = count($checkDataForAdmin);
        $auth2 = count($checkDataForPatient);
        if($auth1==1){

            $request->session()->put("name", $userName);
            return redirect("main_dashboard");
            }
            else if($auth2==1){
                
            $request->session()->put("name", $userName);
            return redirect("profile");
            }
            else{
                return redirect("/");
            }
        }
        }
    
        