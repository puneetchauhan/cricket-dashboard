@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
		<div class="col-md-8">
            <div class="card">
		                
      @foreach($points as $key => $point)
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Name : <a href="{{ url('team_players/'.$point->team->id) }}">{{ strtoupper($point->team->name)}} </a></p>
   		   {{ HTML::image($point->team->logo_uri, $point->team->name, array('class' => 'img-circle','width' => 55, 'height' => 55 )) }}

        </div>
		<div class="well">
			<p>Match Count : {{ $point->match_count ?:0}} </>
			<p>Match Win : {{ $point->win ?:0 }} </>
			<p>Match Loss : {{ $point->loss ?:0 }} </>
      		<p>Points : {{ $point->pts ?:0 }} </>

		</div>
      </div>
	  @endforeach;
       </div>
            </div>
        </div>
    </div>
</div>
@endsection
