@extends('home')

@section('main')


<div class="organization-wall">

<h3>Organizations</h3>
@foreach($organizations as $organization)
  <div class='well well-sm'>
    <h4>
      Organization: <a href="/organizations/{{$organization->id}}">{{$organization->title}}</a>
    </h4>
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
