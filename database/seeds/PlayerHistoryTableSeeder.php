<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayerHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = Player::get();
		foreach($players as $key=>$player)
		{
			DB::table('player_histories')->insert([
	            'player_id' => $player->id,
				'matches'=> rand(000,999),
				'run' => rand(00000,99999),
	            'highest_scores' => rand(000,200),
				'fifties' => rand(0,100),
				'hundreds' => rand(0,50)
	        ]);
		}
	}
}
