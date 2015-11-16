


{!! Form::open(['url' => 'connections/create/'.$user->id]) !!}
  {!! Form::hidden('authuser_id', $authuser->id) !!}
{!! Form::submit('Send Request')!!}
{!! Form::close() !!}

  @include('errors.list')
