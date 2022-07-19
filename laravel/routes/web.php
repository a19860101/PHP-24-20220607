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

Route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
