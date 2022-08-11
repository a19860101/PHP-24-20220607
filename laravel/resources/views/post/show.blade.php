@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>{{$post->title}}</h1>
            <div>
                <small>作者:{{$post->user->name}}</small>
            </div>
            <div>
                {{$post->body}}
            </div>
            <div>
                最後更新時間 {{$post->updated_at}}
            </div>
            <a href="/post" class="btn btn-primary">文章列表</a>
            @if($post->user_id == Auth::id())
            <form action="" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <input type="submit" value="刪除文章" class="btn btn-danger" onclick="return confirm('確認刪除？')">
            </form>
            <a href="/post/{{$post->id}}/edit" class="btn btn-success">編輯</a>
            @endif
        </div>
    </div>
</div>

@endsection
