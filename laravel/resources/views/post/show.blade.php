@extends('template.master')
@section('main')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <div>
        最後更新時間 {{$post->updated_at}}
    </div>
    <a href="/post">文章列表</a>
    <form action="" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除文章" onclick="return confirm('確認刪除？')">
    </form>
    <a href="/post/{{$post->id}}/edit">編輯</a>
</body>
@endsection
