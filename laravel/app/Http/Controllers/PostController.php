<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    //
    public function index(){
        //raw
        // $posts = DB::select('SELECT * FROM posts ORDER BY id DESC');

        // query builder
        $posts = DB::table('posts')->orderBy('id','DESC')->get();

        // return view('post.index')->with(['posts' => $posts]);
        // return view('post.index',['posts' => $posts]);
        return view('post.index',compact('posts'));

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
        return redirect('/post');
        // raw sql
        // query builder
        // model
    }
    public function show($id){
        //raw
        // $post = DB::select('SELECT * FROM posts WHERE id = ?',[
        //     $id
        // ]);

        //query builder
        $post = DB::table('posts')->find($id);

        // return view('post.show',compact('post'));
        return view('post.show',['post' => $post]);
    }
    public function destroy($id){
        //raw
        // DB::delete('DELETE FROM posts WHERE id = ?',[$id]);

        // query builder
        DB::table('posts')->delete($id);

        return redirect('/post');
    }
}
