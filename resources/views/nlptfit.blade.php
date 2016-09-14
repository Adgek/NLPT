@extends('layouts/layout')

@section('content')
	<div class ="nlptfit-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row first-content">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-6 nlptfit-text">
						<h1>NLPTfit</h1>
						<div class="nlptfit-blurb">
							<p>While we are mainly known for training athletes. Our approach to training “former athletes” remains the same: assess each individual, prescribe a safe and effective training program, deliver top-notch coaching, and get <b>RESULTS</b>.</p>

						</div>
				<!-- 		<div class="container">
							<div class="row">
								<div class="title-section"> -->
									<h1 class="steps-title">Program Features</h1>
									
									<h4 class="text-center">Programming and coaching</h4>
									<p>Although our NLPTfit program is constantly evolving, we believe that any good program should prioritize quality movement skills, functional strength, high-intensity interval conditioning as its bedrocks. We believe in the “magic” of consistent hard work at the basics, and take pride in offering expert coaching to our clients.</p>

									<h4 class="text-center">Individualization</h4>
									<p>We will NEVER ask clients to perform any exercise that they are not prepared for or that they lack the movement capacity to perform. We expect our coaches to constantly be making adaptations to our class programs based on the needs of each client in attendance.</p>

									<p>All modifications to the class template are monitored and recorded by our coaching staff so that each individual can still pursue his or her specific goals.</p>

									<h4 class="text-center">Results tracking</h4>

									<p>Results are what it’s all about and we offer consistent results testing to make sure your hard work is actually paying off.</p>

									<h4 class="text-center">Intro assessments</h4>

									<p>New clients will go through a formal assessment process to discuss their personal, athletic, and injury history, go through a movement assessment, and discuss their goals and expectations for themselves and of NLPT.</p>  

				<!-- 				</div>
							</div>
						</div> -->

						<div class="text-center">
							<button type="button" class="btn btn-primary action-btn" v-on:click="showAction=true">Contact us to get started!</button>
							<Actioncall :show.sync="showAction" title="NLPTfit"></Actioncall>
						</div>
					</div>
				
					<div class="col-md-4">
						<img class="nlptfit-picture" src="/images/fit.jpg">
					</div>
				</div>
				
			</div>
		</div>
		<div class="third-section">
			<div class="container">
				<h1 class="text-center">Classes offered</h1>

				<h4 class="text-center">STRONG</h4>

				<p>Will focus on general strength development through barbell, dumbbell, and bodyweight exercises. The goal with this class is to improve movement quality and your body’s capacity for force production and work. Results and progress on individual lifts will be monitored and tracked, and coaches are responsible for tailoring each workout to the individual based on their training history and movement limitations.</p>

				<h4 class="text-center">LEAN</h4>

				<p>Will focus on interval training and high intensity conditioning. The goal here is to stimulate fat-burning by revving up the metabolism. The structure of each class will change from class-to-class so that things never get stale or repetitive.</p>

				<h4 class="text-center">TOTAL</h4>

				<p>This class will involve a mix of both STRONG and LEAN, with about 20 minutes of strength work followed by 30-40 minutes of high-intensity conditioning.</p>

				<h4 class="text-center">WILDCARD WEDNESDAY</h4>

				<p>This class is designed for those that train 4-5x a week, but anyone can benefit by participating. The goal with this class is to work on movement skills, learn new exercises, improve mobility, and do some light aerobic conditioning. And if you feel like cranking it up a bit, one of our coaches will be there to assist you in setting up a workout that’s right for you.</p>

				<h4 class="text-center">HIIT @6</h4>

				<p>This is a quick, intense, 30-minute blast of HIIT (high-intensity interval training), which is one of the best bang-for-your-buck methods for getting fit and lean.</p>

				<h4 class="text-center">OPEN GYM</h4>

				<p>This is open time for clients to train as they wish or to do a class program for that day on their own. Coaches will be on site but not leading or directing workouts.</p>

				<h3 class="text-center">Class Schedule</h3>

				<table class="table table-bordered table-striped table-hover">
					  <tbody><tr>
					    <th></th>
					    <th>MONDAY</th>
					    <th>TUESDAY</th>
					    <th>WEDNESDAY</th>
					    <th>THURSDAY</th>
					    <th>FRIDAY</th>
					    <th>SATURDAY</th>
					    <th>SUNDAY</th>
					  </tr>
					  <tr>
					    <td>6-7am</td>
					    <td>STRONG</td>
					    <td>LEAN</td>
					    <td>WILDCARD WEDNESDAY</td>
					    <td>STRONG</td>
					    <td>LEAN</td>
					    <td></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>7-8am</td>
					    <td>LEAN</td>
					    <td>STRONG</td>
					    <td>WILDCARD WEDNESDAY</td>
					    <td>LEAN</td>
					    <td>STRONG</td>
					    <td></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>8-9am</td>
					    <td>SRONG</td>
					    <td>LEAN</td>
					    <td>WILDCARD WEDNESDAY</td>
					    <td>STRONG</td>
					    <td>LEAN</td>
					    <td>TOTAL</td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>9:30-10:30am</td>
					    <td>TOTAL</td>
					    <td></td>
					    <td>TOTAL</td>
					    <td></td>
					    <td>TOTAL</td>
					    <td></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>12-1pm</td>
					    <td>STRONG</td>
					    <td>LEAN</td>
					    <td>WILDCARD WEDNESDAY</td>
					    <td>STRONG</td>
					    <td>LEAN</td>
					    <td></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>5-6PM</td>
					    <td>OPEN GYM</td>
					    <td>OPEN GYM</td>
					    <td>OPEN GYM</td>
					    <td>OPEN GYM</td>
					    <td>OPEN GYM</td>
					    <td></td>
					    <td></td>
					  </tr>
					</tbody>
				</table>
			</div>
		</div>
				<!-- <div class="step1 step">
					
					<div class="row">
						<div class="col-md-6 ">
							<h3 class="text-center">Step #1: The Assessment</h3>
							<div class="purpose">
								<p>The purpose of the assessment is twofold:
									<ul>
										<li>To screen for health and injury risk (so we can program accordingly)</li>
										<li>To assess the information that matters to you so we can track whether or not your training is successful.</li>
									</ul>
								</p>
							</div>
							<div class="quote">
								<blockquote>"But coach, I have a bum shoulder!"</blockquote>
								<p>No problem. We can still train <b>AROUND</b> it and work <b>WITH</b> your medical professional so that your training program blends with and enhances your rehabilitation program.</p>
							</div>
						</div>
						<div class="col-md-5">
							<img class="nlptfit-picture" src="/images/assessment.jpg">
						</div>
					</div> -->
				<!-- </div> -->
