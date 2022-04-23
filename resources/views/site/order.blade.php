@extends('layouts.main')
@section('title','Giới thiệu')
@section('main')

<div class="container">
    <div class="jumbotron">
        <h3 class="display-3">GIỏ hàng</h3>
    </div>

    @if($orders->count())
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ngày mua</th>
                <th>Trạng thái</th>
                <th>Tổng số lượng</th>
                <th>Tổng tiền</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>1</td>
                <td>{{$order->created_at->format('d-m-Y')}}</td>
                <td>{{$order->status}}</td>
                <td>1</td>
                <td>1</td>
                
                <td>
                    <a href="{{route('home.order_detail', $order->id)}}" class="btn btn-sm">CHi tiết đơn hàng</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
    <a href="{{route('home')}}" class="btn btn-sm btn-success">Tiếp tục mua hàng</a>
    <a href="{{route('home.cart-clear')}}" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-sm btn-danger">Xóa hết</a>
    </div>
<hr>
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <h2>Total Quantity: {{$totalQuantity}}</h2>
            <h2>Total Amount: {{$totalPrice}}</h2>
            
            <a href="{{route('home.order_checkout')}}" class="btn btn-sm btn-success">Xử lý đặt hàng</a>

        </div>
    </div>

@else 

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Cảnh báo!</strong> Bạn chưa đặt hàng lần nào cả...
    <a href="{{route('home')}}" class="label label-success">Tiếp tục mua hàng</a>
</div>


@endif
</div>
<hr>
@stop()