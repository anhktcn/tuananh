@extends('layouts.main')
@section('title','Đăng ký tài khoản')
@section('main')
<hr>
<div class="container">
<div class="row">
    <div class="col-md-6">
        
        <form action="" method="POST" role="form">
        @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input name">
            </div>
        
            <div class="form-group">
                <label for="">EMail</label>
                <input type="email" class="form-control" name="email" placeholder="Input email">
            </div>
        
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Input phone">
            </div>
        
            <div class="form-group">
                <label for="">Address</label>
                <input class="form-control" name="address" placeholder="Input Address">
            </div>
        
            <div class="form-group">
                <label for="">Passsword</label>
                <input type="password" class="form-control" name="password" placeholder="Input passsword">
            </div>
            <div class="form-group">
                <label for="">Re-password</label>
                <input type="password" class="form-control" name="re_password" placeholder="Input passsword">
                @error('re_password') {{$message}} @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
    </div>
</div>
</div>

<hr>

@stop()