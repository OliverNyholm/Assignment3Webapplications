
@extends('products.master')

@section('content')

<h1>Add a new product</h1>

<form action="/products" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Add the title here...">
  </div>
  <div class="form-group">
    <label for="brand">Brand</label>
    <input type="text" class="form-control" id="brand" name="brand" placeholder="Add the brand here...">
  </div>
  <div class="form-group">
    <label for="image">Link for prouduct image</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Add the image link here...">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Add a description about product here...">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Add a price for product here...">
  </div>
  <input type="submit" value="Save product" class="btn btn-success">
</form>


@endsection
