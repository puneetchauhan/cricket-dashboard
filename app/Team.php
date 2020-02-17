<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;

class Team extends Model
{
    //to get datails of players associated with team
	public function players()
	{
		return $this->hasMany('App\Player');
	}
}
