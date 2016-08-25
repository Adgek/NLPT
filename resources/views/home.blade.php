@extends('layouts/layout')

@section('content')
<div class ="home_page">
	@include('partials/header')
	<div class="first-section">
		<div class="big-photo">
		</div>
	</div>
	<div class="second-section">
		<div class="container-fluid">
			<div class="row mission-statement">
				<div class="col-md-6 col-md-offset-3">
					<h1>Our Purpose</h1>
					<blockquote>
						To inspire and empower people, teams, and organizations with the tools and confidence necessary to pursue their next level of performance, health, and wellness.
					</blockquote>
				</div>
			</div>
			<div class="row services">
				<div class="col-md-4 service-block">
					<h3><a href="/programs">Training Programs</a></h3>
					<p>For athletes in the Cambridge, Kitchener and Waterloo area, there is no better environment to train in than NLPT. Our intimate, and hard-working atmosphere creates an environment that simply can not be replicated in your typical “gym”.
						<p>
						</div>
						<div class="col-md-4 service-block">
							<h3><a href="/about/stories">Success Stories</a></h3>
							<p>We’re a gym that prides itself on getting results, whether it’s getting a young athlete to the next level or helping an adult fitness client to adopt a healthier lifestyle. Click here to read a little more about the people we’ve worked with.
							<p>
								</div>
								<div class="col-md-4 service-block">
									<h3><a href="nlptrehab">Rehab</a></h3>
									<p>Our rehab department is headed up by registered massage therapist Michelle Miguel. Michelle is an experienced clinician who has been a vital part of our success with our athletes and clients. Her massage therapy clinic, which is located at our Cambridge facility is open to non-NLPT clients and members of the general public.
										<p>
										</div>
									</div>
								</div>
							</div>
							<div class="third-section">
								<div class=container-fluid>
									<div class="row">
										<div class="col-md-6 col-md-offset-3 title-box">
											<h1>What's New?</h1>
										</div>
									</div>
									<div class="row new-stuff">
										<div class="col-md-5 blog">
											<h2 class="blogpost-title">Latest Blog Post</h2>
											<div class="jumbotron">
												<h3><a href="/blogs">Getting the heart of the kettlebell swing.</a></h3>
												<i class="fa fa-user" aria-hidden="true"><small>Dylan Campion</small></i>
												<p>We love the kettlebell at NLPT (from now on, referred to as a KB…less typing). What makes the KB great is that it works so well in so many different situations. From performing a rehabilitative exercise to a KB-only aerobic circuit, the KB is diverse<a href="/blogs">....</a>
												</p>
											</div>
										</div>
										<div class="col-md-6 col-md-offset-1">
											<h2 class="events-title">Upcoming Events</h2>
											<div class="events">
												<div class="event">
													<h3><i class="fa fa-arrow-right fa-3" aria-hidden="true"></i>Fall NLPT athlete session.</h3>
													<p><small>Sept 5, 2016</small></p>
													<p>Open to athletes 12 – 18, we have 1x, 2x, and 3x a week training plans available.</p>
												</div>
												<div class="event">
													<h3><i class="fa fa-arrow-right fa-3" aria-hidden="true"></i>NLPTteam season begins</h3>
													<p><small>Sept 5, 2016</small></p>
													<p>In-season training options available for all youth sports teams.</p>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							@include('partials/footer')
						</div>
						@endsection