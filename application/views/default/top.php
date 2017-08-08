<!-- navigation -->
<div class="navbar-wrapper">
    <div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-static-top cl-effect-5">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><h1>Scholar </h1></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li id="index"><a href="<?php echo base_url(); ?>home"><span data-hover="Home">Home</span></a></li>
						<li id="about"><a href="<?php echo base_url(); ?>home/about"><span data-hover="About">About</span></a><span class="line1">|</span></li>
						<li id="gallery"><a href="<?php echo base_url(); ?>home/gallery"><span data-hover="Gallery">Gallery</span></a><span class="line1">|</span></li>
						<li id="service"><a href="<?php echo base_url(); ?>home/service"><span data-hover="Services">Services</span></a><span class="line1">|</span></li>
						<!-- <li><a href="icons.html" data-toggle="dropdown"><span data-hover="ShortCodes">Short Codes</span><span class="caret"></span></a><span class="line1">|</span>
							<ul class="dropdown-menu">
								<li><a href="icons.html"><span data-hover="Icons">Icons</span></a></li>
								<li><a href="typography.html"><span data-hover="Typograpghy">Typograpghy</span></a></li>
							</ul>
						</li> -->
						<li><a href="<?php echo base_url(); ?>home/contact"><span data-hover="Contact">Contact</span></a><span class="line1">|</span></li>
					</ul>
				</div>
			</div>
        </nav>
	</div>
</div>

<script type="text/javascript">
  var active = '<?php echo $active; ?>';
  $(document).ready(function(){
   $("#"+active).addClass("active");
  });
</script>
