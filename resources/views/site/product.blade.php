@extends('layouts.main')

@section('title','Blogs Post')

@section('main')

<!-- Begin Main -->
<div role="main" class="main">

    <!-- Begin page top -->
    <section class="page-top-md">
        <div class="container">
            <div class="page-top-in">
                <h2><span>{{$product->name}}</span></h2>
            </div>
        </div>
    </section>
    <!-- End page top -->

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="product-preview">
                    <p><img alt="" class="img-responsive" src="{{ url('uploads') }}/{{$product->image}}"></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="summary entry-summary">

                    <h3>{{$product->name}}</h3>

                    <p class="price">
                        <span class="amount">${{$product->price}}</span>
                    </p>

                    <form method="GET" action="{{route('home.cart-add',$product->id)}}" class="cart">
                        <div class="quantity pull-left">
                            <input type="button" class="minus" value="-">
                            <input type="text" class="input-text qty" title="Qty" value="1" name="quantity" min="1"
                                step="1">
                            <input type="button" class="plus" value="+">
                        </div>
                        <a href="#" class="btn btn-grey">
                            <span><i class="fa fa-heart"></i></span>
                        </a>
                        <button class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to
                            cart</button>
                    </form>

                    <ul class="list-unstyled product-meta">
                        <li>Sku: 54329843</li>
                        <li>Categories: <a href="#">Leather</a> <a href="#">Jeans</a> <a href="#">Men</a></li>
                        <li>Tags: <a href="#">Shoes</a> <a href="#">Jeans</a> <a href="#">Men</a> <a
                                href="#">T-shirt</a></li>
                    </ul>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne">Description</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. qui dolorem ipsum
                                        quia dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        
                      
                    </div>

                </div>
                <!-- Begin Related Products -->
                <section class="products-slide">

                    <h2 class="title"><span>Related Products</span></h2>
                    <div class="row">
                        @foreach($products as $ps)
                        <div class="col-xs-6">
                            <div class="product">
                                <div class="product-thumb-info">
                                    <div class="product-thumb-info-image">
                                        <span class="product-thumb-info-act">
                                            <a href="javascript:void(0);" data-toggle="modal"
                                                data-target=".quickview-wrapper" class="view-product">
                                                <span><i class="fa fa-external-link"></i></span>
                                            </a>
                                            <a href="shop-cart-full.html" class="add-to-cart-product">
                                                <span><i class="fa fa-shopping-cart"></i></span>
                                            </a>
                                        </span>
                                        <img alt="" class="img-responsive" src="{{ url('uploads') }}/{{$ps->image}}">
                                    </div>
                                    <div class="product-thumb-info-content">
                                        <span class="price pull-right">{{$ps->price}}</span>
                                        <h4><a href="shop-product-detail2.html">{{$ps->name}}</a></h4>
                                        <span class="item-cat"><small><a href="#">{{$ps->cat->name}}</a></small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                 
                </section>
                <!-- End Related Products -->
            </div>
        </div>
    </div>

</div>
<!-- End Main -->
@stop()