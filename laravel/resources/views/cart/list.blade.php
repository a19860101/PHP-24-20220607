@extends('template.master')
@section('page-title')
    購物車列表
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-8">
            <h1>購物車列表</h1>
            @if(count($carts) == 0)
            <a href="{{route('product.index')}}">
                購物車是空的喔，快去購物吧
            </a>
            @endif
            @if(count($carts) != 0)
            <form action="{{route('removeCart')}}" method="post">
                @csrf
                <input type="submit" class="btn btn-warning btn-sm" value="清空購物車" onclick="return confirm('確認清空?')">
            </form>
            @endif
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
                <form action="{{route('deleteCartItem',[$cart->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="移除" class="btn btn-danger btn-sm"onclick="return confirm('確認清空?')">
                </form>
            </div>
        </div>
        @endforeach
        @if(count($carts) != 0)
        <div class="col-8 text-end" >
            總金額:{{$total}}
            <form action="{{route('checkout')}}" method="post">
                @csrf
                <input type="submit" class="btn btn-primary" value="結帳">
            </form>
        </div>
        @endif
    </div>
</div>
@endsection
