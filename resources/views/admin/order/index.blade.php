@extends('layouts.admin')

@section('title', 'Danh sách danh mục')
@section('main')
<!-- SEARCH FORM -->
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="width:350px" placeholder="Search"
            name="search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
<hr>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Ngày mua</th>
            <th>Họ tên</th>
            <th>Số ĐT</th>
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
            <td>{{$order->account->name}}</td>
            <td>{{$order->account->phone}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->tottalQuantity()}}</td>
            <td>{{$order->tottalAmount()}}</td>


            <td>
                <a href="{{route('order.detail', $order->id)}}" class="btn btn-sm btn-primary">Chi tiết đơn hàng</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$orders->links()}}

@stop();