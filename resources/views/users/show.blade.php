@extends('app')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">{{$user->uname}}</div>
  <div class="panel-body">
    <div>
      <p>
        username: {{$user->uname}} <br />
        user email: {{$user->email}}<br />
        user first name:{{$user->fname}} <br />
        user last name: {{$user->lname}}<br />
        user location: {{$user->city}}, {{$user->state}}, {{$user->country}} <br />
      </p>
      <p>
        user description:<br/>
        {{$user->description}}
      </p>
    </div>
  </div>
</div>
@stop
