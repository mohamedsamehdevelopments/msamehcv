@extends('layouts.app')

@section('content')
	<div class="container">
		
		<form method="post">
			@csrf
			<h4 class="down-space">Register</h4>
			<div class="form-group">
				<label for="fname">Firstname</label>
				<input type="text" name="fname" class="form-control" id="fname">
				@if ($errors->has('fname'))
				    <div class="error">{{ $errors->first('fname') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="lname">Lastname</label>
				<input type="text" name="lname" class="form-control" id="lname">
				@if ($errors->has('lname'))
				    <div class="error">{{ $errors->first('lname') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email">
				@if ($errors->has('email'))
				    <div class="error">{{ $errors->first('email') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" id="username">
				@if ($errors->has('username'))
				    <div class="error">{{ $errors->first('username') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password">
				@if ($errors->has('password'))
				    <div class="error">{{ $errors->first('password') }}</div>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
@endsection