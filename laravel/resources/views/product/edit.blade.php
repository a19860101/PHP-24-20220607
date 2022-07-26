@extends('template.master')
@section('page-title')
    編輯商品
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>編輯商品</h2>
            </div>
            <div class="col-6">
                <form action="{{route('product.update',[$product->id])}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="" class="form-label">商品名稱</label>
                        <input type="text" class="form-control" name="title" value="{{$product->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">原價</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">特價</label>
                        <input type="text" class="form-control" name="sale" value="{{$product->sale}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品敘述</label>
                        <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$product->desc}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">上架日期</label>
                        <input type="datetime-local" class="form-control" name="started_at" value="{{$product->started_at}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">下架日期</label>
                        <input type="datetime-local" class="form-control" name="ended_at"value="{{$product->ended_at}}">
                    </div>
                    <input type="submit" value="更新商品" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
