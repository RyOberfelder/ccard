@extends('home')

@section('main')

        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Connections</h2>
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
                {!! Form::open([
                    'method' => 'DELETE',
                    'url' => ['home/reject-connection/'.$user->id]
                ]) !!}
                    {!! Form::submit('Delete Request?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @include('errors.list')
              </p>
          </div>
            @endforeach
          </div>
        </div>

@endsection
