<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view("games.games", [
          "games" => $games
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("games.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $game = new Game;
      $game->title = $request->get("title");
      $game->developer = $request->get("developer");
      $game->image = $request->get("image");
      $game->description = $request->get("description");
      $game->price = $request->get("price");
      $game->save();

      $game_id = DB::connection()->getPdo()->lastInsertId();
      foreach ($request->get("stores") as $store) {
          DB::table('game_store')->insert(
            [
              "game_id" => $game_id,
              "store_id" => $store
            ]
          );
      }

      return redirect()->action('GameController@index')->with('status', 'Game saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        $game->stores = $game->stores;
        $game->reviews = $game->reviews;
        return view("games.show", [
          "game" => $game
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $game = Game::find($id);
        return view("games.edit", [
          "game" => $game
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $game = Game::find($id);
      $game->title = $request->get("title");
      $game->developer = $request->get("developer");
      $game->image = $request->get("image");
      $game->description = $request->get("description");
      $game->price = $request->get("price");
      $game->save();

      return redirect()->action('GameController@index')->with('status', 'Game edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Game::destroy($id);
      return redirect()->action('GameController@index')->with('status', 'Game is removed!');
    }
}
