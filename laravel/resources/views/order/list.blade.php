@extends('template.master')
@section('page-title')
    訂單列表
@endsection
@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-8">
            <h1>訂單列表</h1>

        </div>
        <div class="col-8">
            @if(count($orders) != 0)
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>訂單編號</th>
                    <th>動作</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>
                        {{$order->orderId}}
                    </td>
                    <td>
                        <a href="{{route('orderDetail',['id'=>$order->id])}}" class="btn btn-success btn-sm">詳細內容</a>
                    </td>
                </tr>
                @endforeach

            </table>
            @else
            <h2>您沒有訂單</h2>
            @endif
        </div>

    </div>
</div>
@endsection
