<?php
	session_start();
?>

<!DOCTYPE HTML>
<head>
	<title>Sign Up & Start Today!</title>
	<?php
	include 'includes/header.inc.php';
	?>
</head>

<body id="contactrep-content">


	<div>
		<?php
			include 'navigation/fullSidebar_home.php';
		?>

		<div class="row">
			<div class="col-xs-10 col-xs-push-2 col-sm-9 col-sm-push-2 col-lg-5 col-lg-push-2 col-md-6 col-md-push-2">
				<br><br>
				<h1>Getting Started</h1>
				<h3 style="color: #cc0000">Sign Up and Start Today!</h3>
				<p>Getting started is easy! Drop us an e-mail and let us know who you are: Your Organization name, where you’re located, contact name, number, email address and what you or your Organization would like to do.</p>
				<p>Achieving Success for your Goals is our Goal, 24/7/365 days a year! The FundraisingATM team will do whatever we can to help support you and your organization in accomplishing your mission.</p>
	      	</div>

	      	<div class="col-md-3 col-md-push-1 col-lg-4 col-lg-push-3 hidden-xs hidden-sm">
				<br><br><br><br>
		    	<img class="img-responsive" src="images/rep-pages/churchchoir.png" width="404" height="270" alt="Church Choir"/>
			</div> <!--end column2-->
	    </div><!-- end row -->
	</div><!-- end container -->

	<div class="container-fluid">
		<div class="row">
		    <div class="col-sm-11 col-sm-push-2 col-md-6 col-md-push-2 col-lg-5 col-lg-push-2">
		    	<div class="well well-md">
		        	<form class="form-horizontal" action="contactEmail.php" enctype="multipart/form-data">
		        		<fieldset>
		            		<legend class="text-center">Contact us</legend>
							<!-- Name input-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="name">Name</label>
								<div class="col-md-9">
									<input id="frname" name="name" type="text" placeholder="Organization or Contact Name" class="form-control">
								</div>
		            		</div>

							<!-- Email input-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">Your E-mail</label>
								<div class="col-md-9">
									<input id="loginemail" name="email" type="text" placeholder="primarycontact@email.com" class="form-control">
								</div>
							</div>

							<!-- Message body -->
							<div class="form-group">
								<label class="col-md-3 control-label" for="message">Your Message</label>
								<div class="col-md-9">
									<textarea class="form-control" id="comment" name="comment" placeholder="I love your program! How do I find a rep in my area? I am located in Chicago, IL." rows="5"></textarea>
								</div>
							</div>

							<!-- Form actions -->
							<div class="form-group">
								<div class="col-md-12 text-right">
									<button type="submit" id="mailbutton" class="btn btn-primary btn-lg">Send Email</button>
								</div>
							</div>
						</fieldset>
	          		</form>
	        	</div>
	     	</div>

			<div class="col-lg-4 col-lg-push-3 col-md-4 col-md-push-3 col-sm-10 col-sm-push-3 col-xs-10 col-xs-push-3" id="getting-start-imgs" style="">
				<br>
				<img id="bottom-img" class="img-responsive" src="images/rep-pages/dodgeball.png" width="198" height="166" alt="Stuents Playing Dodgeball"/>
				<img id="bottom-img" class="img-responsive" src="images/rep-pages/soccergirls.png" width="198" height="166" alt="High School Girls Soccer"><span class="caption"><br>FundraisingATM offers fundraising opportunities for schools, religious organizations, community organizations and more. </span></img>
		  	</div>
		</div> <!--end row -->
	</div><!--end contact form-->

	<div class="container-fluid">
		<div class="row">
			<h3 class="col-xs-10 col-xs-push-2 col-sm-10 col-sm-push-2 col-lg-10 col-lg-push-2 col-md-10 col-md-push-2" >Interested in Becoming a FundraisingATM Fundraising Representative?</h3>
	     	<p class="col-xs-10 col-xs-push-2 col-sm-10 col-sm-push-2 col-lg-10 col-lg-push-2 col-md-10 col-md-push-2" >If you would like to apply to become a FundraisingATM Fundraising Representative or would like to find out more, please <br>send us your resume and cover letter to: <a href="mailto:rephr@FundraisingATM.com%20subject:Rep%20Interest%20From%20Getting%20Started%20Page"
	        target="_blank">rephr@FundraisingATM.com</a></p>
		</div> <!--end row -->
	</div>  <!--end container -->

	<?php
		include 'footerold.php' ;
	?>

</body>
</html>

<?php
	ob_end_flush();
?>
