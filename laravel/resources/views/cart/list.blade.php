@extends('template.master')
@section('page-title')
    購物車列表
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-8">
            <h1>購物車列表</h1>
        </div>
        @foreach($carts as $cart)
        <div class="col-8">
            <div class="border rounded-3 my-2 p-4">
                <h4>{{$cart->product->title}}</h4>
                <div>
                    @if($cart->product->sale)
                    原價<del>{{$cart->product->price}}</del>
                    <b class="text-danger">特價{{$cart->product->sale}}</b>
                    @else
                    <b>售價{{$cart->product->price}}</b>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
