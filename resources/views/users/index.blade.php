@extends('home')

@section('main')

<div class="user-wall">
<h3>Users</h3>

@foreach($users as $user)
	<div class="well well-sm">
	  <div class='user'>
		<h4>
		  User Name: <a href="{{ url('/users', $user->id) }}">{{$user->uname}}</a>
		</h4>
		<p>
		  First Name: {{$user->fname}}
		</p>
		<p>
		  Last Name: {{$user->lname}}
		</p>
		<p>
		  Email: {{$user->email}}
		</p>
	  </div>
	</div>  

	@endforeach

</div>

@stop
