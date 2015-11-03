<!doctype html>
<html>
  <head>
    <title>Posts</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
          <a class="navbar-brand" href="/home">Red Directory</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/posts">Posts <span class="sr-only">(current)</span></a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/organizations">Organizations</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/comments">Comments</a></li>
            <li><a href="/articles">Article</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
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
