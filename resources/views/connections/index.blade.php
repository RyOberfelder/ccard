@extends('home')

@section('main')

<div class="panel panel-default col-md-5">
  <div class="panel-body">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Posts</h2>
      </div>
      <div class="panel-body">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Posts</h2>
          </div>
          <div class="panel-body">


            @foreach($users as $user)
            <div class="well well-sm">
              <p>
                You have a request from {{$user->uname}}
              </p>
              <p>
                {!! Form::open(['url' => 'home/accept-connection/'.$user->id]) !!}
                {!! Form::submit('Accept Request')!!}
                {!! Form::close() !!}
                  @include('errors.list')
              </p>
          </div>
            @endforeach
          </div>
        </div>


      </div>
    </div>


  </div>
</div>
@endsection
