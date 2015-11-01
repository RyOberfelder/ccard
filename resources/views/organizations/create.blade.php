@extends('app')

@section('content')

<h1> Create Organization </h1>

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
<div class="organization-form-password">
  {!! Form::label('password','Password:') !!}
  {!! Form::text('password') !!}
</div>
{!! Form::submit('Submit Organization')!!}
{!! Form::close() !!}


@stop
