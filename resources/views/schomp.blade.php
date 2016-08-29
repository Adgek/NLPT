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
					<h1>Zach Schomphe</h1>
					<h3>Head Strength and Conditioning Coach, Cambridge</h3>
					<h5><a href="mailto:zach@mynlpt.com?Subject=Inquiry" target="_top">zach@mynlpt.com</a></h5>
				</div>
			</div>
			<div class="row bio">
				<div class="col-md-3">
					<img class="coaches-picture" src="/images/staff/Zach.jpg">
				</div>
				<div class="col-md-9">
					<p>Zach has been involved with NLPT since the beginning, starting out as an athlete in 2008. He joined NLPT as a strength and conditioning coach in 2014 and is primarily involved in coaching our athletes from a variety of sport backgrounds. Zach graduated with a diploma in Fitness and Health from Conestoga College in 2015.</p>
				</div>
			
			</div>
		</div>
	</div>
@include('partials/footer')
</div>
@endsection