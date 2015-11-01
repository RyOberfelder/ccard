@extends('app')

@section('content')

<h1>{{$organization->title}}</h1>
    <p>
      {{$organization->description}}
    </p>

@stop
