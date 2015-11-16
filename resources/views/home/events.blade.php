@extends('home')

@section('main')

<div class="panel panel-default col-md-5">
  <div class="panel-body">
    @foreach($events as $event)
    <div class="well well-sm">
      <span><a href="/posts/{{$event->id}}">{{$event->title}}</a></span>
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
		@include('events.create')
  </div>
</div>
@endsection
