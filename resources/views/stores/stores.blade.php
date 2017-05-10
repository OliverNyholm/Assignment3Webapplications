@extends('games.master')


@section('content')

<h1>All stores</h1>
<p>Below is a list of all stores:</p>


@foreach ($stores as $store)
    <p><a href="stores/{{ $store->id }}"><img src="{{$store->image }}"></a></p></br>
@endforeach


@endsection
