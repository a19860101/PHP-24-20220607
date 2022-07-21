@extends('template.master')

@section('main')
<h1>Create Post</h1>

<form action="/post" method="post">
    @csrf
    <div>
        <label for="">標題</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="">內文</label>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="送出">
    <input type="button" value="取消" onclick="history.back()">
</form>
@endsection
