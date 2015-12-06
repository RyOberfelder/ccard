<!doctype html>
<html>
  <head>
    <title> register </title>
    <meta charset="utf-8">
    <!-- Here is the Jquery that I needed-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

  </head>
  <body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">User Name*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="uname" value="{{ old('uname') }}">
								<span class="text-muted"> This is what other users will see and search for. </span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address*</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								<span class="text-muted"> The adress you type in to log-in.</span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">First Name*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Last Name*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">City</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="city">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">State</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="state">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Country</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="country">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Describe connection to HIV/Aids</label>
							<div class="col-md-6">
								<textarea class="form-control" name="description" cols="40" rows="5"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password*</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
								<span class="text-muted"> Be sure to rememeber the password. </span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password*</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
								<span class="text-muted"> Enter the same password as above</span>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
