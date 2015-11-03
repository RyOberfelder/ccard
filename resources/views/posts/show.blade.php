@extends('app')

@section('content')

<h1>{{$post->subject}}</h1>
    <p>
      {{$post->body}}
    </p>
</h3> Here is the other part of the post</h3>
    <p>
      {{User::findOrFail($post->user_id)}}
    </p>
    @foreach($post->comments as $comment)
      @include('comments.show', ['comment' => $comment])

    @endforeach
@stop
