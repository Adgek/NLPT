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
					<h1>Meet The Team</h1>
					<div class="row staff photos">
						<div class="col-md-3">
							<div class=coach>
								<h3>Andrew Hopf</h3>
								<h5>President and CEO</h5>
								<a href="/about/coaches/1"><img class="coaches-picture" src="/images/staff/Hopf.jpg"></a>
							</div>
							<div class=coach>
								<h3>Heather Foell</h3>
								<h5>NLPTfit Head Coach</h5>
								<a href="/about/coaches/5"><img class="coaches-picture" src="/images/staff/Heather.jpg"></a>
							</div>
						</div>
						<div class="col-md-3">
							<h3>Eric Hagemann</h3>
							<h5>Director of Training</h5>
							<a href="/about/coaches/2"><img class="coaches-picture" src="/images/staff/Eric.jpg"></a>
						</div>
						<div class="col-md-3">
							<h3>Dylan Campion</h3>
							<h5>Head Strength Coach, Stratford</h5>
							<a href="/about/coaches/3"><img class="coaches-picture" src="/images/staff/Dylan.jpg"></a>
						</div>
						<div class="col-md-3">
							<h3>Zach Shomphe</h3>
							<h5>Head Strength Coach, Cambridge</h5>
							<a href="/about/coaches/4"><img class="coaches-picture" src="/images/staff/Zach.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials/footer')
</div>
@endsection