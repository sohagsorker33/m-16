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

    function BladeFile3(Request $request){
       
       $data=[

          ['name'=>'sohag','age'=>20],
          ['name'=>'rofikul','age'=>21],
          ['name'=>'badal','age'=>20],
          ['name'=>'sakib','age'=>22],
          ['name'=>'solaman','age'=>10]

       ];

        return view('loop',['users'=>$data]);
    }
}
