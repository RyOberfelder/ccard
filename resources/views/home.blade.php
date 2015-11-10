@extends('app')

@section('nav')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home">Red Directory <span class="sr-only">(current)</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/home/posts">Posts</a></li>
        <li class="disabled"><a href="/users">Users</a></li>
        <li class="disabled"><a href="/organizations">Organizations</a></li>
        <li class="disabled"><a href="/events">Events</a></li>
        <li class="disabled"><a href="/comments">Comments</a></li>
        <li class="disabled"><a href="/articles">Article</a></li>
        <li><a href="/home/requests">Requests</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/auth/register">Register Now</a></li>
        <li><a href="/auth/login">Login</a></li>
        <li><a href="/auth/logout">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@endsection

@section('content')

<div class="panel panel-default col-md-5">
  <div class="panel-body">
    @include('users.show', ['user' => $user])
		@include('users.destroy',['user => $user'])
  </div>
</div>

@endsection
