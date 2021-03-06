<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Team;


class MatchController extends Controller
{
	protected $matchTypeName = ['1'=>'quarter-final','2'=>'semi-final','3'=>'final'];
    
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$type = $matches = [];
		$team = Team::pluck('name', 'id')->toArray();
		$matchType = Match::distinct()->get(['type'])->toArray();//select('type')->distinct()->get()->toArray();
		$matches = Match::with('first_inning')->with('second_inning')->get();
		
		 foreach($matchType as $key=>$value)
		{
			$type[$key] = $this->matchTypeName[$value['type']];
		}

		array_unshift($team,'all');
		array_unshift($type,'all');
		
		return view('match.index',compact('matches','team','type'));
    }


	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function match_filter(Request $request)
    {

		$typeChoose = $request->type;
		$teamChoose = $request->team;
			
		$type = $matches = [];
		$team = Team::pluck('name', 'id')->toArray();
		$matchType = Match::distinct()->get(['type'])->toArray();//select('type')->distinct()->get()->toArray();
		$match = Match::with('first_inning')->with('second_inning');
		
		foreach($matchType as $key=>$value)
		{
			$type[$key] = $this->matchTypeName[$value['type']];
		}

		array_unshift($team,'all');
		array_unshift($type,'all');
	    

		$arr = array_keys($team);
		
		if(!empty($typeChoose))
		{
			
		   $match = $match->where('type',$typeChoose);
		}
		
		if(!empty($teamChoose) && in_array($teamChoose,$arr))
		{
			$match = $match->where('first_inning_id',$teamChoose)->orWhere('second_inning_id',$teamChoose);
		}
		
		$matches = $match->get();		
			
		return view('match.index',compact('matches','team','type'));
    }
}
