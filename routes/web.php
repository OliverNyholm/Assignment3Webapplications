<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Game;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $games = Game::all();
    return view('games.index', [
      "games" => $games
    ]);
});

Route::resource("games", "GameController");

Route::resource("stores", "StoreController");

Route::resource("reviews", "ReviewController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
