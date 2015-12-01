@extends('app')

@section('extraHeader')

<link href="/css/simple-sidebar.css" rel="stylesheet">
<style>

.navbar{
  margin-bottom: 0px;
}

</style>

@endsection

@section('content')
    <div id="wrapper">
<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                  <a href="/home/organizations/home">{{session('organization')->title}}</a>
                </li>
                <li {{ Request::is( 'home/organizations/posts') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/organizations/posts">Posts</a></li>
                <li {{ Request::is( 'home/organizations/users') ? 'class=sidebar-nav-li-active' : 'class=sidebar-nav-li-disabled' }}><a href="/home/organizations/users">Users</a></li>
                <li {{ Request::is( 'home/organizations/events') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/organizations/events">Events</a></li>
                <li {{ Request::is( 'home/organizations/news') ? 'class=sidebar-nav-li-active' : 'class=sidebar-nav-li-disabled' }}><a href="/home/organizations/news">News</a></li>
                <li {{ Request::is( 'home/organizations/connections') ? 'class=sidebar-nav-li-active' : 'class=sidebar-nav-li-disabled' }}><a href="/home/organizations/connections">Connections</a></li>
                <li ><a href="/home/organizations/logout">logout</a></li>
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
