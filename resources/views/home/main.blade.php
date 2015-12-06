@extends('home')

@section('main')

  <div class="panel-body">
    <div class="panel panel-default">
      <div class="panel-heading">
      	<div class="panel-title">
        
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-default btn-med pull-right glyphicon glyphicon-cog" data-toggle="modal" data-target="#myModal">
			  Settings
			</button>
        	
        	<h3> {{$user->uname}} </h3>
        </div>
      </div>
      
      <div class="panel-body">
        <div>
          <p>
            Username: <i>{{$user->uname}} </i> <br />
            Email: {{$user->email}}<br />
            First Name: {{$user->fname}} <br />
            Last Name: {{$user->lname}}<br />
            Location: {{$user->getLocation()}} <br />
          </p>
          <p>
            User Description:<br/>
            {{$user->description}}
          </p>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">User Settings</h4>
      </div>
      <div class="modal-body">

        <!-- This is the Edit Section of the Modal -->





        <!-- This is the delete seciton of the modal    -->
        <h4>Delete This Profile</h4>
        <span>Would you like to delete this profile? </span>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['users.destroy', $user->id]
        ]) !!}
            {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
