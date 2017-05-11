<?php

use Illuminate\Database\Seeder;

class GameStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('game_store')->insert([
        [
            "game_id" => 1,
            "store_id" => 1
        ],
        [
            "game_id" => 1,
            "store_id" => 2
        ],
        [
            "game_id" => 2,
            "store_id" => 1
        ],
        [
            "game_id" => 3,
            "store_id" => 1
        ],
        [
            "game_id" => 2,
            "store_id" => 2
        ]
      ]);
    }
}
