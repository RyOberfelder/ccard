@extends('app')

@section('title')
  <title>Articles</title>
@stop

@section('content')

<h1>All Articles</h1>

@foreach($articles as $article)

  <article>
    <div class='article-wall'>
      <h3>
        <a href="/articles/{{$article->id}}">{{$article->subject}}</a>
      </h3>
      <p>
        {{$article->body}}
      </p>
    </div>
  </article>

@endforeach

@stop
