@extends('layouts.cat')

@section('content')


    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar mr-50">
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Search Products</h3>
                            <div class="sidebar-search">
                            <form action="{{route('products.search')}}" method="GET">
                                    <input placeholder="Search Products..." type="text" name="query">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">Filter by Price</h3>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <label>price : </label>
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </div>
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        </div> 
                         <div class="sidebar-widget mb-45">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-categories">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-overflow mb-45">
                            <h3 class="sidebar-title">color</h3>
                            <div class="product-color">
                                <ul>
                                    
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">size</h3>
                            <div class="product-size">
                                <ul>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">tag</h3>
                            <div class="product-tags">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Top rated products</h3>
                            <div class="sidebar-top-rated-all">
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">Flying Drone</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>$140.00</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-9">
                    <div class="shop-product-wrapper res-xl res-xl-btn">
                        <div class="shop-bar-area">
                            <div class="shop-bar pb-60">
                                <div class="shop-found-selector">
                                    <div class="shop-found">
                                        <p><span>{{$products->total()}}</span> Products Found</p>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-product-content tab-content">
                                <div id="grid-sidebar1" class="tab-pane fade active show">
                                    <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-lg-6 col-md-6 col-xl-3">
                                            @include('product._single_product')
                                       </div>
                                       @endforeach
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                        {{$products->appends(['query'=>request('query')])->links("pagination::bootstrap-4")}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
