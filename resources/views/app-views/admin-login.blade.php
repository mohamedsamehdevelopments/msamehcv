@extends('layouts.app')

@section('content')
	<div class="container">
		
		<form method="post">
			@if (session('status'))
			    <div class="alert alert-danger">
			        {{ session('status') }}
			    </div>
			@endif
			
			@csrf
			<h4 class="down-space">Login</h4>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
@endsection