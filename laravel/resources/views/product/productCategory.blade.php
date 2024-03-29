@extends('template.master')
@section('page-title')
    商品列表 -- {{$category->title}}
@endsection
@section('main')
<div class="container">
    <div class="row g-4">
        <div class="col-12">
            <h1> {{$category->title}} 商品</h1>
        </div>
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
                    <div>分類:<span class="badge bg-secondary">{{$product->category->title}}</span></div>
                    <div>
                        {{$product->price}}
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
