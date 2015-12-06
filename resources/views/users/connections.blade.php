<h3>Your Connections</h3>

@foreach($users as $user)
<div class='user'>
	<div class='well well-sm'>
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