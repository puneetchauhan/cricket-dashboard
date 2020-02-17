@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          @if(!empty($team_players))
		  <div class="col-sm-9">
		  <div class="well">
            <p>Team : {{ strtoupper($team_players->name)}} </p>{{ HTML::image($team_players->logo_uri, $team_players->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}
          </div>
        </div>
		@endif
		<div class="col-md-8">
            <div class="card">
		
@foreach($team_players->players as $key => $player)
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p><a href="{{ url('player/'.$player->id) }}">{{ strtoupper($player->last_name)}} {{ strtoupper($player->first_name)}}</a></p>
      		   {{ HTML::image($player->image, $player->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}
             </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            jersey no <p>{{ strtoupper($player->jersey_number)}} </p>
          </div>
        </div>
      </div>
      	  @endforeach;
             <!-- <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bo</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
          </div>
       -->          </div>
            </div>
        </div>
    </div>
</div>
@endsection
