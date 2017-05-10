<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
  public function index()
  {
      $stores = Store::all();
      return view("stores.stores", [
        "stores" => $stores
      ]);
  }

  public function show($id)
  {
      $store = Store::find($id);
      $store->games = $store->games;
      return view("stores.show", [
        "store" => $store
      ]);
  }
}
