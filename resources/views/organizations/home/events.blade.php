@extends('organizations.home')

@section('main')

    <div class="panel panel-default col-md-5">
      <div class="panel-body">
        @foreach($events as $event)
        <div class="well well-sm">
          <span><a href="/events/{{$event->id}}">{{$event->title}}</a></span>
          <p>
            {{$event->description}}
          </p>
          <p>
            {{$event->event_due}} , {{$event->event_time}}
          </p>
          <p>
            {{$event->eventable_type == 'App\User' ? $event->eventable->uname : $event->eventable->title}}
          </p>
      </div>
        @endforeach
        <h1> Write new Event </h1>

        {!! Form::open(['url' => 'events/organizations']) !!}
        <div class="post-form-title">
          {!! Form::label('title','Event Title:') !!}
          {!! Form::text('title') !!}
        </div>
        <div class="post-form-description">
          {!! Form::label('description','Event Description:') !!}
          {!! Form::textarea('description') !!}
        </div>
        <div class="post-form-date">
          {!! Form::label('event_due','Event Date:') !!}
          {!! Form::input('date','event_due') !!}
        </div>
        <div class="post-form-time">
          {!! Form::label('event_time','Event Date:') !!}
          {!! Form::input('time','event_time') !!}
        </div>
        {!! Form::submit('Submit Event')!!}
        {!! Form::close() !!}
      </div>
    </div>

      @include('errors.list')
@endsection
