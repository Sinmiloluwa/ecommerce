@extends('layouts.app')


@section('content')
<h2>Submit your shop</h2>
<form action="{{route('shops.store')}}" method="post">
    @csrf

<div class="form-group">
  <label for="name">Name of Seller</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>

<div class="form-group">
    <label for="name">Description</label>
    <textarea name="description" id="" class="form-control" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
