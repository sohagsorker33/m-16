<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    //সেশন পুট  বলতে বোঝায় টেম্পোরারি ডাটা স্টোর
    function SessionPut(Request $request){

         $email=$request->email;
         $request->session()->put('UserEmail',$email);
         return "Success Put";

    }
   
    // session Pull bolte bughai temporary data store thaka data tula  niya asa 
    //but ai session pull sudhu 1 request ar jonno thakbe tarpor aber request dila session thaka data destory hoiya jabe
  function SessionPull(Request $request){

     return $request->session()->pull('UserEmail');

  }

  // session Get bolte bughai temporary data store thaka data tula  niya asa 
 // but ai session get ar jonno amar joto bar icha request patha te pari kn2 session thaka data destory hobe nah 

 function SessionGet(Request $request){

     return $request->session()->get('UserEmail');

 }
 
 // session Forget bolte bughai temporary data store thaka spacific jata tula niya asbe sudhu sa data ka delete kora

 function SessionForget(Request $request){

     return $request->session()->forget('UserEmail');

 }

 function SessionFlush(Request $request){

     return $request->session()->flush();

 }


}
