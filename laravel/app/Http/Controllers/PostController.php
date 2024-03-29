<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        //raw
        // $posts = DB::select('SELECT * FROM posts ORDER BY id DESC');

        // query builder
        // $posts = DB::table('posts')->orderBy('id','DESC')->get();
        $posts = Post::orderBy('id','DESC')->get();

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
            'user_id'       => Auth::id(),
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
        // $post = DB::table('posts')->find($id);
        $post = Post::find($id);

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
    public function edit($id){
        $post = DB::table('posts')->find($id);
        return view('post.edit',compact('post'));
    }
    public function update(Request $request,$id){
        // raw
        // DB::update('UPDATE posts SET title=?,body=?,updated_at=? WHERE id=?',[
        //     $request->title,
        //     $request->body,
        //     now(),
        //     $id
        // ]);

        //query builder
        DB::table('posts')->where('id',$id)->update([
            'title'         => $request->title,
            'body'          => $request->body,
            'updated_at'    => now()
        ]);

        return redirect('/post');
    }
}
