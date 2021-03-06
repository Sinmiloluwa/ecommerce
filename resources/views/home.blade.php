@extends('layouts.front')

@section('content')


<div class="slider-area ">
    <div class="slider-active owl-carousel">
        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/banner/bn2.jpg)">
            <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                <h1 class="animated">Elegance</h1>
                <p class="animated">Create you own style for better looks. </p>
            </div>
            <!-- <div class="position-slider-img">
                <div class="slider-img-1">
                    <img src="assets/img/slider/9.png" alt="">
                </div>
                <div class="slider-img-2">
                    <img class="tilter" src="assets/img/slider/7.png" alt="">
                </div>
                <div class="slider-img-3">
                    <img src="assets/img/slider/8.png" alt="">
                </div>
            </div> -->
        </div>
        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/banner/bn3.jpg)">
            <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                <h1 class="animated">Fashion</h1>
                <p class="animated">Be unique, Be confident. </p>
            </div>
            <!-- <div class="position-slider-img">
                <div class="slider-img-1">
                    <img src="assets/img/slider/9.png" alt="">
                </div>
                <div class="slider-img-4 slider-mrg">
                    <img class="tilter" src="assets/img/slider/10.png" alt="">
                </div>
                <div class="slider-img-3">
                    <img src="assets/img/slider/8.png" alt="">
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="banner-area">
    <div class="row no-gutters">
        <div class="col-md-4">
            <div class="single-banner">
                <img src="assets/img/banner/bn5.jpg" alt="">
                <div class="banner-content banner-content-style1">
                    <h2>AIR<br> <span>Force</span></h2>
                    <p>Walk with Confidence</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-banner">
                <img src="assets/img/banner/bn7.jpg" alt="">
                <div class="banner-content banner-content-style2">
                    <span>-  Up to  -</span>
                    <h2>30% off</h2>
                    <p>Black Friday Discount</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-banner">
                <img src="assets/img/banner/bn8.jpg" alt="">
                <div class="banner-content banner-content-style3">
                    <h2>Trend <br>2021.</h2>
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
            <div class="tab-content">
            <div class="tab-pane active show fade" id="home1" role="tabpanel">
                <div class="row">
                    @foreach ( $newArrivals as $new)
                    <div class="custom-col-3 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{url('storage/'.$new->cover_img)}}" alt="">
                                </a>
                                <span style="background-color: red;">hot</span>
                                <div class="product-action">
                                    
                                    <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $new->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                   
                                    
                                    <a class="animate-right" title="Quick View" href="{{route('products.show',$new->id)}}">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$new->name}}</a></h4>
                                <span>$ {{$new->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="section-title text-center mb-60">
        <h2>Products</h2>
    </div>
    <div class="product-style">
        
        <div class="tab-content">
            <div class="tab-pane active show fade" id="home1" role="tabpanel">
                <div class="custom-row">
                    @foreach ( $products as $product)
                    <div class="custom-col-5 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{url('storage/'.$product->cover_img)}}" alt="">
                                </a>
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
                        <a href="#"><img src="assets/img/bg/pe10.jpg" alt=""></a>
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
                                <img src="assets/img/bg/pe9.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5">
                                <img src="assets/img/bg/pe1.jpg" alt="">
                                <div class="banner-wrapper3-content banner-text-color">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-r-5">
                                <img src="assets/img/bg/pe8.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper">
                                <img src="assets/img/bg/pe4.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                   
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
