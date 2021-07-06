@extends('layouts.front')

@section('content')
<div class="slider-area ">
    <div class="slider-active owl-carousel">
        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/15.jpg)">
            <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                <h1 class="animated">Fashion</h1>
                <p class="animated">Create you own style for better looks. </p>
            </div>
            <div class="position-slider-img">
                <div class="slider-img-1">
                    <img src="assets/img/slider/9.png" alt="">
                </div>
                <div class="slider-img-2">
                    <img class="tilter" src="assets/img/slider/7.png" alt="">
                </div>
                <div class="slider-img-3">
                    <img src="assets/img/slider/8.png" alt="">
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/15.jpg)">
            <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                <h1 class="animated">Fashion</h1>
                <p class="animated">Create you own style for better looks. </p>
            </div>
            <div class="position-slider-img">
                <div class="slider-img-1">
                    <img src="assets/img/slider/9.png" alt="">
                </div>
                <div class="slider-img-4 slider-mrg">
                    <img class="tilter" src="assets/img/slider/10.png" alt="">
                </div>
                <div class="slider-img-3">
                    <img src="assets/img/slider/8.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner-area">
    <div class="row no-gutters">
        <div class="col-md-4">
            <div class="single-banner">
                <a href="#"><img src="assets/img/banner/1.jpg" alt=""></a>
                <div class="banner-content banner-content-style1">
                    <h2>BLUE <br> <span>Glasses</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-banner">
                <a href="#"><img src="assets/img/banner/2.jpg" alt=""></a>
                <div class="banner-content banner-content-style2">
                    <span>-  Up to  -</span>
                    <h2>30% off</h2>
                    <p>Black Friday Discount</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-banner">
                <a href="#"><img src="assets/img/banner/3.jpg" alt=""></a>
                <div class="banner-content banner-content-style3">
                    <h2>Trand <br>2018.</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-area pt-115 pb-120">

    <div class="pl-100 pr-100">

        <div class="container-fluid">
            <div class="section-title text-center mb-60">
                <h2>New Arrivals</h2>
            </div>
            <div class="product-style">
                <div class="arrival-active owl-carousel">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html"> Dagger Smart Trousers </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Homme Tapered Smart </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/3.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Navy Bird Print </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Jacket Stonewash </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/5.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Skinny Jeans Terry </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Black Faux Suede </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html">Black Faux Suede </a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="section-title text-center mb-60">
        <h2>All Products</h2>
    </div>
    <div class="product-style">
        <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                <h4>all </h4>
            </a>
            <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                <h4>woman </h4>
            </a>
            <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                <h4>man</h4>
            </a>
            <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                <h4>ACCESSORIES</h4>
            </a>
            <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                <h4>kids</h4>
            </a>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show fade" id="home1" role="tabpanel">
                <div class="custom-row">
                    @foreach ( $products as $product)
                    <div class="custom-col-5 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <span>{{$product->description}}</span><br>
                                <span>$ {{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner-area3 pt-120 pb-115">
    <div class="pl-100 pr-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="banner-wrapper mrgn-negative">
                        <a href="#"><img src="assets/img/banner/8.jpg" alt=""></a>
                        <div class="banner-wrapper2-content">
                            <h3>Speatial </h3>
                            <h2>Style</h2>
                            <span>Start from $299.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="row no-gutters banner-mrg">
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                <img src="assets/img/banner/9.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5">
                                <img src="assets/img/banner/10.jpg" alt="">
                                <div class="banner-wrapper3-content banner-text-color">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-r-5">
                                <img src="assets/img/banner/11.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper">
                                <img src="assets/img/banner/12.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
