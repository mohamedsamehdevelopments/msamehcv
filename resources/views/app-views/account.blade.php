@extends('layouts.app')

@section('content')
	<div class="container">
		
		<form method="post" enctype="multipart/form-data">
			@csrf
			<h4 class="down-space">Personal Info</h4>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<input type="text" placeholder="year" name="year" class="form-control" id="year">
						@if ($errors->has('year'))
						    <div class="error">{{ $errors->first('year') }}</div>
						@endif
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<input type="text" placeholder="month" name="month" class="form-control" id="month">
						@if ($errors->has('month'))
						    <div class="error">{{ $errors->first('month') }}</div>
						@endif
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<input type="text" placeholder="day" name="day" class="form-control" id="day">
						@if ($errors->has('day'))
						    <div class="error">{{ $errors->first('day') }}</div>
						@endif
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="country">Country</label>
				<input type="text" name="country" class="form-control" id="country">
				@if ($errors->has('country'))
					<div class="error">{{ $errors->first('country') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" name="city" class="form-control" id="city">
				@if ($errors->has('city'))
					<div class="error">{{ $errors->first('city') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="area">Area</label>
				<input type="text" name="area" class="form-control" id="area">
				@if ($errors->has('area'))
					<div class="error">{{ $errors->first('area') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="mobile">Mobile</label>
				<input type="text" name="mobile" class="form-control" id="mobile">
			</div>
			<div class="form-group">
				<label for="current_position">Current Position</label>
				<input type="text" name="current_position" class="form-control" id="current_position">
			</div>
			<div class="form-group">
				<label for="bio">Bio</label>
				<textarea type="text" name="bio" class="form-control" id="bio" rows="5"></textarea>
				@if ($errors->has('bio'))
					<div class="error">{{ $errors->first('bio') }}</div>
				@endif
			</div>
			<div class="form-group">
                <label for="picture">Profile picture:</label>
                <img id="img" src="#" alt="your image" class="img-thumbnail" style="display: none; max-width: 200px; height: auto;" />
                <input type="file" class="form-control-file" name="picture" id="picture" accept="image/*">
                @if ($errors->has('picture'))
					<div class="error">{{ $errors->first('picture') }}</div>
				@endif
            </div>
            <div class="row align-items-center justify-content-center">
				<button type="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
@endsection