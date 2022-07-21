@extends('template.master')
@section('page-title')
    QQ Laravel
@endsection
@section('main')
<h1>Post Index</h1>
    @foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <div>
            {{ $post->body }}
        </div>
        <a href="/post/{{$post->id}}">繼續閱讀</a>
        <div>
            建立時間 {{ $post->created_at }}
        </div>
    </div>
    @endforeach
@endsection
