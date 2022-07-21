@extends('template.master')
@section('main')
    <h1>Edit Post</h1>

    <form action="/post/{{$post->id}}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="">標題</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
        </div>
        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
@endsection
