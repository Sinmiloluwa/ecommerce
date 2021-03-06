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
                                <a class="animate-right" title="Quick View" href="{{route('products.show',$product->id)}}">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html"> {{$product->name}} </a></h4>
                            <span>$ {{$product->price}}</span><br>
                            <h5>{{$product->description}}</h5>
                        </div>
                    </div>