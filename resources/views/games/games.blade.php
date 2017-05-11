@extends('games.master')


@section('content')

<h1>All games</h1>
<p>Below is a list of all games:</p>


@foreach ($games as $game)
    <a href="games/{{ $game->id }}"><h2>{{ $game->title }}</h2><img src="{{$game->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'"></a>
@endforeach


@endsection
