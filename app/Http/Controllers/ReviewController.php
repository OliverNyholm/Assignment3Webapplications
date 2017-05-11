<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
  public function create(Request $request)
  {
      return view("reviews.create", [
        "game_id" => $request->get("game_id")
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $review = new Review;
    $review->name = $request->get("name");
    $review->grade = $request->get("grade");
    $review->comment = $request->get("comment");
    $review->game_id = $request->get("game_id");
    $review->save();

    return redirect()->action('GameController@show', ['id' =>   $review->game_id])->with('status', 'Comment saved!');
  }
}
