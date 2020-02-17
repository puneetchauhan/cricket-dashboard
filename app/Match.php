<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use Carbon\Carbon;

class Match extends Model
{
	//for datetime format
	public function getDateTimeAttribute($value)
	{
		$date = new Carbon($value);
		return $date->toDayDateTimeString();
	}

	//to get datails of first inning team with match records
	public function first_inning()
    {
        return $this->belongsTo('App\Team', 'first_inning_id');
    }

	//to get datails of second inning team along with match records
	public function second_inning()
    {
        return $this->belongsTo('App\Team', 'second_inning_id');
    }
}
