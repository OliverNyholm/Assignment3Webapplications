<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('games')->insert([
        [
            "title" => "Limbo",
            "developer" => "Playdead Studios",
            "price" => 10.00,
            "description" => "Uncertain of his sister's fate, a boy enters LIMBO",
            "image" => "http://cdn.akamai.steamstatic.com/steam/apps/48000/header.jpg?t=1478090357",
            "banner" => "https://s-media-cache-ak0.pinimg.com/originals/fe/f3/ce/fef3ce4533219ab736a314809fa6f469.jpg"
        ],
        [
          "title" => "Inside",
          "developer" => "Playdead Studios",
          "price" => 19.99,
          "description" => "Hunted and alone, a boy finds himself drawn into the center of a dark project.",
          "image" => "http://cdn.akamai.steamstatic.com/steam/apps/304430/header.jpg?t=1494338023",
          "banner" => "http://www.vpdaily.com/wp-content/uploads/2016/08/Inside.jpg"
        ],
        [
          "title" => "Little Nightmares",
          "developer" => "Tarsier",
          "price" => 19.99,
          "description" => "Immerse yourself in Little Nightmares, a dark whimsical tale that will confront you with your childhood fears! Help Six escape The Maw – a vast, mysterious vessel inhabited by corrupted souls looking for their next meal. ",
          "image" => "http://cdn.akamai.steamstatic.com/steam/apps/424840/header.jpg?t=1493331243",
          "banner" => "https://mir-s3-cdn-cf.behance.net/project_modules/1400/51195b43077245.57e2848987b53.jpg"
        ]
      ]);
    }
}
