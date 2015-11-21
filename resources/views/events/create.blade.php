<h1> Write new Event </h1>

{!! Form::open(['url' => 'events']) !!}
<div class="post-form-title">
  {!! Form::label('title','*Event Title:') !!}
  {!! Form::text('title') !!}
</div>
<div class="post-form-description">
  {!! Form::label('description','Event Description:') !!}
  {!! Form::textarea('description') !!}
</div>
<div class="post-form-date">
  {!! Form::label('event_due','*Event Date:') !!}
  {!! Form::input('date','event_due') !!}
</div>
<div class="post-form-time">
  {!! Form::label('event_time','Event Time:') !!}
  {!! Form::input('time','event_time') !!}
</div>
{!! Form::submit('Submit Event')!!}
{!! Form::close() !!}
@include('errors.list')
