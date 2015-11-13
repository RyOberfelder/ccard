@extends('home')

@section('main')

<div class="panel panel-default col-md-5">
  <div class="panel-body">
    @include('users.connections', ['users' => $users])
  </div>
</div>
@endsection
