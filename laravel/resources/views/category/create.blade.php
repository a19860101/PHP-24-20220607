@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>新增分類</h2>
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label">分類名稱</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">分類英文名稱</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <input type="submit" class="btn btn-primary" value="建立分類">
            </form>
        </div>
        <div class="col-4">
            <h2>分類列表</h2>
            <ul class=" mt-4 list-group">
                <li class="list-group-item">test</li>
                <li class="list-group-item">test</li>
                <li class="list-group-item">test</li>
                <li class="list-group-item">test</li>
            </ul>
        </div>
    </div>
</div>
@endsection
