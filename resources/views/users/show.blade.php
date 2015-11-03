@extends('app')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">{{$user->uname}}</div>
  <div class="panel-body">
    Hello {{$user->fname}} {{$user->lname}}
  </div>
</div>
@stop
