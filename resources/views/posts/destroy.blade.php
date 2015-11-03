{!! Form::open([
    'method' => 'DELETE',
    'route' => ['posts.destroy', $post->id]
]) !!}
    {!! Form::submit('Delete this post?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
