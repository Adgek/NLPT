@extends('layouts/layout')

@section('content')
	<div class ="nlptrehab-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="title">Massage Therapy</h1>
						<p>Please call: (519) 620-9898 or email <a href="mailto:nlpt.massagetherapy@gmail.com?Subject=Inquiry" target="_top">nlpt.massagetherapy@gmail.com</a> to book your appointment.</p>
					</div>
				</div>


				<div class=" row massuese">
					<div class="col-md-3">
						<img class="nlptrehab-picture" src="/images/staff/Michelle.jpg">
					</div>
					<div class="col-md-9 bio">
						<h3 class="special-centering">Michelle Miguel</h3>
						<h5 class="special-centering">BSc.</h5>
						<h5 class="special-centering">RMT.</h5>
						<p>Michelle graduated from the University of Waterloo in 2008 with an Honors B.Sc. in Kinesiology. Michelle then attended the Canadian College of Massage and Hydrotherapy where she completed the Massage Therapy program on the Deans honors list. While at the CCMH campus she participated in many sport related outreaches such as the Run for the Cure as well as providing sport massage therapy for varsity athletes at the University of Waterloo. One of Michelle’s goals is to continue in the athletic massage therapy field in the hopes of taking part in the Olympics as part of the Massage Therapy Team.</p>
					</div>
				</div>
				<div class="row massage-info">
					<div class=col-md-5>
						<h3 class="text-center">Availability</h3>
						
						<p>Michelle will be available during the following hours:
							<ul>
								<li>Monday: 12-7pm</li>
								<li>Tuesday: 645am-3pm</li>
								<li>Wednesday: 1-8pm</li>
								<li>Thursday: 1030am-5pm</li>
							</ul>
						</p>
						

					</div>
					<div class="col-md-5 col-md-offset-2">
						<h3 class="text-center">Rates</h3>
						
						<p>All rates include HST:
							<ul>
								<li>30 minute session- $50</li>
								<li>60 minute session- $80</li>
								<li>90 minute session- $115</li>
							</ul>
						</p>
					</div>
				</div>
			
			</div>
		</div>
		@include('partials/footer')
	</div>
@endsection