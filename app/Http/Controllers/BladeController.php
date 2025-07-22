<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function BladeFile(Request $request){
        $num1=$request->num1;
        $num2=$request->num2;
        $sum=$num1+$num2;
        $data=['result'=>$sum];
        return view('home',$data);
    }

    function BladeFile2(Request $request){
        $num1=$request->num1;
        $num2=$request->num2;
        $sum=$num1+$num2;
        $data=['result'=>$sum];
        return view('home',$data);
    }
}
