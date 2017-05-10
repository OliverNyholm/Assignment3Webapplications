<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stores')->insert([
          [
              "title" => "Steam",
              "city" => "online",
              "image" => "http://store.akamai.steamstatic.com/public/shared/images/header/globalheader_logo.png?t=962016"

          ],
          [
              "title" => "Gamestop",
              "city" => "Malmö",
              "image" => "https://lh3.googleusercontent.com/-IsAZYwS8aE0/AAAAAAAAAAI/AAAAAAABZY0/yMnN4XGeCUI/photo.jpg"
          ]
      ]);
    }
}
