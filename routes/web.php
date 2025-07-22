<?php

use App\Http\Controllers\BladeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\DemoController;

 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo1/{email}',[DemoController::class, 'SessionPut']);
Route::get('demo2',[DemoController::class, 'SessionPull']);
Route::get('demo3',[DemoController::class, 'SessionGet']);
Route::get('demo4',[DemoController::class, 'SessionForget']);
Route::get('demo5',[DemoController::class, 'SessionFlush']);
Route::get('demo6',[DemoController::class, 'HeaderMiddleware'])->middleware([DemoMiddleware::class]);
// milldeware group----------

 Route::middleware(['demo'])->group(function(){

    Route::get('demo7/{url_paramiter}',[DemoController::class, 'GroupMiddleware1']);
    Route::get('demo8/{url_paramiter}',[DemoController::class, 'GroupMiddleware2']);
    Route::get('demo9/{url_paramiter}',[DemoController::class, 'GroupMiddleware3']);
    Route::get('demo10/{url_paramiter}',[DemoController::class, 'GroupMiddleware4']);
    Route::get('demo11/{url_paramiter}',[DemoController::class, 'GroupMiddleware5']);

 });


 // blade route-----------------

Route::get('/blade1/{num1}/{num2}',[BladeController::class,'BladeFile']);
Route::get('/blade2/{num1}/{num2}',[BladeController::class,'BladeFile2']);