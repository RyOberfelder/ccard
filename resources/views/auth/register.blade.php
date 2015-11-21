@extends('app')

@section('content')
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
@endsection
