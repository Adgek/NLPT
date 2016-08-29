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
					<h1>Heather Foell, BSc</h1>
					<h3>Adult Wellness Coordinator / NLPTfit Head Coach</h3>
				</div>
			</div>
			<div class="row bio">
				<div class="col-md-3">
					<img class="coaches-picture" src="/images/staff/Heather.jpg">
				</div>
				<div class="col-md-9">
					<p>Heather first joined the NLPT team in April of 2013, while finishing her diploma at Conestoga College in Fitness & Health Promotion. After finishing her internships coaching and teaching she decided to pursue more schooling within the health and wellness field. Heather attended the University of Guelph-Humber, where she obtained her Honours degree in, Bachelor of Applied Science in Kinesiology (2015).</p>
					<p>During Heather’s 4 years of schooling both at Conestoga College and Guelph-Humber; she volunteered in various heath and wellness fields. Everything from rehabilitation in sports clinics, teaching at high school and college level, as well as coaching on individual to team bases. Her drive and passion comes from being able to coach and mentor athletes and individuals, on ways to incorporate health and wellness on an everyday life perspective.</p>
					<p>Heather's resume includes the following:
						<ul>
							<li>Diploma in Fitness and Health Promotion  – Conestoga College (2013)
							</li>
							<li>Diploma in Fitness and Health Promotion  – Humber College (2015)
							</li>
							<li>Therapeutic Exercise of Musculoskeletal Disorders Certification –University of Guelph-Humber (2014)
							</li>
							<li>Bachelor of Applied Science, Honours Kinesiology – University of Guelph-Humber (2015)
							</li>
							<li>Fitness Instructor Specialist, Can-Fit-Pro (2013 -2015)
							</li>
							<li>Pursuing CSEP-CPT certification exam  (January 2016)
							</li>
							<li>Affiliate Member, Ontario Kinesiology Association (2015)
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