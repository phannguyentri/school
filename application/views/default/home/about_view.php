<!-- //navigation -->
<!--//banner section starts here-->
    <!-- Slider  -->
    <div class="jarallax agile-about-bg"></div>
     <!-- /Slider  -->
<!--//banner-->
<!-- about -->
<div class="jarallax w3ls-about agile-section" id="about">
	<div class="container">
		<h3 class="agileits-title head">About us</h3>
		<div class="w3-agileits-about-grids">
			<div class="col-md-6 col-sm-6 col-xs-6 agile-about-bottom-left">
				<h3 class="agileits-title">Head<span>ing</span></h3>
				<i class="fa fa-quote-right" aria-hidden="true"></i>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6  agile-about-bottom-right">
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget faucibus est.Suspendisse auctor urna blandit ultricies maximus. </h5>
				<p>Sed accumsan auctor lacus ac mattis. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend, nisl turpis suscipit augue, eget tincidunt velit nunc ut lectus.Morbi rutrum ut risus sed hendrerit. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend.</p>
				<div class="w3-button">
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- about bottom-->
<div class="jarallax w3ls-about agile-section">
	<div class="container">
		<div class="w3-agileits-about-grids">
			<div class="col-md-6 agile-about-left">
				<h2 class="agileits-title">welcome to Scholar </h2>
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget faucibus est.</h5>
				<p>Suspendisse auctor urna blandit ultricies maximus. Sed accumsan auctor lacus ac mattis. Mauris at nibh purus. Nullam vulputate, urna id facilisis eleifend, nisl turpis suscipit augue, eget tincidunt velit nunc ut lectus. <span>Phasellus viverra nec augue at iaculis. Nullam scelerisque tincidunt sapien vitae sodales. Sed tristique ut nulla a ultricies. Aliquam sit amet sodales elit, et pellentesque lorem. Praesent quis nibh id arcu porta lobortis.</span> Morbi rutrum ut risus sed hendrerit. Integer laoreet odio nec nisi varius, at scelerisque nisi rhoncus.</p>
			</div>
			<div class="col-md-6 agile-about-right"></div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about bottom -->
<!-- //about -->
<!-- admission form -->
<div class="jarallax w3ls-about-form agile-section">
	<div class="container">
		<h3 class="agileits-title">Admission form</h3>
		<div class="about-adm-form-w3l">
			<form action="#" method="post">
				<input type="text" class="name" name="name" placeholder="Name of the student" required="">
				<input type="text" class="name" name="name" placeholder="Surname" required="">
				<div class="section_class_agileits">
					<select required>
						<option value="">class Applying for</option>
						<option value="2">V</option>
						<option value="3">VI</option>
						<option value="4">VII</option>
						<option value="5">IX</option>
						<option value="5">X</option>
					</select>
				</div>
				<div class="section_class_agileits s2">
					<select required>
						<option value="">Languages spoken at home</option>
						<option value="2">English</option>
						<option value="3">Hindi</option>
						<option value="4">Bengali</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<input type="text" class="name" name="name" placeholder="Phone number" required="">
				<input placeholder="Date Of Birth" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
				<input type="text" class="name" name="name" placeholder="Father's Name" required="">
				<input type="text" class="name" name="name" placeholder="Mother's Name" required="">
				<textarea placeholder="Permanent Address" required=""></textarea>
				<input type="submit" value="SUBMIT">
			</form>
		</div>
	</div>
</div>
<!--start-date-piker-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/default/css/jquery-ui.css" />
		<script src="<?php echo base_url(); ?>public/default/js/jquery-ui.min.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->
<!-- //admission form -->
<!-- Tooltip -->
<div class="tooltip-content">
	<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title">Scholar </h2>
				</div>
				<div class="modal-body">
					<img src="<?php echo base_url(); ?>public/default/images/a2.jpg" class="img-responsive" alt="image">
					<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam egestas et mi.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Tooltip -->
