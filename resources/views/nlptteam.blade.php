@extends('layouts/layout')

@section('content')
	<div class ="nlptteam-page">
		@include('partials/header')
		<div class="first-section">
			<div class="container">
				<div class="row first-content">
					<div class="col-md-2">
						@include('partials/program_sidebar')
					</div>
					<div class="col-md-6 nlptteam-text">
						<h1>NLPTteam</h1>
						<div class="nlptteam-blurb">
							<p>Since 2007, NLPT has been the leader in team strength and conditioning throughout the Waterloo region. Over the years we have worked with over 150 sports teams from Cambridge, Kitchener, Waterloo, Guelph, Markham, Halton, and Huron-Perth with sports ranging from hockey, ringette, football, basketball and baseball.</p>
							<p>Scroll down to learn more about our team training approach, philosophy, and services.</p>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-primary action-btn" v-on:click="showAction=true">Contact us to get started!</button>
							<Actioncall :show.sync="showAction" title="NLPTteam"></Actioncall>
						</div>
					</div>
					<div class="col-md-4">
						<img class="nlptteam-picture" src="/images/team-plans.jpg">
					</div>
					
				</div>
			</div>
		</div>
		<div class="second-section">
			<div class="container">
				<div class="row">
					<div class="title-section">
						<h1 class="pillars-title">4 Pillars of Team Training</h1>
						<p>Below is a summary on the four topics that are a part of every team training session at NLPT. The exercises and other program design specifics change depending on the team that we work with, but the general structure stays consistent.</p>
					</div>
				</div>
				<div class="pillars">
					<div class="row pillar1">
						<div class="col-md-7 pillar">
							<h3 class="text-center">Pillar #1: Movement Mechanics and Dynamic Warm Up</h3>
							<div class="pillar-text">
								<p>The first couple weeks of training will be primarily focused on teaching the fundamentals of a proper warm-up, proper movement mechanics, and proper training behaviour. Our philosophy is that since we’ll be asking them to move a lot, we had better spend time making sure they move well. Strength and conditioning programs that neglect this step often build strong, but dysfunctional athletes.
								</p>
								<p>
									 Features include:
									 <ul>
										<li>Soft tissue work and dynamic warm-up</li>
										<li>Running and movement mechanics</li>
										<li>Teaching basic strength exercises</li>
										<li>Core/pelvic stability</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="col-md-5 pillar">
							<img class="nlptteam-picture" src="/images/train.jpg">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 pillar pillar2">
							<h3 class="text-center">Pillar #2: Strength and Speed Development</h3>
							<div class="pillar-text">
								<p>At NLPT, we spend a considerable amount of time working on general strength development. The reason we do this is that by simply improving general strength, nearly all of the other athletic abilities improve as a result. Speed improves as the athlete is able to direct more force into the ice with each stride. We develop strength both through bodyweight (and when necessary, externally weighted) movements and always emphasize proper technique over more weight on the bar.
								</p>
								
							</div>
						</div>
						<div class="col-md-6 pillar pillar3">
							<h3 class="text-center">Pillar #3: Metabolic Conditioning</h3>
							<div class="pillar-text">
								<p>The third area of focus at NLPT is conditioning. Everybody knows what it’s like to either be a part of, or witness a team that burns out at the end of a game. We take pride in knowing that this isn’t a concern for the teams that we train. </p>
								<p>We also go to great lengths to make sure our conditioning sessions are extremely high-energy, interactive and competitive for the team. Besides just getting in good shape, it’s during our conditioning time that teams really learn to come together and push each other to get the work done. Each week presents a new challenge or a different conditioning circuit to ensure things never get stale or boring.
								</p>
							</div>
						</div>
					</div>

					<div class="row pillar4">
						<div class="col-md-5 pillar">
							<img class="nlptteam-picture" src="/images/competition.jpg">
						</div>
						<div class="col-md-7 pillar">
							<h3 class="text-center">Pillar #4: Competition</h3>
							<div class="pillar-text">
								<p>Athletes thrive under competition. We believe that the ability to work hard and push one’s self physically is a characteristic that must be learned like any other.</p>
								<p>During the season, we set the bar high for our athletes and present a variety of challenges that when met, develop a sense of accomplishment and self-confidence. At NLPT, pushing beyond perceived limitations is just a part of our day.
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
						<h1 class="title">Training plan options</h1>
						<p>So what do we have to offer your team? We offer several options depending on the level of service you want to provide your athletes.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 option">
						<h3 class="text-center">Flex Plan</h3>
						<p>With this option, teams choose when and how often they train. There is no minimum or maximum of now many sessions that can be booked--it all depends on your schedule. Historically, teams typically decide train with us once per week during their season. </p>
						<p>The cost is $140 + HST per session (1-hour).</p>
					</div>
					<div class="col-md-4 option">
						<h3 class="text-center">Elite Plan</h3>
						<p>Our Elite Season Plan is designed to cover your team from the fall all the way through playoffs. The program runs from the beginning of September all the way up until the beginning of April. No need to count sessions either! Your team is welcome to continue training with us right up until the end of playoffs.</p>
						<p> This option includes more than just a weekly workout. All players are entitled to a second training session per week during our NLPTathlete hours, where they are given an individualized training plan and are coached in a much lower coach to athlete ratio compared to their weekly team workout. Additionally, all players will receive our athlete nutrition handbook that covers everything from the building blocks of a sound diet, to nutritional strategies that young athletes will be able to implement whether at home, at school, or on the road. Teams that enroll in our Season Plan will also get to attend a nutrition seminar put on at NLPT at some point during the year.</p>
						<p>The cost for this plan is $399 per player per year.</p>
					</div>
					<div class="col-md-4 option">
						<h3 class="text-center">Elite Plus Plan</h3>
						<p>Our elite plus option is an opt-in program for players that are already training with their team, but want to take their off-ice commitment to the next level. In addition to all of the benefits in our Elite Season Plan, players that choose our Elite option are entitled to a 3rd weekly training session, nutrition coaching, a free item of NLPT apparel, and a 20% discount off all Biosteel products.</p>
						<p>
							 The estimated value of this plan is $920:
							 <ul>
								<li>$623 for a regular NLPTathlete membership at one session per week for 7 months</li>
								<li>$200 for our athlete nutrition coaching program</li>
								<li>$77 estimated savings from a monthly tub of Biosteel High Performance Sports Drink</li>
								<li>$30 savings of an NLPT shirt or hat</li>
							</ul>
							But we’re offering this plan for only $300 per player for the year, which breaks down to about $10 per week and represents a savings of 67%! 
						</p>
					</div>

				</div>
			</div>
		</div>
		
		@include('partials/footer')
	</div>
@endsection