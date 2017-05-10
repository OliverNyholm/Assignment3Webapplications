@extends('products.master')


@section('content')

<h1>All products</h1>
<p>Below is a list of all products:</p>

<ul>
@foreach ($products as $product)
    <li><a href="products/{{ $product->id }}">{{ $product->title }}</a></li>
@endforeach
</ul>

@endsection
