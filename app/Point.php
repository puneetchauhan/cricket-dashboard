<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;


class Point extends Model
{
    //
	public function team()
	{
		return $this->belongsTo('App\Team');
	}
}
