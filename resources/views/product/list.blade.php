@extends('layout.container')
@section('content')
  @if(old('name'))
    <p class="alert alert-success">
      Product "{{ old('name') }}" saved
    </p>
  @endif
  @if(empty($products))
    <p class="alert alert-danger">
      There is no products
    </p>
  @else
    <h1>Products</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $p)
          <tr class="{{ $p->quantity < 2 ? 'alert-danger' : '' }}">
            <td>{{ $p->name }}</td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->quantity }}</td>
            <td><a href="/product/detail/{{$p->id}}">Detail</a></td>
            <td><a href="/product/remove/{{$p->id}}">Remove</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@stop()