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
Route::post('/post',[PostController::class,'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::delete('/post/{id}',[PostController::class,'destroy']);
Route::get('post/{id}/edit',[PostController::class,'edit']);
Route::patch('/post/{id}',[PostController::class,'update']);
