<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  public function stores(){
      return $this->belongsToMany('App\Store');
  }

  public function reviews(){
      return $this->hasMany('App\Review');
  }
}
