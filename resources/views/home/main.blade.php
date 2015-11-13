@extends('home')

@section('main')

<div class="panel panel-default col-md-5">
  <div class="panel-body">
    @include('users.show', ['user' => $user, 'authuser' => $user])
		@include('users.destroy',['user => $user'])
  </div>
</div>

@endsection
