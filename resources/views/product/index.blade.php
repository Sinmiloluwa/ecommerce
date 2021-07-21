@extends('layouts.front')

@section('content')
<div class="cart-main-area pt-95 pb-100">
   
   <div class="container">

       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2>{{$categoryName}} Products</h2>
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
@endsection