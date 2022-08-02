<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', function(){
    return 'Index';
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::post('/post',[PostController::class,'store'])->name('post.store');
Route::get('/post/{id}',[PostController::class,'show'])->name('post.show');
Route::delete('/post/{id}',[PostController::class,'destroy'])->name('post.destroy');
Route::get('post/{id}/edit',[PostController::class,'edit'])->name('post.edit');
Route::patch('/post/{id}',[PostController::class,'update'])->name('post.update');

Route::resource('/product',ProductController::class);

Route::get('admin/product',[ProductController::class, 'list'])->name('admin.product');

Route::resource('/category',CategoryController::class);
