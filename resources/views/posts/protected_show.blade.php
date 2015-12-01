@extends('home')

@section('main')

<h1>{{$post->subject}}</h1>
    @include('posts.destroy')
    <p>
    Body:  {{$post->body}}
    </p>
</h3> {{$post}}</h3>
@stop
