@extends('home')

@section('main')
<div class='organization'>
  <h3>
    {{$organization->title}}
  </h3>
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
    {!! Form::open(['url' => 'home/accept-organization/'.$organization->id]) !!}
    {!! Form::submit('Follow?')!!}
    {!! Form::close() !!}

@stop
