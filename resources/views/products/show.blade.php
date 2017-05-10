@extends('products.master')


@section('content')
<form action="{{ $product->id }}" method="post" style="float:right">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <input type="submit" value="Delete product" class="btn btn-danger" style="float:right">
</form>
<form action="{{ $product->id }}/edit" method="get" style="float:right">
  <input type="submit" value="Edit product" class="btn btn-info" style="float:right">
</form>
<h1>{{$product->title }}</h1>
<p>{{ $product->brand }}</p>
<p>Price: {{ $product->price }}</p>
<div class="container">
  <h3>{{ $product->description }} </h3>
</div>
<img src="{{$product->image }}">

@endsection
