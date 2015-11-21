@extends('app')

@section('extraHeader')

<link href="/css/simple-sidebar.css" rel="stylesheet">
<style>

.navbar{
  margin-bottom: 0px;
}

</style>

@endsection

@section('nav')
<nav class="navbar navbar-default" margin-bottom="0px">
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
        <li {{ Request::is( 'posts') ? 'class=active' : '' }}><a href="/posts">Posts</a></li>
        <li {{ Request::is( 'users') ? 'class=active' : '' }}><a href="/users">Users</a></li>
        <li {{ Request::is( 'organizations') ? 'class=active' : '' }}><a href="/organizations">Organizations</a></li>
        <li {{ Request::is( 'events') ? 'class=active' : '' }}><a href="/events">Events</a></li>
        <li {{ Request::is( 'news') ? 'class=active' : 'class=disabled' }}><a href="/news">News</a></li>
        <li {{ Request::is( 'connections') ? 'class=active' : '' }}><a href="/connections">Connections</a></li>
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
    <div id="wrapper">
<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/home">
                      {{  \Auth::user()->uname}}
                    </a>
                </li>
                <li {{ Request::is( 'home/posts') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/posts">My Posts</a></li>
                <li {{ Request::is( 'home/users') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/users">My Connections</a></li>
                <li {{ Request::is( 'home/organizations') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/organizations">My Organizations</a></li>
                <li {{ Request::is( 'home/events') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/events">My Events</a></li>
                <li {{ Request::is( 'home/news') ? 'class=sidebar-nav-li-active' : 'class=sidebar-nav-li-disabled' }}><a href="/home/news">My News</a></li>
                <li {{ Request::is( 'home/connections') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/connections">My Connection Requests</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('main')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
