
<h1> Write new Post </h1>

{!! Form::open(['url' => 'posts', 'id' => 'post-form']) !!}
  @include('posts._form', ['submitButton' => 'Create Post'])
{!! Form::close() !!}

  @include('errors.list')
