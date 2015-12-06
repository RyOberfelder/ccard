{!! Form::open(['url' => 'events', 'id' => 'event-form']) !!}
<div class="post-form-title">
  {!! Form::label('title','*Event Title:') !!}
  {!! Form::text('title') !!}
</div>
<div class="post-form-description">
  {!! Form::label('description','Description:') !!}
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
<select id="event-creator-select" width="90px"  class="form-control">
  <option value={{$user->id}}>{{$user->uname}}</option>
  @foreach($egos as $ego)
  <option value={{$ego->id}} >{{$ego->title}}</option>
  @endforeach
</select><br>
{!! Form::submit('Submit Event')!!}
{!! Form::close() !!}
@include('errors.list')
