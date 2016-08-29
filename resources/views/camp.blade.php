@extends('layouts/layout')

@section('content')
<div class ="coaches_page">
	@include('partials/header')
	<div class="first-section">
		<div class="container">
			<div class="row first-content">
				<div class="col-md-2">
					@include('partials/about_sidebar')
				</div>
				<div class="col-md-10 coaches-text">
					<h1>Dylan Campion, BSc, R.Kin</h1>
					<h3>Head Strength and Conditioning Coach, Stratford</h3>
				</div>
			</div>
			<div class="row bio">
				<div class="col-md-3">
					<img class="coaches-picture" src="/images/staff/Dylan.jpg">
				</div>
				<div class="col-md-9">
					<p>Dylan joined the team in the fall of 2013 as a Strength and Conditioning Coach. Dylan attended the University of Waterloo, where he obtained his Bachelor’s degree in Honours Kinesiology (2013). He developed his clinical eye for movement while working at a health and wellness clinic in British Columbia, an indoor hockey training facility, and the Ontario Police College, where he wrote and developed fitness programs and classes for recruits of numerous Ontario police departments. Dylan is also a Registered Kinesiologist with the College of Kinesiology of Ontario.</p>
					<p>Dylan‘s resume includes the following:
						<ul>
							<li>Three years of junior hockey experience (2005-2008)
							</li>
							<li>Bachelor of Science, Honours Kinesiology – University of Waterloo (2013)
							</li>
							<li>Head Goaltending Instructor, Hockey Training Above (2011-2013)
							</li>
							<li>Registered Kinesiologist, College of Kinesiologists of Ontario (2013)
							</li>
							<li>Registered Kinesiologist, College of Kinesiologists of Ontario (2013)
							</li>						
						</ul>

					</p>
				</div>
			
			</div>
		</div>
	</div>
@include('partials/footer')
</div>
@endsection