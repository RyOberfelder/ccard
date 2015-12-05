@extends('home')

@section('main')

<h1>{{$post->subject}}</h1>
    <p>
      {{$post->body}}
    </p>

  </h3> {{ $writer->uname == null ?  $writer->title : $writer->uname  }}</h3>

@stop
