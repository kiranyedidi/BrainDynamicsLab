<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Brain Dynamics Lab</title>
		<link rel="shortcut icon" href="images/garland_logo.gif" type="image/x-icon" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="script.js"></script>
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />		
	</head>
	<body id="home">
		<?php include_once 'includes/header.php';?>
		
		<!-- Home page starts here -->
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="page-header">
						<h2 style="text-align:center;color: #91b502">Welcome to the Brain Dynamics Laboratory</h2>
						<h3 style="text-align:center;color: #91b502">Louisiana Tech University</h3>
					</div>
					<p>The primary goal of brain dynamics research is to design and implement novel methodology and 
					advanced signal processing techniques for the monitoring, processing and modeling of electrical 
					and magnetic activity recorded from the brain for the purpose of timely warning and intervention 
					to avert catastrophic state transitions like epileptic seizures, status epilepticus, strokes, sleep 
					apneas and other medical emergencies. The secondary goal is to interface the developed products with 
					existing devices in biomedical industry for use in the monitoring and treatment of the respective 
					disorders, diseases and emergencies.</p>
					<!-- Tech logo will be visible only on large screens  
					<div class="col-lg-2 visible-lg">
						<img id="techlogo" alt="Tech Logo" src="images/techlogo.jpg">
					</div> -->
					<!-- slide show starts here -->
			
					<div id="labPicsSlider" class="carousel slide" data-ride="carousel">
						<!-- carousel-indicators (bullets at the bottom) -->
						<ol class="carousel-indicators">
							<li data-target="#labPicsSlider" data-slide-to="0" class="active"></li>
							<li data-target="#labPicsSlider" data-slide-to="1"></li>
							<li data-target="#labPicsSlider" data-slide-to="2"></li>
							<li data-target="#labPicsSlider" data-slide-to="3"></li>
							<li data-target="#labPicsSlider" data-slide-to="4"></li>
						</ol>
						<!-- carousel items (images) -->
						<div class="carousel-inner">
							<div class="item active">
								<img alt="Image0" src="images/slider/Image_slider0.jpg">
							</div>
							<div class="item">
								<img alt="Image1" src="images/slider/Image_slider1.jpg">
							</div>
							<div class="item">
								<img alt="Image2" src="images/slider/Image_slider2.jpg">
							</div>
							<div class="item">
								<img alt="Image3" src="images/slider/Image_slider3.jpg">
							</div>
							<div class="item">
								<img alt="Image4" src="images/slider/Image_slider4.jpg">
							</div>
						</div>
						<!-- carousel controls (Left and Right side panels) --> 
						<a class="carousel-control left" href="#labPicsSlider" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#labPicsSlider" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				
				<!-- Side panel for RSS feeds and professor profile -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;padding-top: 50px;">
						<img alt="" style="height: 200px;" src="images/leon_home_page.jpg" />
						<h3>Dr. LEONIDAS IASEMIDIS</h3>
						<h5>PROFESSOR AND THE RHODES EMINENT SCHOLOR CHAIR</h5>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<?php include_once 'includes/footer.php';?>
	</body>
</html>
