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
					<h1>Andrew Hopf</h1>
					<h3>President & CEO</h3>
					<h5><a href="mailto:andrew@mynlpt.com?Subject=Inquiry" target="_top">andrew@mynlpt.com</a></h5>
				</div>
			</div>
			<div class="row bio">
				<div class="col-md-3">
					<img class="coaches-picture" src="/images/staff/Hopf.jpg">
				</div>
				<div class="col-md-9">
					<p>Andrew attended the University of Waterloo and obtained both a Bachelor’s degree in Kinesiology (2007) and a Master’s of Science degree in Exercise Physiology (2009). During his Master’s program, Andrew founded Next Level Performance Training and quickly established himself as one of the region’s premier strength and conditioning coaches of young athletes. Since that time he has grown NLPT into the region’s top performance enhancement and athletic development companies, helping athletes of all ages, sports, and ability levels optimize their health and performance.

					</p>
					<p>Andrew is also a highly sought after speaker on the topics of nutrition and performance enhancement. He is a regularly travels all over Ontario speaking at major OHF and OHL events, spreading the message of proper nutrition and preparation habits.</p>

					<p>He is also currently the Head Strength and Conditioning Coach of the Owen Sound Attack (OHL), a position he has held for the past five seasons.</p>
					<p>Andrew’s resume also includes the following:
						<ul>
							<li>Head Strength and Conditioning Coach – Owen Sound Attack (OHL) – 2010-Present
							</li>
							<li>Member of the Ontario Hockey League Strength and Conditioning Association- 2012-Present
							</li>
							<li>Masters of Science Degree (University of Waterloo)-2009
							</li>
							<li>Precision Nutrition Certified Coach, Level 1
							</li>
							<li>Head Strength and Conditioning Coach (University of Waterloo Men’s Varsity Hockey)- 2006 – 2011
							</li>
							<li>Volunteer Strength Coach (Toronto Maple Leafs-NHL)- 2012-2014
							</li>
							<li>Honors Bachelor of Science KIN (University of Waterloo- 2007
							</li>
							<li>Elected to Executive Council for Sport Specific Training (National Strength and Conditioning Association)- 2008
							</li>
							<li>Certified Strength and Conditioning Specialist (National Strength and Conditioning Association)- 2006</li>							
						</ul>

					</p>
				</div>
			
			</div>
		</div>
	</div>
@include('partials/footer')
</div>
@endsection