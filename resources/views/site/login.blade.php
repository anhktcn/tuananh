@extends('layouts.main')
@section('title','Giới thiệu')
@section('main')
<hr>
<div class="container">
<div class="row">
    <div class="col-md-6">
         @csrf
        <form action="" method="POST" role="form">
        @csrf
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">EMail</label>
                <input type="email" class="form-control" name="email" placeholder="Input email">
            </div>
        
            <div class="form-group">
                <label for="">password</label>
                <input type="password" class="form-control" name="password" placeholder="Input passsword">
            </div>
        
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
    </div>
</div>
</div>

<hr>

@stop()