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
            <h2>{{$cart->product_id}}</h2>
        </div>
        @endforeach
    </div>
</div>
@endsection
