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
		                
      @foreach($players as $key => $player)

      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Name : <a href="{{ url('player/'.$player->id) }}">{{ strtoupper($player->last_name)}} {{ strtoupper($player->first_name)}}</a></p>
		   {{ HTML::image($player->image, $player->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}
        </div>
        </div>

		@if(!empty($id))
        <div class="col-sm-9">
          <div class="well">
		  <table style="width:100%">
  <tr>
    <th>Country</th>
    <th>Jersey number</th>
    <th>Matches</th>
	<th>Run	</th>
	<th>highest_scores</th>
	<th>fifties</th>
	<th>hundreds</th>
  </tr>
  <tr>
    <td>{{ $player->country }}</td>
    <td>{{ $player->jersey_number ?: 'no data' }}</td>
    <td>{{ $player->player_history->matches ?: 'no data' }}</td>
	<td>{{ $player->player_history->run ?: 'no data' }}</td>
	<td>{{ $player->player_history->highest_scores ?: 'no data' }}</td>
	<td>{{ $player->player_history->fifties ?: 'no data' }}</td>
	<td>{{ $player->player_history->hundreds ?: 'no data' }}</td>
  </tr>

</table>
          </div>
        </div>
		@endif
      </div>
	  @endforeach;
       </div>
            </div>
        </div>
    </div>
</div>
@endsection
