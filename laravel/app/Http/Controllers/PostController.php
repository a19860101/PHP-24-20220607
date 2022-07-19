<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function test(){
        return view('welcome');
    }
    public function hello(){
        return view('about');
    }
}
