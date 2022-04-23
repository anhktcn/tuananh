@extends('layouts.admin')

@section('title', 'Thêm mới danh mục')
@section('main')

<form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Danh mục sản phẩm</label>
       
       <select name="category_id" id="input" class="form-control" >
           <option value="">Chọ danh mục</option>
           @foreach($cats as $cat)
           <option value="{{$cat->id}}" {{$cat->id == $product->category_id ? 'selected': ''}}>{{$cat->name}}</option>
           @endforeach
       </select>
       

        @error('category_id') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" value="{{$product->name}}">

        @error('name') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}">

        @error('name') {{$message}} @enderror
    </div>

    <div class="form-group">
        <label for="">Giá KM</label>
        <input type="text" class="form-control" name="sale_price" value="{{$product->sale_price}}">

        @error('sale_price') {{$message}} @enderror
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="260">
        <input type="file" class="form-control" name="upload" >

        @error('upload') {{$message}} @enderror
    </div>
    
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0"  {{$product->status == 0 ? 'checked': ''}}>
                Tạm Ẩn
            </label>
        </div>
         
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked': ''}}">
                Hiển thị
            </label>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Lưu lại</button>
</form>


@stop();
