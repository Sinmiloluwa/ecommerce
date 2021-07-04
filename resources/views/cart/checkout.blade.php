@extends('layouts.app')

@section('content')
 <h2>Checkout </h2>

<h3>Shipping Information</h3>

<form action="{{route('orders.store')}}" method="post">
@csrf
 {{-- @include('_errors') --}}

 <div class="form-group">
     <label for="">Full Name</label>
     <input type="text" name="shipping_fullname" class="form-control">
 </div>

 <div class="form-group">
   <label for="">State</label>
   <input type="text" name="shipping_state"  class="form-control">
 </div>

 <div class="form-group">
    <label for="">City</label>
    <input type="text" name="shipping_city"  class="form-control">
  </div>

  <div class="form-group">
    <label for="">Zip</label>
    <input type="text" name="shipping_zip"  class="form-control">
  </div>

  <div class="form-group">
    <label for="">Full Address</label>
    <input type="text" name="shipping_address"  class="form-control">
  </div>

  <div class="form-group">
    <label for="">Mobile</label>
    <input type="text" name="shipping_phone"  class="form-control">
  </div>

  <h4>Payment Option</h4>

  <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="payment_method" id="" value="delivery">
      Cash on delivery
    </label>
  </div>

  <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="payment_method" id="" value="card">
    Pay with card
  </label>
</div>

  <button type="submit" class="btn btn-primary mt-3">Place Order</button>

</form>


@endsection
