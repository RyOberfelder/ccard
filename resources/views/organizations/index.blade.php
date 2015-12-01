@extends('home')

@section('main')

<h1>organizations</h1>
<div class="organization-wall">
@foreach($organizations as $organization)
  <div class='organization'>
    <h3>
      <a href="/organizations/{{$organization->id}}">{{$organization->title}}</a>
    </h3>
    <p>
      Location: {{$organization->city}}, {{$organization->state}}, {{$organization->country}}
    </p>
    <p>
      Type: {{$organization->type}}
    </p>
    <p>
      Description: {{$organization->description}}
    </p>
  </div>

@endforeach
</div>
@stop
