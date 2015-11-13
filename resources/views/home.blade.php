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
        <li {{ Request::is( 'home/posts') ? 'class=active' : '' }}><a href="/home/posts">Posts</a></li>
        <li {{ Request::is( 'home/users') ? 'class=active' : '' }}><a href="/home/users">Users</a></li>
        <li {{ Request::is( 'home/organizations') ? 'class=active' : 'class=disabled' }}><a href="/home/organizations">Organizations</a></li>
        <li {{ Request::is( 'home/events') ? 'class=active' : 'class=disabled' }}><a href="home/events">Events</a></li>
        <li {{ Request::is( 'home/news') ? 'class=active' : 'class=disabled' }}><a href="home/news">News</a></li>
        <li {{ Request::is( 'home/news') ? 'class=active' : '' }}><a href="/home/connections">Connections</a></li>
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

@yield('main')

@endsection
