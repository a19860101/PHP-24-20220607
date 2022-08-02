@extends('template.master')
@section('page-title')
    新增商品
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>新增商品</h2>
            </div>
            <div class="col-6">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">商品名稱</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品圖片</label>
                        <input type="file" class="form-control" name="cover">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品分類</label>
                        <select name="category_id" id="" class="form-select">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">原價</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">特價</label>
                        <input type="text" class="form-control" name="sale">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品敘述</label>
                        <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">上架日期</label>
                        <input type="datetime-local" class="form-control" name="started_at">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">下架日期</label>
                        <input type="datetime-local" class="form-control" name="ended_at">
                    </div>
                    <input type="submit" value="新增商品" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
