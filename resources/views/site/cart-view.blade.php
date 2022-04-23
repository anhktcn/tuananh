@extends('layouts.main')
@section('title','Giới thiệu')
@section('main')

<div class="container">
    <div class="jumbotron">
        <h3 class="display-3">GIỏ hàng</h3>
    </div>

    @if($carts)
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>GIá</th>
                <th>Thành tiên</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($carts as $product)
            <tr>
                <td>1</td>
                <td>
                    <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="60">
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <form action="{{route('home.cart-update', $product->id)}}">
                        <input type="number" style="width: 80px; text-align: center" value="{{$product->quantity}}" name="quantity">
                        <button class="btn-btn-sm btn-primary" >Cập nhật</button>
                    </form>
                </td>
               <td>{{$product->quantity  * $product->price }}</td>
                <td>1000000</td>
                <td>
                    <a href="{{route('home.cart-remove', $product->id)}}" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-sm">Xóa</a>
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
    <strong>Cảnh báo!</strong> giỏ hàng rỗng, vui lòng thêm sản phẩm vào giở hàng ...
    <a href="{{route('home')}}" class="label label-success">Tiếp tục mua hàng</a>
</div>


@endif
</div>
<hr>
@stop()