<?php include 'header.php';?>
		<!-- shop page area start -->
		<div class="contact-page-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
						<div class="shop-head furniture-head">
							<ul class="shop-head-menu ">
								<li><i class="fa fa-home"></i><a class="home" href="contact-us.html#"><span>Home</span></a></li>
								<li>Contact Us</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<!-- Map area -->
								<div class="map-area">
									<div id="googleMap" style="width:100%;height:410px;"></div>
								</div><!-- End Map area -->
							</div>
						</div>
						<div class="row">
							<!-- contact info -->
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="contact-info">
									<h3>Contact info</h3>
									<ul>
										<li>
											<i class="fa fa-map-marker"></i> <strong>Address</strong>
											1234 Pall Mall Street, London England
										</li>
										<li>
											<i class="fa fa-envelope"></i> <strong>Phone</strong>
											(800) 0123 4567 890
										</li>
										<li>
											<i class="fa fa-mobile"></i> <strong>Email</strong>
											<a href="contact-us.html#">admin@bootexperts.com</a>
										</li>
									</ul>
								</div>
							</div><!-- End contact info -->
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="contact-form">
									<h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
									<div class="row">
										<form method="post">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input name="contact_name" type="text" placeholder="Name (required)" required="" />
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input name="contact_email" type="email" placeholder="Email (required)" />
											</div>
											<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
												<input name="contact_subject" type="text" placeholder="Subject(required)" required="" />
											</div>
											<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
												<textarea name="contact_message" id="message" cols="30" rows="10" placeholder="Message(required)"></textarea>
												<input type="submit" name="contact_form" value="Submit Form" />
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>
		<!-- contact area end -->
			
		<?php include 'footer.php'; ?>

		<!-- Google Map js -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.81033, 90.41252)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/logo/map-marker.png',
				map: map
			  });

			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		