@extends('app')

@section('content')

<h1>{{$post->subject}}</h1>
    <p>
      {{$post->body}}
    </p>
</h3> Here is the other part of the post</h3>
    <p>
      {{$post}}
    </p>
@stop
