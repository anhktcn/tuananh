@extends('layouts.admin')

@section('title', 'Danh sản phẩm')
@section('main')
<!-- SEARCH FORM -->
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" style="width:350px" placeholder="Search" name="search">
    </div>
    <div class="input-group input-group-sm ml-2">
        
        <select name="cat_id" class="form-control">
            <option value="">Chọn danh mục</option>
            @foreach($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
        </select>
        
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
            <th>Tên Sản phẩm</th>
            <th>Tên danh mục</th>
            <th>Giá/ Giá KM</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Ảnh</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $model)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->cat->name}}</td>
            <td>{{number_format($model->price)}} / {{$model->sale_price}}</td>
            <td>
                @if ($model->status == 0)
                <label class="badge badge-danger">Tạm ẩn</label>
                @else
                <label class="badge badge-success">Hiển thị</label>
                @endif
            </td>
            <td>{{$model->created_at ? $model->created_at->format('d/m/Y') : ''}}</td>
            <td><img src="{{url('uploads')}}/{{$model->image}}" alt="" width="60"></td>

            <td>
                <form action="{{route('product.destroy', $model->id)}}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{route('product.edit', $model->id)}}" class="btn btnsm btn-primary">Sửa</a>
                    <button class="btn btnsm btn-danger" onclick="return confirm('bạn có muốn xóa không?')">Xóa</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$data->appends(request()->all())->links()}}

@stop();