@extends('app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Posts <a href="/posts/create">create</a></h2>
  </div>
  <div class="panel-body">


    @foreach($posts as $post)
    <div class="panel panel-default">
      <div class="panel-heading"><a href="/posts/{{$post->id}}">{{$post->subject}}</a></div>
      <div class="panel-body">
        <p>
      {{$post->body}}
        </p>
        <p>
          {{$post->creator}}
        </p>
      </div>
    </div>

    @endforeach
  </div>
</div>


@stop
