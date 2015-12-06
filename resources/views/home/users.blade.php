@extends('home')

@section('main')



<div class="panel panel-default">
  <div class="panel-heading clearfix">
    <h4>My Connections</h4>
  </div>
  <div class="panel-body">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
            
            	<!-- Left Panel --!>
                <div class="col-lg-6">
					@include('users.connections', ['users' => $users])
				</div>
                
                <!-- Right Panel --!>
                <div class="col-lg-6">
					  <h3>Your Requests</h3>

					  <p>
					  {{ count($connections) < 1 ? 'You have no new requests.': ''}}
					  <p>
				  
					  @foreach($connections as $connection)
					  <div class="well well-sm">
						<p>
						  You have a request from: <b> {{$connection->uname}} </b>
						</p>
						<p>
						  {!! Form::open(['url' => 'home/accept-connection/'.$connection->id]) !!}
						  {!! Form::submit('Accept Request?', ['class' => 'btn btn-success'])!!}
						  {!! Form::close() !!}
						  <br>
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
