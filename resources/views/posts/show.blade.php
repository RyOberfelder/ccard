@extends('app')

@section('content')

<h1>{{$post->subject}}</h1>
    <p>
      {{$post->body}}
    </p>

@stop
