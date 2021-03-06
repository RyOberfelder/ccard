<!doctype html>
<html>
  <head>
    @yield('title')
    <meta charset="utf-8">
    <!-- Here is the Jquery that I needed-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    @yield('extraHeader')

    @yield('extraScripts')
  </head>
  <body>
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
            <li {{ Request::is( 'users') ? 'class=active' : '' }}><a href="/users">Users</a></li>
            <li {{ Request::is( 'organizations') ? 'class=active' : '' }}><a href="/organizations">Organizations</a></li>
            <li {{ Request::is( 'events') ? 'class=active' : '' }}><a href="/events">Events</a></li>
          </ul>
          {!! Form::open(['method' => 'POST','name' => 'searchForm','url' => '/search/username', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Search">
          </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-default', 'placeholder' => 'Search']) !!}
          {!! Form::close() !!}
          <ul class="nav navbar-nav navbar-right">
            <li><a class="glyphicon glyphicon-log-out" href="/auth/logout"> Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div>
      @yield('content')
    </div>
  </body>
</html>
