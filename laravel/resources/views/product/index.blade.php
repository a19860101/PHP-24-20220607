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
