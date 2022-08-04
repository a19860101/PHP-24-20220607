@extends('template.master')
@section('page-title')
{{$product->title}}
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="/images/{{$product->cover}}"  class="w-100">
        </div>
        <div class="col-lg-6">
            <h3>{{$product->title}}</h3>
            <div>分類:<span class="badge bg-secondary">{{$product->category->title}}</span></div>
            <div>
                {{$product->desc}}
            </div>
            <div class="my-3">
                @if($product->sale)
                原價<del>{{$product->price}}</del> 特價<b class="text-danger">{{$product->sale}}</b>
                @else
                <b>售價{{$product->price}}</b>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
