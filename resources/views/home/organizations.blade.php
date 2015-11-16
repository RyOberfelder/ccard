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
<span><a href='/home/organization/{{$organization->id}}'> become {{$organization->title}}</a></span>
@endforeach
</div>



{!! Form::open(['url' => 'organizations']) !!}
<div class="organization-form-title">
  {!! Form::label('title','Organization Name:') !!}
  {!! Form::text('title') !!}
</div>
<div class="organization-form-city">
  {!! Form::label('city','Oranization City:') !!}
  {!! Form::text('city') !!}
</div>
<div class="organization-form-state">
  {!! Form::label('state','Organization State:') !!}
  {!! Form::text('state') !!}
</div>
<div class="organization-form-country">
  {!! Form::label('country','Organization Country:') !!}
  {!! Form::text('country') !!}
</div>
<div class="organization-form-type">
  {!! Form::label('type','Organization Type:') !!}
  {!! Form::text('type') !!}
</div>
<div class="organization-form-description">
  {!! Form::label('description','description:') !!}
  {!! Form::textarea('description') !!}
</div>
{!! Form::submit('Submit Organization')!!}
{!! Form::close() !!}

@stop
