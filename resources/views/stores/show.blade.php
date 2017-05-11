@extends('games.master')


@section('content')

<h1>{{$store->title }}</h1>
<p>Location: {{ $store->city }}</p>
<img src="{{$store->image }}">

<h4> Games available from this store: </h4>

  @foreach ($store->games as $game)
    <div class="container">
      <a href="/games/{{ $game->id }}"><h2>{{ $game->title }}</h2><img src="{{ $game->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'"></a>
    </div>
  @endforeach

@endsection
