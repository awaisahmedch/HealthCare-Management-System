<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    
    function insert(Request $req){
        $name = $req->get('pname');
        $pcity = $req->get('pcity');
        $pimage = $req->file('image')->getClientOriginalName( );
        //move uploaded file
        $req->image->move(public_path('images'), $pimage); 
  
        $prod = new product();
        // $prod->PName = $name;
        $prod->PName = $name;
        $prod->PCity = $city;  
        $prod->PImage = $pimage;
        $prod->save();
        return redirect('wel');
    }
    function readdata(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
}