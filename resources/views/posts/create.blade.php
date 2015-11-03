
<h1> Write new Post </h1>

{!! Form::open(['url' => 'posts']) !!}
  @include('posts._form', ['submitButton' => 'Create Post'])
{!! Form::close() !!}

  @include('errors.list')
