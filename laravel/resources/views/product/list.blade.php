@extends('template.master')
@section('page-title')
    商品管理列表
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>商品名稱</th>
                        <th>售價</th>
                        <th>特價</th>
                        <th>上架日期</th>
                        <th>下架日期</th>
                        <th>動作</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->sale}}</td>
                        <td>{{$product->started_at}}</td>
                        <td>{{$product->ended_at}}</td>
                        <td>
                            <a href="{{route('product.edit',[$product->id])}}" class="btn btn-info btn-sm">編輯</a>
                            <a href="{{route('product.edit',['product' => $product->id])}}" class="btn btn-info btn-sm">編輯</a>
                            <form action="" class="d-inline-block">
                                <input type="submit" class="btn btn-danger btn-sm" value="刪除">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
