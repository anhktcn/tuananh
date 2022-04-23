@extends('layouts.admin')

@section('title', 'Danh sách danh mục')
@section('main')
<!-- SEARCH FORM -->
<h3>Thông tin chi tiết đơn hàng </h3>


<form action="{{route('order.status', $order->id)}}" method="POST" class="form-inline" role="form">
    @csrf
    <div class="form-group">
       
       <select name="status" class="form-control" >
           <option value="">Trạng thái</option>
           <option value="0" {{$order->status == 0 ? 'selected' : ''}}>Đang chờ duyệt</option>
           <option value="1" {{$order->status == 1 ? 'selected' : ''}}>Đã phê duyệt</option>
           <option value="2" {{$order->status == 2 ? 'selected ' : ''}}>Đã thanh toán, giao hàng</option>
       </select>
       
    </div>

    <button type="submit" class="btn btn-primary"  {{$order->status == 2 ? 'disabled' : ''}}>Cập nhật</button>
</form>

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
<hr>

@stop();