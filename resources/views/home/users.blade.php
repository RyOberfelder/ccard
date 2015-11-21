@extends('home')

@section('main')

  <div class="panel-body">
    @include('users.connections', ['users' => $users])
  </div>
@endsection
