@extends('layouts.main')

@section('title','Trang chủ')

@section('main')

<!-- Begin Main -->
<div role="main" class="main">
    <!-- Begin Main Slide -->
    <section class="main-slide">
        <div id="owl-main-demo" class="owl-carousel main-demo">
            <div class="item" id="item1"><img src="{{ url('home') }}/images/content/slides/slider1.jpg"
                    class="img-responsive" alt="Photo">
                <div class="item-caption">
                    <div class="item-caption-inner">
                        <div class="item-caption-wrap">
                            <p class="item-cat"><a href="#">Fall/Winter 2014</a></p>
                            <h2>Up to 50% off<br>on selected items</h2>
                            <a href="#" class="btn btn-white hidden-xs">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item2"><img src="{{ url('home') }}/images/content/slides/slider2.jpg"
                    class="img-responsive" alt="Photo">
                <div class="item-caption">
                    <div class="item-caption-inner">
                        <div class="item-caption-wrap">
                            <p class="item-cat"><a href="#">Top</a></p>
                            <h2>25% off<br>for pink swim</h2>
                            <a href="#" class="btn btn-white hidden-xs">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item3"><img src="{{ url('home') }}/images/content/slides/slider3.jpg"
                    class="img-responsive" alt="Photo">
                <div class="item-caption">
                    <div class="item-caption-inner">
                        <div class="item-caption-wrap">
                            <p class="item-cat"><a href="#">Panties</a></p>
                            <h2>Free shipping<br>on $50 plus $20</h2>
                            <a href="#" class="btn btn-white hidden-xs">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Slide -->

    <!-- Begin Ads -->
    <section class="ads">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 animation">
                    <a href="#"><img src="{{ url('home') }}/images/content/products/ad-1.png" class="img-responsive"
                            alt="Ad"></a>
                </div>
                <div class="col-xs-4 animation">
                    <a href="#"><img src="{{ url('home') }}/images/content/products/ad-2.png" class="img-responsive"
                            alt="Ad"></a>
                </div>
                <div class="col-xs-4 animation">
                    <a href="#"><img src="{{ url('home') }}/images/content/products/ad-3.png" class="img-responsive"
                            alt="Ad"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Ads -->

    <!-- Begin Top Selling -->
    <section class="products-slide">
        <div class="container">
            <h2 class="title"><span>Top Selling</span></h2>
            <div class="row">
                <div id="owl-product-slide" class="owl-carousel product-slide">
                    @foreach($product_sale as $ps)
                    <div class="col-md-12 animation">
                        <div class="item product">
                            <a href="shop-product-detail1.html">
                                <span class="bag bag-hot">Hot</span>
                            </a>
                            <div class="product-thumb-info">
                                <div class="product-thumb-info-image">
                                    <span class="product-thumb-info-act">
                                        <a href="{{route('home.product', ['product'=> $ps->id, 'slug'=> Str::slug($ps->name)])}}" class="view-product">
                                            <span><i class="fa fa-external-link"></i></span>
                                        </a>
                                        <a href="{{route('home.cart-add', $ps->id)}}" class="add-to-cart-product">
                                            <span><i class="fa fa-shopping-cart"></i></span>
                                        </a>
                                    </span>
                                    <img alt="" class="img-responsive" src="{{ url('uploads') }}/{{$ps->image}}">
                                </div>

                                <div class="product-thumb-info-content">
                                    <span class="price pull-right">{{number_format($ps->price)}} đ</span>
                                    <h4><a href="{{route('home.product', ['product'=> $ps->id, 'slug'=> Str::slug($ps->name)])}}">{{$ps->name}}</a></h4>
                                    <span class="item-cat"><small><a href="#">{{$ps->cat->name}}</a></small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
                </div>
            </div>
    </section>
    <!-- End Top Selling -->

    <!-- Begin Lookbook Women -->
    <section id="lookbook">
        <div class="container">
            <div class="lookbook">
                <h2><a href="#">Lookbook Women</a></h2>
                <p>Etiam aliquam risus ante, quis ultrices enim porta a. Integer et dolor sit amet enim feugiat
                    faucibus. Donec sit amet egestas orci. Proin facilisis mi ornare turpis sollicitudin; vel rutrum est
                    viverra. Vestibulum hendrerit egestas semper.</p>
            </div>
        </div>
    </section>
    <!-- End Lookbook Women -->

    <!-- Begin New Products -->
    <section class="product-tab">
        <div class="container">
            <h2 class="title"><span>New Products</span></h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs pro-tabs text-center animation" role="tablist">
                <li class="active"><a href="#man" role="tab" data-toggle="tab">Man</a></li>
                <li><a href="#woman" role="tab" data-toggle="tab">Woman</a></li>
                <li><a href="#accesories" role="tab" data-toggle="tab">Accesories</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="man">
                    <div class="row">
                        @foreach($product_new as $ps)
                        <div class="col-xs-6 col-sm-3 animation">
                            <div class="product">
                                <a href="shop-product-detail1.html">
                                    <span class="bag bag-new">New</span>
                                </a>
                                <div class="product-thumb-info">
                                    <div class="product-thumb-info-image">
                                        <span class="product-thumb-info-act">
                                            <a href="javascript:void(0);" data-toggle="modal"
                                                data-target=".quickview-new-{{$ps->id}}" class="view-product">
                                                <span><i class="fa fa-external-link"></i></span>
                                            </a>
                                            <a href="{{route('home.cart-add', $ps->id)}}" class="add-to-cart-product">
                                                <span><i class="fa fa-shopping-cart"></i></span>
                                            </a>
                                        </span>
                                        <img alt="" class="img-responsive" src="{{ url('uploads') }}/{{$ps->image}}">
                                    </div>
                                    <div class="product-thumb-info-content">
                                        <span class="price pull-right">{{number_format($ps->price)}}</span>
                                        <h4><a href="{{route('home.product', ['product'=> $ps->id, 'slug'=> Str::slug($ps->name)])}}">{{$ps->name}}</a></h4>
                                        <span class="item-cat"><small><a href="#">{{$ps->cat->name}}</a></small></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Begin Quickview -->
                        <div class="modal fade quickview-new-{{$ps->id}}" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <div class="product-detail">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="product-preview">
                                                    <ul class="bxslider" id="slider1">
                                                        <li><img alt="" class="img-responsive"
                                                                src="{{ url('uploads') }}/{{$ps->image}}">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="summary entry-summary">

                                                    <h3>{{$ps->name}}</h3>

                                                    <p class="price">
                                                        <span class="amount">${{number_format($ps->price)}}</span>
                                                    </p>

                                                    <form method="post" class="cart">
                                                        <div class="quantity pull-left">
                                                            <input type="button" class="minus" value="-">
                                                            <input type="text" class="input-text qty" title="Qty"
                                                                value="1" name="quantity" min="1" step="1">
                                                            <input type="button" class="plus" value="+">
                                                        </div>
                                                        <a href="#" class="btn btn-grey">
                                                            <span><i class="fa fa-heart"></i></span>
                                                        </a>
                                                        <button href="#" class="btn btn-primary btn-icon"><i
                                                                class="fa fa-shopping-cart"></i>
                                                            Add to cart</button>
                                                    </form>

                                                    <ul class="list-unstyled product-meta">
                                                        <li>Categories: <a href="{{ route('home.category', $ps->cat->id) }}">{{$ps->cat->name}}</a>
                                                        </li>
                                                       
                                                    </ul>

                                                    <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title"> <a data-toggle="collapse"
                                                                        data-parent="#accordion"
                                                                        href="#collapseOne">Description</a> </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <p>Korem ipsum dolor sit amet, consectetur
                                                                        adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore
                                                                        magna aliqua.</p>
                                                                    <p>Ut enim ad minim veniam, quis nostrud
                                                                        exercitation ullamco laboris
                                                                        nisi ut aliquip ex ea commodo consequat. Duis
                                                                        aute irure dolor in
                                                                        reprehenderit in voluptate velit esse cillum
                                                                        dolore eu fugiat nulla
                                                                        pariatur. qui dolorem ipsum quia dolor sit amet.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Quickview -->
                        @endforeach
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End New Products -->

    <!-- Begin Parallax -->
    <section class="pi-parallax" data-stellar-background-ratio="0.6">
        <div class="container">
            <div id="owl-text-slide" class="owl-carousel">
                <div class="item">
                    <blockquote>
                        <p>Design is a funny word. Some people think design means how it looks. But of course, if you
                            dig deeper, it’s really how it works.</p>
                        <footer>by <cite title="Steve Jobs">Steve Jobs</cite></footer>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <p>They may forget what you said, but they will never forget how you made them feel.</p>
                        <footer>by <cite title="Steve Jobs">Carl W. Buechner</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- End Parallax -->

    <!-- Begin Latest Blogs -->
    <section class="latest-blog">
        <div class="container">
            <h2 class="title"><span>Latest from the blog</span></h2>
            <div class="row">
                <div class="col-xs-6 animation">
                    <article class="post">
                        <div class="post-image">
                            <span class="post-info-act">
                                <a href="blog-single.html"><i class="fa fa-caret-right"></i></a>
                            </span>
                            <img class="img-responsive" src="{{ url('home') }}/images/content/blog/demo-1.jpg"
                                alt="Blog">
                        </div>
                        <h3><a href="blog-single.html">Paris Fashion Week S/S 2014: womenswear collections</a></h3>
                        <p class="post-meta">15th December 2014</p>
                    </article>
                </div>
                <div class="col-xs-6 animation">
                    <article class="post">
                        <div class="post-image">
                            <span class="post-info-act">
                                <a href="blog-single.html"><i class="fa fa-camera"></i></a>
                            </span>
                            <img class="img-responsive" src="{{ url('home') }}/images/content/blog/demo-2.jpg"
                                alt="Blog">
                        </div>
                        <h3><a href="blog-single.html">Show tunes: London Fashion Week S/S 2014's runway playlist</a>
                        </h3>
                        <p class="post-meta">15th December 2014</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Blogs -->

</div>
<!-- End Main -->

@stop()