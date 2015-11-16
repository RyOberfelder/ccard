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

    <style>
    div.user-wall{
      display:block;
      width:800px;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
    }
    div.user{
      background-color: #FAF0ED;
      border: 2px #878280 solid;
      border-radius: 20px;
      width: auto;
      padding: 10px 20px;
      margin: 10px 0px;
    }
    </style>
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
    <div>
      @yield('content')
    </div>
  </body>
</html>
