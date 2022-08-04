@extends('template.master')
@section('page-title')
    商品列表
@endsection
@section('main')
<div class="container">
    <div class="row g-4">
        @foreach($products as $product)
        <div class="col-xl-3">
            <div class="border rounded-2 overflow-hidden">
                {{-- <img src="/images/{{$product->cover}}" alt="" class="w-100"> --}}
                <img src="{{asset('images/'.$product->cover)}}" alt="" class="w-100">
                <div class="p-4">
                    <h4>
                        <a href="/product/{{$product->id}}">
                            {{$product->title}}
                        </a>
                    </h4>
                    <div>
                        分類:
                        <a href="{{route('productCategory',[$product->category_id])}}" class="badge bg-secondary">
                            {{$product->category->title}}
                        </a>
                    </div>
                    <div class="my-3">
                        @if($product->sale)
                        原價<del>{{$product->price}}</del> 特價<b class="text-danger">{{$product->sale}}</b>
                        @else
                        <b>售價{{$product->price}}</b>
                        @endif
                    </div>
                    <div>
                        <button class="btn btn-primary">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
