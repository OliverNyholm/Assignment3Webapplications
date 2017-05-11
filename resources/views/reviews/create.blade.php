
@extends('games.master')

@section('content')

<h1>Add a new comment</h1>

<form action="/reviews" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Add your name here..." required>
  </div>
  <div class="form-group">
    <label for="grade">Grade</label>
    <input type="number" min="1" max="10" class="form-control" id="grade" name="grade" placeholder="Add the grade here..." required>
  </div>
  <div class="form-group">
    <label for="comment">Comment</label>
    <input type="text" class="form-control" id="comment" name="comment" placeholder="Add the comment here..." required>
  </div>
  <input type="hidden" class="form-control" id="game_id" name="game_id" value="{{ $game_id}}" placeholder="Add the game id here..." required>
  <input type="submit" value="Save review" class="btn btn-success">
</form>


@endsection
