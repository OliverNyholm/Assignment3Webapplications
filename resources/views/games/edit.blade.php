
@extends('games.master')

@section('content')

<h1>Edit {{$game->title}}</h1>

<form action="/games/{{ $game->id }}" method="post">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" placeholder="Add the title here...">
  </div>
  <div class="form-group">
    <label for="developer">Developer</label>
    <input type="text" class="form-control" id="developer" name="developer" value="{{ $game->developer }}" placeholder="Add the developer here...">
  </div>
  <div class="form-group">
    <label for="image">Link for prouduct image</label>
    <input type="text" class="form-control" id="image" name="image" value="{{ $game->image }}" placeholder="Add the image here...">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ $game->description }}" placeholder="Add the description here...">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" value="{{ $game->price }}" placeholder="Add the price here...">
  </div>
  <input type="submit" value="Save changes" class="btn btn-success">
</form>


@endsection