<!-- 				<div>
					<div class="row">
						<div class="step2 col-md-6 ">
							<h3 class="text-center">Step #2: Program Design</h3>
							<div class="design">
								<p>Taking this information, we then go about designing your plan. For as long as you are a client at NLPT, you will be written a 4-week training program. Each time you complete one, you automatically get another.
								</p>
							</div>
							<div class="considerations">
								<p>Programs are written with the following considerations:
									<ul>
										<li><b>How often can you train per week?</b> </li>
										<li><b>Are there any movement limitations you have?</b> </li>
										<li><b>What’s your training-age?</b> </li>
										<li><b>What do you like to do?</b></li>
									</ul>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="step3">
								<h3 class="text-center">Step #3: Time to Train</h3>
								<div class="train">
									<p>All the prep work is done and it’s time to get started. No appointments necessary, just come visit us during one of our designated adult training times, grab your program and get to work. A qualified NLPT coach is always on site to coach you through the exercises and give you a kick in the butt (when needed)!
									</p>
								</div>
							</div>
							<div class="step4">
								<h3 class="text-center">Step #4: Re-assess and repeat</h3>
								<div class="re-assess">
									<p>Is this actually working? Are you feeling better? Are you losing weight or gaining muscle? The re-assessment is just as crucial as the initial assessment since it is our way of monitoring progress. Of course we want to give you a killer “workout”, but we also want to keep our eye on the bigger picture and make sure you are actually getting the results you signed up for. Re-assessments are done at our monthly Combine Day, which is held on the first Saturday of each month.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
<!-- 		<div class="third-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="title">Program Details</h1>
					</div>
				</div>
				<div class="row details">
					<div class="col-md-4 quote">
						<blockquote class="text-center">"How many times a week can I train?"</blockquote>
						<p>A membership to NLPTfit allows you to train an <b>UNLIMITED</b> number of times per week (at adult training times).</p><p> All members must follow a program designed by an NLPT coach for at least one session per week. A coach can also design a 2 or 3-day a week program (in 4-week increments) if requested.</p><p> After completing your program, you are free to use the gym any time you wish</p>
					</div>
					<div class="col-md-4">
						<img class="nlptfit-picture" src="/images/program-details.jpg">
					</div>
					<div class="col-md-4 referral">
						<h3 class="text-center">Referral Program</h3>
						<p>If you tell a friend about our adult program and they sign up for 6 months or more, you will receive a $40 credit towards any NLPT product or service.  There is no limit to the amount of people you can tell, this is just our way of saying <b>THANK YOU</b> for spreading the word.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 membership">
						<h3 class="text-center">Membership</h3>
						<p>Feel free to try us out for a few workouts at no cost.</p><p> If you would like to continue with NLPTfit, our monthly rate is $129 +HST.</p>
					</div>
				</div>
			</div>
		</div> -->
		<div class="second-section">
			<div class="container">
				
				<div class="title-section text-center">
					<h1 class="title text-center">Membership</h1>
				</div>
			
				
				<p>NLPTfit runs as a monthly membership, but there are no start-up costs or cancellation fees. New clients are welcome to come and try us out for 2 weeks at no cost. After that, we charge $129/month + HST for membership.</p>
					
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection