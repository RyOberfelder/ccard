@extends('home')

@section('main')

  <div class="panel-body">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
          {{$user->uname}}
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-default btn-med pull-right glyphicon glyphicon-cog" data-toggle="modal" data-target="#myModal">
      Settings
    </button>
      </div>
      <div class="panel-body">
        <div>
          <p>
            username: <i>{{$user->uname}} </i> <br />
            email: {{$user->email}}<br />
            first name:{{$user->fname}} <br />
            last name: {{$user->lname}}<br />
            location: {{$user->getLocation()}} <br />
          </p>
          <p>
            user description:<br/>
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

        <!-- This is the Edit Section of the Modal -->





        <!-- This is the delete seciton of the modal    -->
        <h4>Delete This Profile</h4>
        <span>Would you like to delete this profile?</span>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['users.destroy', $user->id]
        ]) !!}
            {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
