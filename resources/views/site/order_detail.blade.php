@extends('layouts.main')
@section('title','Giới thiệu')
@section('main')

<hr>
<div class="container">
    <h3>Thông tin chi tiết đơn hàng </h3>
    @if($order->status == 0)
    <span class="label label-danger">Đang chờ duyệt</span>
    @elseif($order->status == 1)
    <span class="label label-warning">Đã phê duyệt</span>
    @elseif($status == 2)
    <span class="label label-success">Đã thanh toán, giao hàng</span>
    @endif

    <div class="row">
        <div class="col-md-6">
            <h4>Thong tin người mua</h4>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <td>{{$order->account->name}}</td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td>{{$order->account->phone}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$order->account->email}}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{$order->account->address}}</td>
                    </tr>
                </thead>

            </table>

        </div>

        <div class="col-md-6">
            <h4>Thong tin người nhận</h4>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <td>{{$order->name}}</td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td>{{$order->phone}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$order->email}}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{$order->address}}</td>
                    </tr>
                </thead>

            </table>
        </div>
    </div>

    <h4>Thong tin sản phẩm</h4>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên SP</th>
                <th>SỐ lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->details as $detail)
            <tr>
                <td>1</td>
                <td>
                    <img src="{{url('uploads')}}/{{$detail->product->image}}" width="60">
                </td>
                <td>{{$detail->product->name}}</td>
                <td>{{$detail->quantity}}</td>
                <td>{{$detail->price}}</td>
                <td>{{$detail->price * $detail->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@stop()