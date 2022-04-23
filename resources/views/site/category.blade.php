@extends('layouts.main')

@section('title','Blogs Post')

@section('main')

<!-- Begin Main -->
<div role="main" class="main">

    <!-- Begin page top -->
    <section class="page-top-md">
        <div class="container">
            <div class="page-top-in">
                <h2><span>{{$category->name}}</span></h2>
            </div>
        </div>
    </section>
    <!-- End page top -->

    <div class="container">
        <div class="catalog">
            <div class="toolbar clearfix">
                <ul class="list-inline list-icons pull-left">
                    <li class="active"><a href="shop-sidebar.html"><i class="fa fa-th"></i></a></li>
                    <li><a href="shop-list-sidebar.html"><i class="fa fa-th-list"></i></a></li>
                </ul>
                <p class="pull-left">Showing 1-12 of 50 results</p>
                <!-- Ordering -->
                <div class="list-sort pull-right">
                    <select class="formDropdown">
                        <option>Default Sorting</option>
                        <option>Sort by Popularity</option>
                        <option>Sort by Newness</option>
                    </select>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-xs-6 col-sm-3">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="{{route('home.product', ['product'=> $product->id, 'slug'=> Str::slug($product->name)])}}"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="{{url('uploads')}}/{{$product->image}}">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">{{$product->price}}</span>
                                <h4><a href="">{{$product->name}}</a></h4>
                                <span class="item-cat"><small><a href="#">{{$category->name}}</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-9.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">69.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Classic blazer</a></h4>
                                <span class="item-cat"><small><a href="#">Outerwear</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-10.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">39.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Striped full skirt</a></h4>
                                <span class="item-cat"><small><a href="#">Skirts</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <a href="shop-product-detail1.html">
                            <span class="bag bag-onsale">Sale</span>
                        </a>
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-11.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">79.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Structured double-breasted blazer</a></h4>
                                <span class="item-cat"><small><a href="#">Outerwear</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-12.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">29.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Sheer overlay dress</a></h4>
                                <span class="item-cat"><small><a href="#">Dresses</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-17.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">59.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Gold chrono watch</a></h4>
                                <span class="item-cat"><small><a href="#">Accessories</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-18.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">7.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Long earrings</a></h4>
                                <span class="item-cat"><small><a href="#">Accessories</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-19.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">19.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Braided belt</a></h4>
                                <span class="item-cat"><small><a href="#">Belts</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 animation animated fadeInUp" style="opacity: 0;">
                    <div class="product">
                        <div class="product-thumb-info">
                            <div class="product-thumb-info-image">
                                <span class="product-thumb-info-act">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1"
                                        class="view-product">
                                        <span><i class="fa fa-external-link"></i></span>
                                    </a>
                                    <a href="shop-cart-full.html" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </span>
                                <img alt="" class="img-responsive" src="images/content/products/product-20.jpg">
                            </div>
                            <div class="product-thumb-info-content">
                                <span class="price pull-right">79.99 USD</span>
                                <h4><a href="shop-product-detail2.html">Leather bucket bag with zip</a></h4>
                                <span class="item-cat"><small><a href="#">Handbags</a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{$products->links()}}
        </div>
    </div>

</div>
<!-- End Main -->
@stop()