@extends('app')

@section('content')
<h1>Edit comment </h1>


{!! Form::model($comment,['method' => 'PATCH', 'action' => ['CommentsController@update', $comment->id]]) !!}
  @include('comments._form', ['submitButton' => 'Edit Comment'])
{!! Form::close() !!}

@include('errors.list')

@stop
