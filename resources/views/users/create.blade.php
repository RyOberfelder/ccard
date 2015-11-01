@extends('app')

@section('content')

<h1> Create User </h1>

{!! Form::open(['url' => 'users']) !!}
<div class="user-form-fname">
  {!! Form::label('fname','First Name:') !!}
  {!! Form::text('fname') !!}
</div>
<div class="user-form-lname">
  {!! Form::label('lname','Last Name:') !!}
  {!! Form::text('lname') !!}
</div>
<div class="user-form-uname">
  {!! Form::label('uname','User Name:') !!}
  {!! Form::text('uname') !!}
</div>
<div class="user-form-email">
  {!! Form::label('email','Email:') !!}
  {!! Form::text('email') !!}
</div>
<div class="user-form-password">
  {!! Form::label('password','Password:') !!}
  {!! Form::text('password') !!}
</div>
{!! Form::submit('Submit User')!!}
{!! Form::close() !!}


@stop
