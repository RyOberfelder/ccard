@extends('home')

@section('main')

<div class="user-wall">
<h1>Users</h1>
{!! count($users) == 0 ? '<p> Sorry, Your query returned no results close to that username...</p>' : ''; !!}
@foreach($users as $user)
  <div class='user'>
    <h3>
      User Name: <a href="{{ url('/users', $user->id) }}">{{$user->uname}}</a>
    </h3>
    <h5>
      First Name: {{$user->fname}}
    </h5>
    <h5>
      Last Name: {{$user->lname}}
    </h5>
    <h5>
      Email: {{$user->email}}
    </h5>
  </div>

@endforeach

</div>

@stop
