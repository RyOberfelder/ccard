@extends('app')

@section('content')

<h1>Posts</h1>

@foreach($posts as $post)
  <div class='post-wall'>
    <h3>
      <a href="/posts/{{$post->id}}">{{$post->subject}}</a>
    </h3>
    <p>
      {{$post->body}}
    </p>
  </div>

@endforeach

@stop
