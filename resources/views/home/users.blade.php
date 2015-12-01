@extends('home')

@section('main')



<div class="panel panel-default">
  <div class="panel-heading clearfix">
    Your Connections
  </div>
  <div class="panel-body">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                  @include('users.connections', ['users' => $users])

                </div>
                <div class="col-lg-6">
                  <h1> Your Requests </h1>
                  <p>
                  {{ count($connections) < 1 ? 'Sorry no requests today...': ''}}
                  <p>
                  @foreach($connections as $connection)
                  <div class="well well-sm">
                    <p>
                      You have a request from {{$connection->uname}}
                    </p>
                    <p>
                      {!! Form::open(['url' => 'home/accept-connection/'.$connection->id]) !!}
                      {!! Form::submit('Accept Request')!!}
                      {!! Form::close() !!}
                      {!! Form::open([
                          'method' => 'DELETE',
                          'url' => ['home/reject-connection/'.$connection->id]
                      ]) !!}
                          {!! Form::submit('Delete Request?', ['class' => 'btn btn-danger']) !!}
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
