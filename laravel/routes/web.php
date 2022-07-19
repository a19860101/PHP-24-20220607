<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::get('/', function(){
    return 'Index';
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/test',[App\Http\Controllers\PostController::class,'test']);
Route::get('/hello/about',[PostController::class,'hello']);
