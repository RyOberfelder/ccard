@extends('app')

@section('content')

<h1>{{$user->uname}}</h1>
    <p>
      Hello {{$user->fname}} {{$user->lname}} 
    </p>

@stop
