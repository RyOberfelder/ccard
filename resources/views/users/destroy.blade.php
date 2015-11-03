{!! Form::open([
    'method' => 'DELETE',
    'route' => ['users.destroy', $user->id]
]) !!}
    {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
