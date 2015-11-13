{!! Form::open(['url' => 'home/accept-connection/'.$user->id]) !!}
  {!! Form::hidden('authuser_id', $authuser->id) !!}
{!! Form::submit('Accept Request')!!}
{!! Form::close() !!}
