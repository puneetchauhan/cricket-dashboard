<?php

use Illuminate\Database\Seeder;

class PlayerTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  $country = ['1'=>'india','2'=>'australia','3'=>'bangladesh','4'=>'new_zealand'];
	  
	  for ($k=1; $k <= 4; $k++){
		    $cont = $country[$k] ?: '0';
        for ($i=1; $i <= 4; $i++) { 
	    	DB::table('players')->insert([
	            'team_id' => $k,
				'jersey_number'=> $k.$i,
				'first_name' => str_random(8),
	            'last_name' => str_random(12),
				'image' => 'img/player/test.png',
	            'country' => $cont 
	        ]);
    	}
	  }
    }
}
