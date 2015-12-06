@extends('home')

@section('main')
<div class='organization'>
  
  
  <div class="panel panel-default">
	  <div class="panel-heading">
		<div class="panel-title">
			<h3>{{$organization->title}}</h3>
		</div>
	  </div>

	  <div class="panel-body">  
  
		  <p>
			Location: {{$organization->city}}, {{$organization->state}}, {{$organization->country}}
		  </p>
		  <p>
			Type: {{$organization->type}}
		  </p>
		  <p>
			Description: {{$organization->description}}
		  </p>
		  <span> Followers:</span>
		  <ul>
		  @foreach($organization->users as $user)
			  <li>
				{{$user->uname}}
			  </li>
		  @endforeach
		  </ul>
	  </div> 
	  
	  <div class="panel-footer">
	 	{!! Form::open(['url' => 'home/accept-organization/'.$organization->id]) !!}
		{!! Form::submit('Follow this Organization')!!}
		{!! Form::close() !!}
	  </div>
</div>


@stop