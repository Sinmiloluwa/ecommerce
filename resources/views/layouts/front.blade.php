<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ezone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <header>
        <div class="header-area">
            <div class="header-left-sidebar">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="main-menu menu-hover">
                    <nav>
                        <ul>
                            

                            <!-- <li><a href="#">Categories</a>
                                <div class="mega-menu-dropdown mega-dropdown-width-2">
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle"> Clothing Categories</h4>
                                        <ul>
                                           
                                            

                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                            @php
                                $categories = TCG\Voyager\Models\Category::where('parent_id')->get();
                            @endphp
                            @foreach ($categories as $category)
                                
                            

                            <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}</a>
                            @php
                                $children = TCG\Voyager\Models\Category::where('parent_id',$category->id)->get();
                            @endphp
                            @if($children->isNotEmpty())
                                <ul class="single-dropdown">
                                    @foreach($children as $child)
                                    <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$child->name}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>

                            @endforeach
                            


                        </ul>
                    </nav>
                </div>
                <div class="currency">
                    <ul>
                        <li><a href="#">EN</a></li>
                        <li><a href="#">RN</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right-sidebar">
                <div class="header-search-cart-login">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="">
                        </a>
                    </div>
                    <div class="header-search">
                        <form action="{{route('products.search')}}" method="GET">
                            @csrf
                            <input name="query" placeholder="Search What you want" type="text">
                            <button type="submit">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                   
                    <div class="header-login">
                        <ul>
                        @guest
                        @if (Route::has('login'))
                            <li><a href="{{route('login')}}">Login</a></li>
                            @endif
                            @if (Route::has('register'))
                            <li><a href="register.html">Reg</a></li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                    <div class="header-cart cart-res">
                        <a class="icon-cart" href="{{route('cart.index')}}">
                            <i class="ti-shopping-cart"></i>
                            <span class="shop-count pink"> @auth


                                {{Cart::session(auth()->id())->getContent()->count()}}</span>


                                @endauth</span>
                        </a>
                        
                    </div>
                </div>

                <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{route('home')}}">HOME</a>
                                    
                                </li>
                                
                               
                                <li><a href="#"> Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- header end -->
    <!-- banner area start -->
    <!-- banner area end -->
    <!-- product area start -->



    <!-- banner area two end -->
    <!-- all products area start -->

    <!-- all products area end -->
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        @yield('content')
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    <!-- banner3 area end -->
    <!-- insta feed start -->
    <!-- <div class="insta-feed ptb-120  gray-bg">
        <div class="pl-185 pr-185">
            <div class="section-title-2 text-center mb-50">
                <h2>Insta Feed</h2>
                <h4>Follow us on intagram. <span>@Blvck_simons</span></h4>
            </div>
            <div class="instafeed-wrapper">
                <div class="instafeed-active owl-carousel">
                    <div class="instafeed-img">
                        <img src="assets/img/instra/1.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/2.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/3.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/4.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/5.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="assets/img/instra/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- insta feed end -->
    <footer class="footer-area">
        <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url(assets/img/bg/1.jpg)" data-overlay="9">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Custom Service</h3>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="{{route('cart.index')}}">Cart</a></li>
                                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{route('login')}}">Login</a></li>
                            @endif
                            @if (Route::has('register'))
                            <li><a href="register.html">Reg</a></li>
                            @endif
                            @endguest
                                    <li><a href="github.com/Sinmiloluwa">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Categories</h3>
                            <div class="footer-widget-content">
                                <ul>
                                @php
                                $categories = TCG\Voyager\Models\Category::where('parent_id')->get();
                            @endphp
                            @foreach ($categories as $category)
                             
                                            <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}</a></li>
                                            @endforeach
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Contact</h3>
                            <div class="footer-newsletter">
                                <p>We would love to hear from you</p>
                                <div id="mc_embed_signup" class="subscribe-form pr-40">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true">
                                                <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                            </div>
                                            <div class="clear">
                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="footer-contact">
                                    <p><span><i class="ti-location-pin"></i></span>Nigeria </p>
                                    <p><span><i class=" ti-headphone-alt "></i></span> 08080455426</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom black-bg ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright">
                            <p>
                                Copyright ©
                                <a href="github.com/Sinmiloluwa">Simons</a> 2021 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <img src="assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <img src="assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <img src="assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
