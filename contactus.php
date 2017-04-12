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
	<body id="contactus">
		<?php include_once 'includes/header.php';?>
		
		<!-- Contact us page starts here -->
		<div class="container" style="margin-top: 20px;">
			<div class="row">
		      <div class="well well-sm">
		          <form class="form-horizontal" method="post">
			          <fieldset>
			            <legend class="text-center">Contact us</legend>
			    			<div class="col-lg-6 col-md-6">
					            <!-- Name input-->
					            <div class="form-group">
					              <label class="col-md-3 control-label" for="name">Name</label>
					              <div class="col-md-9">
					                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
					              </div>
					            </div>
					            
					            <!-- Email input-->
					            <div class="form-group">
					              <label class="col-md-3 control-label" for="email">E-mail</label>
					              <div class="col-md-9">
					                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
					              </div>
					            </div>
					            
					            <!-- Mobile input-->
					            <div class="form-group">
					              <label class="col-md-3 control-label" for="name">Mobile Number</label>
					              <div class="col-md-9">
					                <input id="mobile" name="mobile" type="text" placeholder="Your Mobile Number" class="form-control">
					              </div>
					            </div>
					            
					            <!-- Subject input-->
					            <div class="form-group">
					              <label class="col-md-3 control-label" for="name">Mobile Number</label>
					              <div class="col-md-9">
					                <input id="subject" name="subject" type="text" placeholder="Your Subject" class="form-control">
					              </div>
					            </div>	
			            	</div>
			            	<div class="col-lg-6 col-md-6">
			            		<!-- Message Body input-->
			            		<div class="form-group">
					              <label class="col-md-3 control-label" for="name">Message</label>
					              <div class="col-md-9">
					                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="9"></textarea>
					              </div>
					           </div>
			            	</div>
			            	<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
			            </fieldset>
			           </form>
			          </div>
			          <div style="text-align: center;">
			          		Dr. Leonidas Iasemidis, Principal Investigator<br>
							Biomedical Engineering<br>
							Center for Biomedical Engineering and Rehabilitation Science<br>
							College of Engineering and Science<br>
							BMEB 203<br>
							Louisiana Tech University<br>
							P.O. Box 10157<br>
							818 Nelson Avenue<br>
							Ruston, LA 71272<br>
							Office: (318) 257-5232<br>
							Fax :	(318) 257-4000<br>
							Email : leonidas[at]latech[dot]edu
			          </div>
			         </div>
			        </div>	
			
		<!-- Footer -->
		<?php include_once 'includes/footer.php';?>
	</body>
</html>