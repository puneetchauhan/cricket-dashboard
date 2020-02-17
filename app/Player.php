<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PlayerHistory;

class Player extends Model
{
    
	 //to get datails of team of particular player	
	 public function team()
    {
        return $this->belongsTo('App\Team');
    }

	//to get datails of player history
	public function player_history()
    {
        return $this->hasOne('App\PlayerHistory');
    }
}
