@extends('layouts/layout')

@section('content')
	<div class ="nlptyouth-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row first-content">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-10 nlptyouth-text">
						<h1>NLPTyouth</h1>
						<div class="nlptyouth-blurb">
							<p>Athletes between the ages of 10 to 13 fall into our Youth Development Program category. While these young athletes still get treated the same as any other athlete at NLPT, we approach their programming with a slightly different philosophy than our older clientele.</p>

						</div>
						<div class="col-md-4 col-md-offset-1 text-center">
							<button type="button" class="btn btn-primary action-btn" v-on:click="showAction=true">How to get Started?</button>
							<Actioncall :show.sync="showAction" title="NLPTyouth"></Actioncall>
						</div>
						<div class="col-md-7 ">
							<img class="nlptyouth-picture" src="/images/youth.jpg">
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<div class="second-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="philosophy-title">Youth Training Philosophy</h1>
					</div>
				</div>
				<div class="philosophy-points">
					<div class="row first-row">
						<div class="col-md-4 philosophy-section gold-underline">
							<h3 class="text-center">Young athlete’s are not mini-adults</h3>
							<div class="philosophy-text">
								<p>
								We don’t believe that young athletes should “train like the pro’s.” Call us crazy, but we believe kids should train like kids. This means starting with the fundamentals, keeping the exercises interesting, and educating the athlete about their body, how it moves, and how to train.
								</p>
							</div>
						</div>
						<div class="col-md-4 philosophy-section gold-underline">
							<img class="nlptyouth-picture" src="/images/philosophy1.jpg">
						</div>
						<div class="col-md-4 philosophy-section gold-underline">
							<h3 class="text-center">Quality first</h3>
							<div class="philosophy-text">
								<p>
								This is not the age to be overly focused on immediate outcomes. It’s all about quality. We emphasize proper mechanics and technique above anything else at this age. Success in athletics, as in many things in life, comes by being consistent for a long period of time. These young athletes are at the beginning of their journey, and we believe it should start by learning to do the basics, and learning them well.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 philosophy-section gold-underline">
							<h3 class="text-center">Global approach</h3>
							<div class="philosophy-text">
								<p>Strength and speed are the common athletic traits most people think of when they imagine great athleticism. But there are other athletic qualities that must be developed at this very special age that many coaches neglect. For example: balance, rhythm, coordination, spatial awareness, and reactiveness are all important athletic qualities that should play a big role in the program of a young athlete.
								</p>
							</div>
						</div>
						<div class="col-md-4 philosophy-section gold-underline">
							<h3 class="text-center">Attentiveness</h3>
							<div class="philosophy-text">
								<p>Athletes that simply go through the motions are wasting their time. With our youth program, we emphasize drills and exercises that require their full attention in order to be performed correctly. The purpose behind this is to facilitate the motor learning process, which requires purposeful movement. Mindless reps are soon forgotten.
								</p>
							</div>
						</div>
						<div class="col-md-4 philosophy-section">
							<h3 class="text-center">Accountability</h3>
							<div class="philosophy-text">
								<p>We’ve discovered that when put in the right environment, many young athletes are capable of a lot more responsibility than they’re given credit for. We don’t hold anyone’s hand and we don’t babysit. While we try to keep a friendly atmosphere in the gym, we make it very clear to all athletes that they’re here to train. ALL athletes are expected to show up on time, begin their warm-up on their own, stay on task, be respectful, and put all equipment away.
								</p>
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
						<h1 class="title">FAQ about NLPTyouth</h1>
						<p>Over the years, we’ve received a lot of questions from parents and coaches about what exactly it is we plan to do with their son or daughter. Here are some of the more common ones.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="faq">
							<blockquote>"Are they going to be lifting weights?"</blockquote>
							<p>Parents that ask this question usually have an image in their mind of either a barbell on their child’s back or a set of heavy dumbbells in their hand. To this image, the answer is no. However, that’s not to say that we won’t apply load to the body. Application of load or stress is what tells the body to grow, so naturally we have to do something to create this response. We prefer to apply this load with the use of bodyweight exercises at this stage in their development. Although we will sometimes use light weights as a tool to help us safely achieve this goal.</p>
						</div>
					</div>
					<div class="col-md-5">
						<div class="faq">
							<blockquote>"I have a daughter, is there a girls program she can enroll in?"</blockquote>
							<p>No. We have a lot of female athletes at NLPT and everyone trains together.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-2">
						<div class="faq">
							<blockquote>"Do you do (insert sport of choice here) specific training?"</blockquote>
							<p>Not at this age. We don’t create specialized training programs for any particular sport at this stage in their development. That is something that comes much later. At this age, we feel that all athletes should be working on their overall athleticism and learning to perform the basics well. However, because most sports have more commonalities than differences, the chances are that their performance will improve as a result of the training. So in that sense, the answer is yes! Any form of training that improves performance is considered sport-specific. It just so happens that the same form of training can improve performance in a multitude of sports.</p>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-1">
						<div class=faq>
							<blockquote>"My kid needs to get faster."</blockquote>
							<p>Among other things. As described above, there are a lot of athletic qualities we’ll be working on with your son or daughter. Speed will come as a result of them getting stronger (they’ll be able to push harder into the ground), and improving their mechanics (they’ll be more efficient in their movement).</p>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="faq">
								<blockquote>"How often should my kid train?"</blockquote>
								<p>We have options for 2 or 3 times per week in our program. However, for newer trainees, we have found that great results can be achieved with as little as 2 sessions per week.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					
				</div>
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection