@extends('layout.container')
@section('content')
  <h1>{{ $product->name }}</h1>
  <ul>
    <li><b>Name:</b> {{ $product->name }}</li>
    <li><b>description:</b> {{ $product->description }}</li>
    <li><b>price:</b> {{ $product->price }}</li>
    <li><b>quantity:</b> {{ $product->quantity }}</li>
  </ul>
@stop