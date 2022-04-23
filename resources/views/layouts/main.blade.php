<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Flatize - Shop HTML5 Responsive Template">
    <meta name="author" content="pixelgeeklab.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{ url('home') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="{{ url('home') }}/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="{{ url('home') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ url('home') }}/vendor/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="{{ url('home') }}/vendor/owl-carousel/owl.transitions.css" rel="stylesheet">

    <!-- bxslider -->
    <link href="{{ url('home') }}/vendor/bxslider/jquery.bxslider.css" rel="stylesheet">
    <!-- flexslider -->
    <link rel="stylesheet" href="{{ url('home') }}/vendor/flexslider/flexslider.css" media="screen">

    <!-- Theme -->
    <link href="{{ url('home') }}/css/theme-animate.css" rel="stylesheet">
    <link href="{{ url('home') }}/css/theme-elements.css" rel="stylesheet">
    <link href="{{ url('home') }}/css/theme-blog.css" rel="stylesheet">
    <link href="{{ url('home') }}/css/theme-shop.css" rel="stylesheet">
    <link href="{{ url('home') }}/css/theme.css" rel="stylesheet">

    <!-- Style Switcher-->
    <link href="{{ url('home') }}/css/colors/cyan/style.html" rel="stylesheet" id="layoutstyle">

    <!-- Theme Responsive-->
    <link href="{{ url('home') }}/css/theme-responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div id="page">
        <header>
            <div id="top">
                <div class="container">
                    <p class="pull-left text-note">Free Shipping on all U.S orders over $50</p>
                    <ul class="nav nav-pills nav-top navbar-right">
                     
                        <li class="dropdown my-account">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @if(auth()->guard('account')->check())
                                <li><a href="{{route('home.profile')}}">Profile</a></li>
                                <li><a href="{{route('home.order')}}">Orders</a></li>
                                <li><a href="{{route('home.order_checkout')}}">Orders</a></li>
                                <li><a href="{{route('home.logout')}}">Logout</a></li>
                            @else
                                <li><a href="{{route('home.login')}}">Login</a></li>
                                <li><a href="{{route('home.register')}}">Register</a></li>
                            @endif
                            </ul>
                        </li>
                        <li class="dropdown menu-shop">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-shopping-cart"></i> <span class="shopping-bag">{{$totalQuantity}}</span></a>
                            <div class="dropdown-menu">
                                <h3>Recently added item(s)</h3>
                                <ul class="list-unstyled list-thumbs-pro">
                                    @foreach($carts as $cart)
                                    <li class="product">
                                        <div class="product-thumb-info">
                                            <a href="{{ route('home.cart-remove', $cart->id)}}" class="product-remove"><i class="fa fa-trash-o"></i></a>
                                            <div class="product-thumb-info-image">
                                                <a href="shop-product-detail1.html"><img alt="" width="60"
                                                        src="{{ url('uploads') }}/{{$cart->image}}"></a>
                                            </div>

                                            <div class="product-thumb-info-content">
                                                <h4><a href="">{{$cart->name}}</a></h4>
                                                <span class="item-cat"><small><a href="#">Jackets</a></small></span>
                                                <span class="price">{{$cart->price}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                                <ul class="list-inline cart-subtotals text-right">
                                    <li class="cart-subtotal"><strong>Subtotal</strong></li>
                                    <li class="price"><span class="amount"><strong>${{$totalPrice}}</strong></span></li>
                                </ul>
                                <div class="cart-buttons text-right">
                                    <a href="{{route('home.cart')}}" class="btn btn-white">View Cart</a>
                                    <button class="btn btn-primary">Checkout</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-default navbar-main navbar-main-slide" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.html"><img src="{{ url('home') }}/images/logo.png"
                                alt="Flatize"></a>
                    </div>
                    <ul class="nav navbar-nav navbar-act pull-right">
                        <li class="login"><a href="javascript:void(0);"><i class="fa fa-user"></i></a></li>
                        <li class="search"><a href="javascript:void(0);" data-toggle="modal"
                                data-target=".bs-example-modal-lg"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown active"><a href="{{route('home')}}">Home</a></li>
                           
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                <ul class="dropdown-menu">
                                    @foreach($cats as $cat)
                                    <li><a href="{{route('home.category',$cat->id)}}">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            
                            <li class="dropdown active"><a href="{{route('contact')}}">Home</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </header>

        <!-- Begin Login -->
        <div class="login-wrapper">
            <form id="form-login" role="form">
                <h4>Login</h4>
                <p>If you're a member, login here.</p>
                <div class="form-group">
                    <label for="inputusername">Username</label>
                    <input type="text" class="form-control input-lg" id="inputusername" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="inputpassword">Password</label>
                    <input type="password" class="form-control input-lg" id="inputpassword" placeholder="Password">
                </div>
                <ul class="list-inline">
                    <li><a href="#">Create new account</a></li>
                    <li><a href="#">Request new password</a></li>
                </ul>
                <button type="submit" class="btn btn-white">Log in</button>
            </form>
        </div>
        <!-- End Login -->

        @yield('main')

        <!-- Begin footer -->
        <footer class="footer">
            <div class="container">
                <div class="upper-foot">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <h2>Contact detail</h2>
                            <address>
                                <i class="fa fa-map-marker"></i> No.123 Pellentesque nec erat.<br>
                                Aenean semper, neque non faucibus.<br>
                                <i class="fa fa-phone"></i> Phone. (123) 456-7890<br>
                                <i class="fa fa-fax"></i> Fax. (123) 456-7890<br>
                                <i class="fa fa-envelope"></i> E-mail. <a href="mailto:#">first.last@example.com</a>
                            </address>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <h2>Useful links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">Track Orders</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Free Credit Report</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Community Guidelines</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <h2>Tags</h2>
                            <ul class="list-inline tagclouds">
                                <li><a href="#">Image</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Post Formats</a></li>
                                <li><a href="#">Typography</a></li>
                                <li><a href="#">WooCommerce</a></li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Slideshow</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <h2>Don’t miss out</h2>
                            <p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut
                                scelerisque.</p>
                            <form class="form-inline form-newsletter" role="form">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                        placeholder="Enter your email here">
                                </div>
                                <button type="submit" class="btn"><i class="fa fa-caret-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="below-foot">
                    <div class="row">
                        <div class="col-xs-6 copyrights">
                            <p>Copyright © 2013 Flatize. Designed by <a
                                    href="http://pixelgeeklab.com/">PixelGeekLab</a><br>
                                All rights reserved.</p>
                        </div>
                        <div class="col-xs-6 text-right">
                            <ul class="list-inline social-list">
                                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Google+" href="#"><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Pinterest" href="#"><i
                                            class="fa fa-pinterest"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="RSS" href="#"><i
                                            class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->

    </div>


    <!-- Begin Search -->
    <div class="modal fade bs-example-modal-lg search-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <p class="clearfix"><button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button></p>
                <form class="form-inline form-search" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="textsearch">Enter text search</label>
                        <input type="text" class="form-control input-lg" id="textsearch"
                            placeholder="Enter text search">
                    </div>
                    <button type="submit" class="btn btn-white">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Search -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('home') }}/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('home') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('home') }}/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{ url('home') }}/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="{{ url('home') }}/vendor/modernizr.custom.js"></script>
    <script src="{{ url('home') }}/vendor/jquery.stellar.js"></script>
    <script src="{{ url('home') }}/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('home') }}/vendor/masonry.pkgd.min.js"></script>
    <script src="{{ url('home') }}/vendor/jquery.pricefilter.js"></script>
    <script src="{{ url('home') }}/vendor/bxslider/jquery.bxslider.min.js"></script>
    <script src="{{ url('home') }}/vendor/mediaelement-and-player.js"></script>
    <script src="{{ url('home') }}/vendor/waypoints.min.js"></script>
    <script src="{{ url('home') }}/vendor/flexslider/jquery.flexslider-min.js"></script>

    <!-- Theme Initializer -->
    <script src="{{ url('home') }}/js/theme.plugins.js"></script>
    <script src="{{ url('home') }}/js/theme.js"></script>

</body>

</html>