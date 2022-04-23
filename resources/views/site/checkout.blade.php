@extends('layouts.main')
@section('title','Đăng ký tài khoản')
@section('main')
<hr>
<div class="container">
    @if ($carts)
    <div class="row">
        <div class="col-md-4">

            <form action="" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$acc->name}}">
                </div>

                <div class="form-group">
                    <label for="">EMail</label>
                    <input type="email" class="form-control" name="email" value="{{$acc->email}}">
                </div>

                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$acc->phone}}">
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                    <input class="form-control" name="address" value="{{$acc->address}}">
                </div>

                <div class="form-group">
                    <label for="">Phuowng thức giao hàng</label>

                    <select name="shipping_method" id="input" class="form-control" required="required">
                        <option value="">CHọn phương thức thanh toán</option>
                        <option value="CHuyển Fax nhanh">CHuyển Fax nhanh</option>
                        <option value="Giao hàng tận nơi">Giao hàng tận nơi</option>
                        <option value="Giao hàng quan bưu điện">Giao hàng quan bưu điện</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="">Phuowng thức thanh toán</label>

                    <select name="payment_method" id="input" class="form-control" required="required">
                        <option value="">CHọn phương thức thanh toán</option>
                        <option value="ONline qua thẻ visa">ONline qua thẻ visa</option>
                        <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                        <option value="Thah toán tại cửa hàng">Thah toán tại cửa hàng</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="">Gi chú, mô ta yêu cầu</label>

                    <textarea name="order_note" class="form-control" rows="3"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Đặt hàng</button>
            </form>

        </div>

        <div class="col-md-8">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>GIá</th>
                        <th>Thành tiên</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1;?>
                    @foreach($carts as $key => $product)
                    <tr>
                        <td>{{$n}}</td>
                        <td>
                            <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="60">
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>

                        <td>{{$product->quantity  * $product->price }}</td>
                    </tr>
                    <?php $n++; ?>
                    @endforeach
                </tbody>
            </table>
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