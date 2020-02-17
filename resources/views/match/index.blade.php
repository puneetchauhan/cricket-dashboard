@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
		
		<!-- 
		          @if(!empty($team_players))
		  <div class="col-sm-9">
		  <div class="well">
		            <p>Team : {{ strtoupper($team_players->name)}} </p>{{ HTML::image($team_players->logo_uri, $team_players->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}
		          </div>
		        </div>
		@endif -->
		<div class="col-md-9">
            <div class="card">
			{!! Form::open(array('route' => 'match-filter')) !!}
	
		
        {{ csrf_field() }}
        <div class="form-group">
            <label for="description">Team</label>
			{!! Form::select('team', $team, null, ['class' => 'form-control m-bot15']) !!}
            
			<label for="description">Match Type</label>
            {!! Form::select('type', $type, null, ['class' => 'form-control m-bot15']) !!}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!} 
	
      @foreach($matches as $key => $match)
		
      <div class="row">
        <div class="col-sm-8">
        
		  <div class="well">
			<p>{{ strtoupper($match->first_inning->name)}} {{ HTML::image($match->first_inning->logo_uri, $match->first_inning->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}</p>
			<div>
			v
			</div>

			<p>{{ strtoupper($match->second_inning->name)}} {{ HTML::image($match->second_inning->logo_uri, $match->second_inning->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}</p>
			
			<div>
			<span>{{ strtoupper($type[$match->type]) }}</span>   ,<span>{{ strtoupper($match->location) }}</span>   ,     <span>{{ $match->date_time }}</span> 
			</div>
			<div class="well">
			@if($match->winner_inning_id === $match->first_inning->id)
			<p>Winner : {{ strtoupper($match->first_inning->name)}} </>
			@else
			<p>Winner : {{ strtoupper($match->second_inning->name)}} </>
			@endif
			</div>
		</div>
        </div>

      </div>
	  @endforeach;
       </div>
            </div>
        </div>
    </div>
</div>
@endsection
