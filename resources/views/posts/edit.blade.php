@extends('app')

@section('content')
<h1>Edit {!! $post->subject !!} </h1>


{!! Form::model($post,['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
  @include('posts._form', ['submitButton' => 'Edit Article'])
{!! Form::close() !!}

@include('errors.list')

@stop
