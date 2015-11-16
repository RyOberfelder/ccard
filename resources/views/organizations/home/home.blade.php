@extends('organizations.home')

@section('main')
<h1>{{$organization->title}}</h1>
    <p>
      {{$organization->description}}
    </p>
@endsection
