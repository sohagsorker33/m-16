<?php

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