@extends('organizations.home')

@section('main')
<div class="panel panel-default col-md-5">
  <div class="panel-body">

    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Posts</h2>
      </div>
      <div class="panel-body">


        @foreach($posts as $post)
        <div class="well well-sm">
          <span><a href="/posts/{{$post->id}}">{{$post->subject}}</a></span>
          <p>
            {{$post->body}}
          </p>
          <p>
            {{$post->creator}}
          </p>
      </div>
        @endforeach
      </div>
    </div>


    <h1> Write new Post </h1>

    {!! Form::open(['url' => 'posts/organizations']) !!}
    <div class="post-form-subject">
      {!! Form::label('subject','Subject:') !!}
      {!! Form::text('subject') !!}
    </div>
    <div class="post-form-body">
      {!! Form::label('body','Body:') !!}
      {!! Form::textarea('body') !!}
    </div>
    {!! Form::submit('Submit Post')!!}
    {!! Form::close() !!}

      @include('errors.list')
  </div>
</div>
@endsection
