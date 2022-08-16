@extends('template.master')
@section('page-title')
    訂單內容
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-8">
            <h1>訂單列表</h1>

        </div>
        <div class="col-8">
            @foreach($order_details as $od)
            <div>
                {{$od->product->title}} -
                @if($od->product->sale)
                    <del>{{$od->product->price}}</del>
                    {{$od->product->sale}}
                @else

                    {{$od->product->price}}
                @endif
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
