<!-- //navigation -->
<!--//banner section starts here-->
    <!-- Slider  -->
    <div class="jarallax agile-about-bg"></div>
     <!-- /Slider  -->
<!--//banner-->
<!-- map -->
<div class="jarallax agileits_w3layouts-map agile-section">
	<div class="container">
		<h3 class="agileits-title">Locate us</h3>
    <div id="map"></div>
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3206999.9229094028!2d-94.68036438842559!3d38.28329754183497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0e6d54822e37d%3A0xb55bc4590466bd72!2sMissouri%2C+USA!5e0!3m2!1sen!2sin!4v1488516820426" style="border:0" allowfullscreen></iframe> -->
	</div>
</div>
<!-- //map -->
<!-- contact -->
<div class="jarallax agileits-contact agile-section" id="contact">
	<div class="container">
		<h3 class="agileits-title">contact</h3>
		<div class="w3agile-contact">
			<div class="col-md-5 col-sm-5 col-xs-6 w3_agileits-contact-left">
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-map-signs" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>address</h5>
						<p>159 Cessna Drive,Fort Wayne,Missouri.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>phone</h5>
						<p>260-414-2286</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11  w3_agile-contact-text">
						<h5>mail us</h5>
						<a href="mailto:info@example.com">info@example.com</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-6 contact-right-w3l">
				<form action="#" method="post">
					<input type="text" class="name" name="name" placeholder="First Name" required="">
					<input type="text" class="name" name="name" placeholder="Last Name" required="">
					<input type="email" class="name" name="name" placeholder="Email" required="">
					<input type="text" class="name" name="name" placeholder="Subject" required="">
					<textarea placeholder="Your Message" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact -->
<script type="text/javascript">
  function initMap() {
    var uluru = {lat: 10.8326657, lng: 106.6698982};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map,
      title:"Đây nè!",
      draggable: true,
      animation: google.maps.Animation.DROP,
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA_nqc30k_F5eIAQv5q11gv4mcCfYEn1c&callback=initMap">
</script>
