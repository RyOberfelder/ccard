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
                    <a href="/home">
                      {{  \Auth::user()->uname}}
                    </a>
                </li>
                <li {{ Request::is( 'home/posts') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/posts">My Posts</a></li>
                <li {{ Request::is( 'home/users') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/users">My Connections</a></li>
                <li {{ Request::is( 'home/organizations') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/organizations">My Organizations</a></li>
                <li {{ Request::is( 'home/events') ? 'class=sidebar-nav-li-active' : '' }}><a href="/home/events">My Events</a></li>
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
