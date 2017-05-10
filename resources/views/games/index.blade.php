''@extends('games.master')


@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <a href="/games/1"><img src="https://s-media-cache-ak0.pinimg.com/originals/fe/f3/ce/fef3ce4533219ab736a314809fa6f469.jpg" alt="Limbo"></a>
      <div class="carousel-caption">
        <h3>Limbo</h3>
        <p>Special price right now on Steam!!</p>
      </div>
    </div>

    <div class="item">
      <a href="/games/2"><img src="http://www.vpdaily.com/wp-content/uploads/2016/08/Inside.jpg" alt="Inside"></a>
      <div class="carousel-caption">
        <h3>Inside</h3>
        <p>This game will make you insane!!!</p>
      </div>
    </div>

    <div class="item">
      <a href="/games/3"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/51195b43077245.57e2848987b53.jpg" alt="Little Nightmares"></a>
      <div class="carousel-caption">
        <h3>Little Nightmares</h3>
        <p>This is a very scary game!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
