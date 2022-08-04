@extends('template.master')
@section('page-title')
    商品管理列表
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>未刪除</h3>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>商品名稱</th>
                        <th>分類</th>
                        <th>售價</th>
                        <th>特價</th>
                        <th>上架日期</th>
                        <th>下架日期</th>
                        <th>資料建立時間</th>
                        <th>資料更新時間</th>
                        <th>動作</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->sale}}</td>
                        <td>{{$product->started_at}}</td>
                        <td>{{$product->ended_at}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>

                        <td>
                            <a href="{{route('product.edit',[$product->id])}}" class="btn btn-info btn-sm">編輯</a>
                            <a href="{{route('product.edit',['product' => $product->id])}}" class="btn btn-info btn-sm">編輯</a>
                            <form action="{{route('product.destroy',[$product->id])}}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger btn-sm" value="刪除" onclick="return confirm('確認刪除？')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="w-100 py-3"></div>
            <div class="col-12">
                <h3>已刪除</h3>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>商品名稱</th>
                        <th>分類</th>
                        <th>售價</th>
                        <th>特價</th>
                        <th>上架日期</th>
                        <th>下架日期</th>
                        <th>資料建立時間</th>
                        <th>資料更新時間</th>
                        <th>動作</th>
                    </tr>
                    @foreach($trashes as $trash)
                    <tr>
                        <td>{{$trash->id}}</td>
                        <td>{{$trash->title}}</td>
                        <td>{{$trash->category->title}}</td>
                        <td>{{$trash->price}}</td>
                        <td>{{$trash->sale}}</td>
                        <td>{{$trash->started_at}}</td>
                        <td>{{$trash->ended_at}}</td>
                        <td>{{$trash->created_at}}</td>
                        <td>{{$trash->updated_at}}</td>

                        <td>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
