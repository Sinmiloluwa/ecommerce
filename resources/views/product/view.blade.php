@extends('layouts.front')

@section('content')
<div class="cart-main-area pt-95 pb-100">
   
   <div class="container">

       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-5 pr-70">
                            <img src="{{url('storage/'.$product->cover_img)}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="sidebar-active product-details-content">
                            <h3>{{$product->name}}</h3>
                            <!-- <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div> -->
                            <div class="details-price">
                                <span>$ {{$product->price}}</span>
                            </div>
                            <p>{{$product->description}}</p>
                            <!-- <div class="product-color-2">
                                <h4 class="details-title">Color*</h4>
                                <div class="product-color-style2">
                                    <ul>
                                        <li class="orange"></li>
                                        <li class="blue2"></li>
                                        <li class="pink"></li>
                                        <li class="yellow"></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="product-size-2">
                                <h4 class="details-title">Size*</h4>
                                <div class="product-size-style2">
                                    <ul>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">ml</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">sl</a></li>
                                        <li><a href="#">ls</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="quickview-plus-minus">
                                <!-- <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div> -->
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="{{route('cart.add',$product->id)}}">add to cart</a>
                                </div>
                                <!-- <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div> -->
                            </div>
                            <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    @foreach($categories as $category)
                                    <li><a href="#">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div> -->
                            <!-- <div class="product-share">
                                <ul>
                                    <li class="categories-title">Share :</li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-flikr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
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

@endsection