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
    @yield('nav')
    <div>
      @yield('content')
    </div>
  </body>
</html>
