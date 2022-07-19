<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    //
    public function index(){
        // return view('post/index');
        return view('post.index');
    }
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        // raw sql
        // DB::insert('INSERT INTO posts(title,body,created_at,updated_at)VALUES(?,?,?,?)',[
        //     $request->title,
        //     $request->body,
        //     now(),
        //     now()
        // ]);

        // query builder
        DB::table('posts')->insert([
            'title'         => $request->title,
            'body'          => $request->body,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
        return 'success';
        // raw sql
        // query builder
        // model
    }
}
