@extends('layouts/layout')

@section('content')
	<div class ="nlptathlete-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row first-content">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-6 nlptathlete-text">
						<h1>NLPTathlete</h1>
						<div class="nlptathlete-blurb">
							<p>NLPTathlete is a fully-individualized training system designed to match the needs of both the athlete and the athlete’s sport. Each athlete begins with an assessment and movement screen in order to give coaches an idea exactly where the athlete stands and how to training process should begin.</p>
						</div>

<!-- 						<div class="text-center">
							<button href="#" type="button" class="btn btn-primary action-btn" v-on:click="showAction=true">Call to Action!</button>
							<Actioncall :show.sync="showAction" title="NLPTathlete"></Actioncall>
						</div> -->
					</div>
				
					<div class="col-md-4">
						<img class="nlptathlete-picture" src="/images/athlete.jpg">
					</div>
				</div>
			</div>
		</div>
		<div class="second-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="steps-title">So why is NLPT for you?</h1>
					</div>
				</div>
				<div class="step1 step">
					
					<div class="row">
						<div class="col-md-6 ">
							<h3 class="text-center">Programming</h3>
							<div class="program">
								<p>All programs are designed with considerations for the athlete's, age, specific training goals, injury history, physical capabilities and playing schedules. We believe in teaching the core fundamentals of training and building athletic skills in a systematic and age-appropriate way. Our programs are comprehensive and balanced, emphasizing movement skills, speed and power training, strength development, and energy system work all while making sure the athlete is training safely and responsibly.</p>
							</div>
						</div>
						<div class="col-md-5">
							<img class="nlptathlete-picture" src="/images/programming.jpg">
						</div>
					</div>
				</div>
				<div>
					<div class="row">
						<div class="step2 col-md-6 ">
							<h3 class="text-center" >Environment</h3>
							<div class="environment">
								<p>Many of our athletes and families have told us that our programming methodology goes much beyond a simple workout plan. As coaches, we see it as our responsibility not only write a good program, but create the right environment where that program's potential can be fulfilled. The training environment here is one of accountability, hard work, fun and getting results.
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="step3">
								<h3 class="text-center" >Coaching</h3>
								<div class="coaching">
									<p>NLPT boasts the most experienced and educated coaching staff in the region. All of our coaches have pursued either kinesiology, human kinetics, or fitness and health degrees at the post-secondary level and beyond. They are fully certified and have lengthy athletic credentials to their name. But beyond their expertise, our coaching staff invests an incredible amount of care and attention into everyone at the gym.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="third-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="title">Membership</h1>
					</div>
				</div>
				<div class="row details">
					<div class="col-md-4 quote">
						<h3 class="text-center" >Options</h3>
						<p>NLPTathlete runs as a monthly membership and the fee is based on how many weekly sessions you wish to attend. We currently offer memberships for 1, 2, and 3 weekly sessions. The beginning of each membership requires a 4-month commitment, after which it switches to month-to-month and can be cancelled or frozen at any time and at no cost.</p>
					</div>
					<div class="col-md-8">
						<table class="price-table table table-bordered table-striped table-hover">
						    <thead>
						      <tr>
						        <th>Option</th>
						        <th>Weekly Sessions</th>
						        <th>Monthly Cost</th>
						        <th>Estimated Cost/Session</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>Platinum</td>
						        <td>3 sessions per week</td>
						        <td>$219 + HST/month</td>
						        <td>$18.25</td>
						      </tr>
						      <tr>
						        <td>Gold</td>
						        <td>2 sessions per week</td>
						        <td>$159 + HST/month</td>
						        <td>$19.87</td>
						      </tr>
						      <tr>
						        <td>Silver</td>
						        <td>1 sessions per week</td>
						        <td>$89 + HST/month</td>
						        <td>$22.25</td>
						      </tr>
						    </tbody>
						  </table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<img class="nlptathlete-picture" src="/images/membership.jpg">
					</div>
				</div>
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection