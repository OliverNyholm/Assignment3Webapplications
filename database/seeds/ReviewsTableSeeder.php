<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->insert([
        [
            "name" => "ZateFeto",
            "comment" => "Perfectly made for those who love 2D short story puzzle adventure games & surely enjoyable to every one else due to it's simplicity of controls. ",
            "grade" => 10,
            "game_id" => 1
        ],
        [
            "name" => "Makam",
            "comment" => "Probably one of the best black and white, if not the best, puzzle games. ",
            "grade" => 10,
            "game_id" => 1
        ],
        [
            "name" => "peremptor",
            "comment" => "You want the inside dope on this game? It's Limbo 2 with color and 3D graphics.

Need I say more, get it. It's art in motion. ",
            "grade" => 10,
            "game_id" => 2
        ],
        [
            "name" => "ohmyremi",
            "comment" => "Kinda wished that the was longer, but truly amazing experience.
10/10 Music
Quite creepy ",
            "grade" => 9,
            "game_id" => 3
        ]
      ]);
    }
}
