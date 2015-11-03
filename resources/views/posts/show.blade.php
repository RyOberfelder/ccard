@extends('app')

@section('content')

<h1>{{$post->subject}}</h1>
    @include('posts.destroy')
    <p>
      {{$post->body}}
    </p>
</h3> {{$user->uname}}</h3>
    <p>
    </p>
    @foreach($post->comments as $comment)
      @include('comments.show', ['comment' => $comment])

    @endforeach
@stop
