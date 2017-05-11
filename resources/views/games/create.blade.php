
@extends('games.master')

@section('content')

<h1>Add a new game</h1>

<form action="/games" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Add the title here..." required>
  </div>
  <div class="form-group">
    <label for="developer">Developer</label>
    <input type="text" class="form-control" id="developer" name="developer" placeholder="Add the developer here..." required>
  </div>
  <div class="form-group">
    <label for="image">Link for prouduct image</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Add the image link here..." required>
  </div>
  <div class="form-group">
    <label for="banner">Link for prouduct banner</label>
    <input type="text" class="form-control" id="banner" name="banner" placeholder="Add the banner link here..." required>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Add a description about game here..." required>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Add a price for game here..." required>
  </div>
  <div class="form-group">
    <h4> Available at Stores: </h4>
    <div class="checkbox">
        <label><input type="checkbox" name="stores[]" value="1"> Steam </label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="stores[]" value="2"> GameStop</label>
    </div>
  </div>
  <input type="submit" value="Save game" class="btn btn-success">
</form>


@endsection
