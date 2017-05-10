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

Route::get('/', function () {
    return view('products.index');
});

//Route::get("/products", "ProductController@index");
//Route::get("/products/{id}", "ProductController@show");

//Route::group(['middleware' => 'auth'], function() {
  Route::resource("products", "ProductController");
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');