<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
		$players = [];
		$query = Player::query();
		if(!empty($id)){

			$query = $query->where('id',$id); 	
    	}
		
		$players = $query->orderBy('id')->get();
				
		return view('player.index',compact('players','id'));
    }

}
