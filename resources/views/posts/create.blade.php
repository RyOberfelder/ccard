@extends('app')

@section('content')

<h1> Write new Post </h1>

{!! Form::open(['url' => 'posts']) !!}
  @include('posts._form', ['submitButton' => 'Edit Article'])
{!! Form::close() !!}

  @include('errors.list')


@stop
