@extends('app')

@section('content')

<h1>{{$organization->title}}</h1>
    <p>
      {{$organization->description}}
    </p>
    {!! Form::open(['url' => 'home/accept-organization/'.$organization->id]) !!}
    {!! Form::submit('connect')!!}
    {!! Form::close() !!}

@stop
