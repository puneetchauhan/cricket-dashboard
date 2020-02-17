<?php

namespace App\Http\Controllers;

use App\Team;
use App\Player;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$teams = Team::get();
        
		return view('team.index',compact('teams'));
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team_players($id)
    {
		$team_players = [];
        if(!empty($id)){

			$team_players = Team::with('players')->find($id);
				
		}
		
		return view('player.team_player',compact('team_players'));
    }
	
    
}
