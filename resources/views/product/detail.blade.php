@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header text-center">
        <h1>{{ $product->name }}</h1>
    </div>
    <div class="card-body">
        <ul>
            <li><b>Name:</b> {{ $product->name }}</li>
            <li><b>Description:</b> {{ $product->description }}</li>
            <li><b>Price:</b> {{ $product->price }}</li>
            <li><b>Size:</b> {{ $product->size }}</li>
            <li><b>Quantity:</b> {{ $product->quantity }}</li>
        </ul>
    </div>
</div>
@stop
