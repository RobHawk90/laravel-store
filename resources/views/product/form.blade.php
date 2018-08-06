@extends('layout.container')
@section('content')
  <form action="/product/save" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" name="price" id="price">
    </div>
    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="number" class="form-control" name="quantity" id="quantity">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Save</button>
  </form>
@stop