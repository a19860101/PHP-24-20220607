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
            <div>
                {{$product->desc}}
            </div>
            <div>
                {{$product->price}}
            </div>
        </div>
    </div>
</div>
@endsection
