@extends('games.master')


@section('content')
<!-- Buttons for adding the game -->
<form action="{{ $game->id }}" method="post" style="float:right">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <input type="submit" value="Delete game" class="btn btn-danger" style="float:right">
</form>
<form action="{{ $game->id }}/edit" method="get" style="float:right">
  <input type="submit" value="Edit game" class="btn btn-info" style="float:right">
</form>
<form action="/reviews/create" method="get" style="float:right">
  <input type="submit" value="Add review" class="btn btn-primary" style="float:right">
</form>

<h1>{{$game->title }}</h1>
<p>{{ $game->developer }}</p>
<p>Price: {{ $game->price }}</p>
<p> Available for purchase at:
  @foreach ($game->stores as $store)
      <a href="/stores/{{ $store->id }}">{{ $store->title }} </a>
  @endforeach
</p>
<div class="container">
  <h3>{{ $game->description }} </h3>
</div>
<img src="{{$game->image }}" alt="http://i63.tinypic.com/2yoydms.png">

</br>
<h1> Reviews about this game </h1>
@foreach ($game->reviews as $review)
  <div class="container">
      <h3> {{ $review->name }} </h3>
      <h4> Score: {{ $review->grade }} </h4>
      <p> {{ $review->comment }} </p>
  </div>
@endforeach

@endsection
