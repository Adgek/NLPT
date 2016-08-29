@extends('layouts/layout')

@section('content')
<div class ="contact_page">
	@include('partials/header')
	<div class="first-section">
		<div class="container">
			<div class="row contact-text">
				
				<div class="col-md-6 ">
					<h1>Contact Us</h1>
					<div class="contact-blurb">
						<div class="col-md-6">
							<h3>Cambridge</h3>
							<p><i class="fa fa-home" aria-hidden="true"></i>460 Thompson Dr, Unit 4 Cambridge, ON N1T 2K8</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@mynlpt.com?Subject=Inquiry" target="_top">info@mynlpt.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>Phone: 519-620-9898</p>
						</div>
						<div class="col-md-6">
							<h3>Stratford</h3>
							<p><i class="fa fa-home" aria-hidden="true"></i>Stratford Rotary Complex, 353 McCarthy Dr, Stratford, ON N5A 7S7</p>
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@mynlpt.com?Subject=Inquiry" target="_top">info@mynlpt.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>Phone: 519-591-1575</p>
						</div>
					</div>
					<h1>Connect With Us</h1>
					<div class="contact-blurb">
						<a href="https://www.facebook.com/nlpt1/"><img class="social-icons" src="/images/facebook.png"></a>
						<a href="https://twitter.com/NLPT1"><img class="social-icons" src="/images/twitter.png"></a>
						<a href="https://www.instagram.com/nlpt1/"><img class="social-icons" src="/images/instagram.png"></a>
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<div class="btn-group map-buttons" data-toggle="buttons">
					        <label class="btn btn-default active">
					            <input id="cambridge-btn" type="radio" name="year" value="Cambridge">Cambridge
					        </label>
					        <label class="btn btn-default">
					            <input id="stratford-btn" type="radio" name="year" value="Stratford">Stratford
					        </label>
					    </div>
					</div>
					<div id="googleMap" class="map"></div>
				</div>
				
				
			</div>
		</div>
	</div>
	
	@include('partials/footer')
</div>
@endsection

@section('script')
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDg3bD7eRw7cncTB-6Hyah82TOV0YaqCu4"></script>
<script type="text/javascript">
	$(window).ready(function() {

	    $('#stratford-btn').closest('label').click(function() { 
	    	showStratford();
	    });
	    $('#cambridge-btn').closest('label').click(function() { 
	    	showCambridge();
	    });
	});

	function showStratford() {
		var myLatLng = {lat: 43.3863338, lng: -80.9861819};
		var mapProp = {
			center:new google.maps.LatLng(myLatLng),
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'NLPT Stratford'
		});
	}

	function showCambridge() {
		var myLatLng = {lat: 43.411171, lng: -80.28648};
		var mapProp = {
			center:new google.maps.LatLng(myLatLng),
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'NLPT Cambridge'
		});
	}

	function initialize() {
		showCambridge();

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection
