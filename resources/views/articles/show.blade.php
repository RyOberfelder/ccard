@extends('app')

@section('title')
  <title>Articles</title>
@stop

@section('content')

  <h1>{{ $article->subject }}</h1>

  <article>
    {{ $article-> body }}
  </article>


@stop
