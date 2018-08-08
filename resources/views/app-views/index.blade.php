@extends('layouts.app')


@section('content')

<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							
							<div class="hero-text">
								@foreach($user as $us)
								<h2>{{ $us->fname }} {{ $us->lname }}</h2>
								@endforeach

								@foreach($personal_info as $person)
								<p>{{ $person->bio }}</p>
								@endforeach

							</div>
							<div class="hero-info">
								<h2>General Info</h2>
								<ul>
									@foreach($personal_info as $person)
									<li><span>Date of Birth</span>{{ $person->date_of_birth }}</li>
									

									<li><span>Address</span>{{ $person->area }} ,{{ $person->city }}, {{ $person->country }}</li>
									@endforeach
									@foreach($personal_info as $person)
									<li><span>E-mail</span>{{ $us->email }}</li>
									@endforeach
									@foreach($personal_info as $person)
									<li><span>Phone </span>{{ $person->mobile }}</li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								<img src="uploads/avatars/{{ $person->personal_photo }}" alt="5">
							</figure>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection