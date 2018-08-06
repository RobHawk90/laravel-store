@extends('layout.container')
@section('content')
  <h1>{{ $product->name }}</h1>
  <ul>
    <li><b>Name:</b> {{ $product->name }}</li>
    <li><b>Description:</b> {{ $product->description }}</li>
    <li><b>Price:</b> {{ $product->price }}</li>
    <li><b>Size:</b> {{ $product->size }}</li>
    <li><b>Quantity:</b> {{ $product->quantity }}</li>
  </ul>
@stop