@extends('template.master')
@section('page-title')
    QQ Laravel
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>文章列表</h1>
        </div>
        <div class="col-8">
            @foreach($posts as $post)
            <div class="border rounded-2 p-4 my-4">
                <h2>{{ $post->title }}</h2>
                <div class="mb-3"><small class="text-muted">作者:{{$post->user->name}} ({{$post->user->email}})</small></div>
                <div>
                    {{ $post->body }}
                </div>
                <a href="/post/{{$post->id}}">繼續閱讀</a>
                <div>
                    建立時間 {{ $post->created_at }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
