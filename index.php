<?
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>FundraisingATM</title>
    <!-- Bootstrap core CSS -->    
    <link href="nd/css/bootstrap.css" rel="stylesheet">       

    <!-- Custom styles for this template -->
	<link href="nd/css/doc.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="nd/css/jquery.fancybox.css" media="screen" /> 
	<link rel="stylesheet" type="text/css" href="nd/css/jPushMenu.css" /> 
	<link href="nd/css/menu-style.css" rel="stylesheet">
	
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'" crossorigin="anonymous"> <!-- asynch css load -->
  <noscript> <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></noscript> <!-- load styles for browsers with JS disabled -->
  <!--sidebar navigation dropdown plugin -->  
  <link rel="preload" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link  rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css"></noscript><!-- load styles for browsers with JS disabled -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="preload" href="css2/global_styles.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="css2/global_styles.css"></noscript><!-- load styles for browsers with JS disabled -->
  <!-- bootstrap file, avoid editing if possible, find the classes you need and then override them in global styles -->
  <link rel="preload" href="css2/bootstrap.css"  as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="css2/bootstrap.css"></noscript><!-- load styles for browsers with JS disabled -->
  
  <link rel="preload" href="css2/content_styles.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><linkrel="stylesheet" href="css2/content_styles.css"></noscript><!-- load styles for browsers with JS disabled -->
  <!-- top navigation styles -->
  <link rel="preload" href="css2/main_nav.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="css2/main_nav.css"></noscript><!-- load styles for browsers with JS disabled -->
  
	<!-- jQuery (required) 
	**ALL OTHER CDNS LOCATED IN FOOTER, AS FOOTERS ARE ALWAYS LOCATED BEFORE BODY CLOSING TAG - the ideal spot of JS/jQuery**
	*For some reason jasny needs jquery listed in header as well to allow for sidenav dropdowns to collapse correctly ? -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--lightbox code-->
    <link href="../lity/dist/lity.css" rel="stylesheet">
    <script src="../lity/vendor/jquery.js"></script>
    <script src="../lity/dist/lity.js"></script>
    
    <!--Search Bar JS-->
    <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<?php include 'includes/header.inc.php'; ?>
	<div class="wrapper" id="top">

<!-- <header class="header_sec">
	<div class="header_top">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a class="navbar-brand" href="index.php"><img src="newdeal/images/fundatm_logo.png" alt="" /></a>
					<div class="header_top_rt">
						<span>Achieving Great Goals!</span>
						<div class="login_btn hidden-xs">
							<a href="#" hidden-sm hidden-xs" role="button" data-toggle="modal" data-target="#myModal">
								<img src="newdeal/images/log_icon.png" alt="" />
								<span>Sign In</span>
							</a>
							
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	
	<div class="header_menu">
		<div class="login_btn visible-xs">
			<a href="#">
				<img src="newdeal/images/log_icon.png" alt="" />
				<span>Sign In</span>
			</a>
		</div>
		
		
	</div>
	
</header> -->



<!-- <section class="banner_main">
	<div class="banner_sec">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
		  <!-- Indicators -->
		  <!-- <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol> -->
		
		  <!-- Wrapper for slides -->
		  <!-- <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      	<div class="banner_box" style="background: url(newdeal/images/banner1.jpg) no-repeat right center;">
				 	<div class="banner_inner">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="banner_left">
										<h2>Fundraising<br>ATM</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="item">
		      <div class="banner_box" style="background: url(newdeal/images/banner1.jpg) no-repeat right center;">
				 	<div class="banner_inner">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="banner_left">
										<h2>Great<br> <span>Moods</span></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
		  </div> -->
		
		  <!-- Controls -->
		  <!-- <a class="left left_arw" href="#carousel-example-generic" role="button" data-slide="prev">
		    <img src="newdeal/images/prev.png" alt="" />
		  </a>
		  <a class="right rt_arw" href="#carousel-example-generic" role="button" data-slide="next">
		    <img src="newdeal/images/next.png" alt="" />
		  </a> -->
		<!-- </div>
	</div>
</section> -->


<!-- <section class="bredcam_main">
	<div class="bredcam_left_bg"></div>
	<div class="bredcam_sec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="bredcam_left">
						<ul>
							<li><a href="#">You are here </a></li>
							<li class="select">Home</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->



<section class="learn_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="learn_box" id="open1">
					<div class="learn_box_top">
						<div class="media">
						  <div class="media-left">
						    <a href="gettingstarted_sendemail.php" class="none"><img class="media-object" src="newdeal/images/top_icon1.png" alt="" /></a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading"><a href="gettingstarted_sendemail.php" class="none">Start a Fundraiser!</a></h4>
						    <p>Contact a Rep and get started today!</p>
							<img class="img-responsive cardimage" src="images/Team-Pic.jpg">
						  </div>
						</div>
					</div>
					<div class="learn_box_mid" id="hide1">
						<div class="learn_box_mid_txt">
							<p>FundraisingATM is here to help you reach your fundraising goals! Let us set up your free 
							fundraiser and personalized websites for each member. </p>
							<p>Everyone is welcome to set up fundraisers for schools, faith-based groups, and various organizations. 
							Fundraising has never been this fun and convenient! FundraisingATM is excited to help you reach your goals and 
							dreams! Success is just a click away!</p>
						</div>	
						<a href="gettingstarted_sendemail.php" class="none">Learn More!</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="learn_box" id="open2">
					<div class="learn_box_top">
						<div class="media">
						  <div class="media-left">
						    <a href="search.php" class="none"><img class="media-object" src="newdeal/images/top_icon2.png" alt="" /></a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading"><a href="search.php" class="none">Support a Fundraiser!</a></h4>
						    <p>Find a Fundraiser to Support!</p>
							<img class="img-responsive cardimage" src="images/Fundraiser-HP.jpg">
						  </div>
						</div>
					</div>
					<div class="learn_box_mid" id="hide2">
						<div class="learn_box_mid_txt">
							<p>Show your support by shopping at the FundraisingATM Mall which contains over 100 different stores with a variety 
							of over 20,000 different products. This means that there is something for everyone! </p>
							<p>There are even name-brand products, in-style and seasonal goods, and new items being added regularly. A total 
							of 35% of each purchase you make goes directly to the fundraiser you are supporting!</p>
						</div>	
						<a href="search.php">Support a Fundraiser</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





<section class="about_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="about_top">
					<h3><span>About Fundraising ATM</span></h3>
				</div>
				<div class="about_mid">
					<div class="about_mid_top">
						<ul>
							<li id="tab1"><a href="#url" class="selected">Fundraising ATM Fundraiser</a></li>
							<li id="tab2"><a href="#url">Strengths of Fundraising ATM</a></li>
							<li id="tab3"><a href="#url">Fundraising ATM Mission</a></li>
							<li id="tab4"><a href="#url">Calculate Your Success!</a></li>
							<li id="tab5"><a href="#url">Steps to Success!</a></li>
						</ul>
					</div>
					<div class="about_mid_inner">
						<div class="about_mid_inner_box" id="div1">
							<p>Do you have a quality Online Fundraising Program and appropriate Product for Online Fundraising Sales?</p>
							<p>Products and Gifts from the FundraisingATM Mall can be shipped Spring, Summer, Winter or Fall. FundraisingATM delivers it all.<br> 
							This one Program allows 3 to 5 significant fundraising income opportunities a year, with one simple setup.</p>
							<p>Cash is Deposited Weekly on every order directly into your Group's PayPal Account 24/7/365 days a year.</p>
							<p>Browse our Fundraising Examples from the navigation bar above and see the Future of Fundraising.</p>
							<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Read More</a>
						</div>
						
						<div class="about_mid_inner_box" id="div2" style="display: none;">
							<p>Learn about the strengths of the FundraisingATM Program! There are 10 good reasons to do fundraising online using the FundraisingATM Program!</p>
							<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Read More</a>
						</div>
						
						<div class="about_mid_inner_box" id="div3" style="display: none;">
							<p>Our mission statement is simple. Achieving success for your fundraising goals!</p>
							<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Read More</a>
						</div>
						
						<div class="about_mid_inner_box" id="div4" style="display: none;">
							<p>A simple to use calculator that will allow you to find out how much money you can raise using the FundraisingATM Program.</p>
							<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Read More</a>
						</div>
						
						<div class="about_mid_inner_box" id="div5" style="display: none;">
							<p>The FundraisingATM Program allows all of the Fundraising to take place online with our Simple 3 Step Setup.</p>
							<ul>
								<li>Step 1) Setup Website Example</li>
								<li>Step 2) Setup Members Example</li>
								<li>Step 3) Setup E-Mails Example</li>
							</ul>
							<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="add_banner">
	<div class="add_banner_bg" style="background: url(newdeal/images/add_banner1.jpg) no-repeat 0 0;">
		<img src="nd/images/add_banner2.jpg" alt="" class="visible-xs" />
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="media">
				  <div class="media-left">
				    <img class="media-object" src="nd/images/mission_pic.png" alt="" />
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">Fundraising ATM's Mission</h4>
				    <p>Achieving Success for Your Goals!</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="fund_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="about_top">
					<h3><span>Fundraising ATM Online Fundraising</span></h3>
				</div>
				<div class="fund_inner">
					<div class="row">
						<div class="col-sm-6">
							<div class="fund_box">
								<div class="media">
								  <div class="media-left">
								    <img class="media-object" src="newdeal/images/fund_pic1.png" alt="" />
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">New Trends<br> in Fundraising</h4>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="fund_box">
								<div class="media">
								  <div class="media-left">
								    <img class="media-object" src="newdeal/images/fund_pic2.png" alt="" />
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">Online Fundraising<br> with Fundraising ATM</h4>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>				
	</div>			
</section>




<section class="strength_sec" style="background: url(newdeal/images/strength_pic.jpg) no-repeat center center;">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="strength_left">
					<div class="media">
					  <div class="media-left">
					    <img class="media-object" src="newdeal/images/strangth_icon.png" alt="" />
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading">Strengths of the </h4>
					    <h5><span>Fundraising ATM</span> Program</h5>
					    <p>10 Good Reasons To Do Fundraising Online With FundraisingATM</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="strength_rt">
					<img src="newdeal/images/dresses_pic.png" alt="" />
				</div>
			</div>
		</div>
	</div>
</section>




<section class="step3_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="about_top">
					<h3><span>3 Steps to Fundraising $uccess!</span></h3>
					<p>The FundraisingATM Program allows all of the Fundraising to take place online with our Simple 3 Step Setup.</p>
				</div>
				<div class="step3_details">
					<div class="row">
						<div class="col-sm-4">
							<div class="step3_details_box">
								<a href="#">
									<span>1</span> <strong>Setup Website Example</strong>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="step3_details_box">
								<a href="#">
									<span>2</span> <strong>Setup Members Example</strong>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="step3_details_box">
								<a href="#">
									<span>3</span> <strong>Setup E-Mails Example</strong>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mall_sec">
					<div class="mall_left">
						<h3>The Fundraising ATM Mall</h3>
						<h4>Wonderful Fundraising Products and Gifts Year Round</h4>
						<p>FundraisingATM has a wonderful variety of Products and Gifts at our FundraisingATM Mall for every season, 
						reason and occasion. This makes for a perfect year-round Fundraiser because it offers the chance for people 
						to order products for themselves or as gifts for others.</p>
						<p>The FundraisingATM Mall has 20,000+ products that range from practical to silly, every day to elegant, delicious 
						to indulgent and many of the Products and Gifts will be used for years to come.</p>
						<a href="#">Read More</a>
					</div>
					<div class="mall_rt">
						<img src="newdeal/images/frame_pic.jpg" alt="" />
					</div>
				</div>
				
				
				<div class="directry_sec">
					<div class="directry_top">
						<h3>Fundraising ATM Mall Directory</h3>
					</div>
					<div class="directry_mid">
						<div class="directry_mid_box">
							<ul>
								<li>Multiple Fashion Boutiques</li>
								<li>Jewelry, Glitz & Glamour Accessories</li>
								<li>Activewear, Athleisure & Fitness Apparel</li>
								<li>Spring & Summer Fashions</li>
								<li>Trends Clothing for All Ages & Sizes</li>
								<li>Varsity Sports & Fitness Gear</li>
								<li>Luxury Salon & Spa Products</li>
								<li>Cute PJ's & Bathrobes</li>
								<li>Romantically Sweet Boutique's</li>
								<li>Purses, Pocketbooks & Pouches</li>
							</ul>
						</div>
						<div class="directry_mid_box">
							<ul>
								<li>Briefcases, Luggage & Tech Cases</li>
								<li>Inspirational & Motivational Treasures</li>
								<li>Family Fun & Games</li>
								<li>Creative Kids Toys</li>
								<li>Baby & Toddler Treasures</li>
								<li>Chocolates, Cookies & our Coffee Cafe</li>
								<li>Customer & Client Concierge Club Gifts</li>
								<li>Great Brand Names</li>
								<li>Gameday Collection of College & Pro Gear</li>
								<li>100+ Stores or over 20,000+ Products</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>



<section class="add_banner add_banner2">
	<div class="add_banner_bg" style="background: url(newdeal/images/add_banner3.png) no-repeat 0 0;">
		<img src="newdeal/images/add_banner4.jpg" alt="" class="visible-xs" />
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="media">
				  <div class="media-left">
				    <img class="media-object" src="newdeal/images/mission_pic2.png" alt="" />
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">We Deliver!</h4>
				    <p>The Ordering and Delivery Process</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="extra_feturd">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="row">
					<div class="extra_feturd_box">
						<div class="extra_feturd_icon">
							<a href="cash.php"><img src="newdeal/images/featrd_icon1.png" alt="" /></a>
						</div>
						<div class="extra_feturd_txt">
							<h4><span>Cash Weekly!</span></h4>
							<h3>24/7/365 Days<br> a Year! </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="row">
					<div class="extra_feturd_box">
						<div class="extra_feturd_icon">
							<a href="calculator.php"><img src="newdeal/images/featrd_icon2.png" alt="" /></a>
						</div>
						<div class="extra_feturd_txt">
							<h4><span>Calculate</span></h4>
							<h3>Your $uccess</h3>
							<p>Find Out How Much You Can Raise<br> 
							by Using Our Fundraising Calculator</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="row">
					<div class="extra_feturd_box">
						<div class="extra_feturd_icon">
							<a href="generatesunds.php"><img src="newdeal/images/featrd_icon3.png" alt="" /></a>
						</div>
						<div class="extra_feturd_txt">
							<h4><span>Generate </span></h4>
							<h3>Funds 24/7/365<br> Days a Year!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="row">
					<div class="extra_feturd_box">
						<div class="extra_feturd_icon">
							<a href="gettingstarted_sendemail.php"><img src="newdeal/images/featrd_icon4.png" alt="" /></a>
						</div>
						<div class="extra_feturd_txt">
							<h4><span>Getting Started</span></h4>
							<h3>Sign Up and<br> Start Today!</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="footer_sec">
	<div class="back_btn"><a href="#top" class="scroll"><img src="newdeal/images/back_top.png" alt="" /></a></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="footer_left">
					<a href="#"><img src="newdeal/images/fundatm_logo.png" alt="" /></a>
				</div>
				<div class="footer_rt">
					<ul class="ftr_list">
					
                        <li>
                          <a href="../index.php<?php echo $groupID;?>">Homepage</a>
                        </li>
                        <li>
                          <a href="fundgettingstarted11.php?group=<?php echo $groupID;?>"> Program Overview</a>
                        </li>
                        <li>
                          <a href="../gettingstarted_sendemail.php?group=<?php echo $groupID;?>">Getting Started</li>
                        <!-- <li class="btn btn-md btn-link"><a href="">Privacy &amp; Warranties</a></li> -->

					</ul>
					<span class="text-muted">Copyright &copy; <?php echo date('Y'); ?> FundraisingATM.com, LLC. All Rights Reserved</span>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="newdeal/js/bootstrap.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
 <script>
  $('.carousel').carousel({
   interval: 6000,
   pause: "false"
  });
 </script>
 
<!-- <script type="text/javascript">
$(document).ready(function(){
$('#open1').click(function(){
$('#hide1').slideToggle();
});

$('#open2').click(function(){
$('#hide2').slideToggle();
});
});
</script>  -->

<script type="text/javascript">
$(document).ready(function(){
$('#open1').hover(function(){
$('#hide1').slideToggle();
});

$('#open2').hover(function(){
$('#hide2').slideToggle();
});
});
</script> 



<script src="newdeal/js/tab.js"></script> 

<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 30) {
        $(".header_sec").addClass("fixed");
    } else {
        $(".header_sec").removeClass("fixed");
    }
});
</script> 


<script type="text/javascript" src="newdeal/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="newdeal/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="newdeal/js/jquery.fancybox-media.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			
			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});


		});
	</script>
<script src="newdeal/js/jPushMenu.js"></script>

<!--call jPushMenu, required-->
<script>
jQuery(document).ready(function($) {
	$('.toggle-menu').jPushMenu();
});
</script>


	<script>
	$(function() {
	  $('a.scroll[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--  compiled and minified JavaScript| Bootstrap 3.3.7 and jasny 3.1.3 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
					<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center"><img src="newdeal/images/logo.png" alt="" /</h4>
        </div>
        <div class="modal-body" align="center">
          <div id="loginSession">
    		<!-- form for login info and verifying session/user -->
          <?php
              if(!isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] == "FALSE") {
                  echo '<form id="loginform" action="../logInUser.php" method="POST">';
                  echo '<div class="modal-body">';
                  echo '<input class="form-control" id="loginemail" type="text" name="email" value="" placeholder="Email" required>';
                  echo '<input id="loginpassword" class="form-control" "loginpassword" type="password" name="password" value="" placeholder="Password" required>';
                //   echo '<div class="checkbox"><label><input type="checkbox"> Remember me</label></div>';
                  echo '</div>'; /*modal body end */
                  echo '<div class="modal-footer">';
                  echo '<div><button class="btn btn-success btn-lg btn-block" id="login_btn" name="submit" type="submit" value="login">Login</button></div>';
                   echo '<a href="recover.php"><input class="btn-link" name="passrec" type="button" value="Forgot Password" /></a></div>';
                  echo '</div>'; /* end modal footer */
                 /* echo '<a href="recover.php"><input class="user redbutton" name="passrec" type="button" value="Forgot Password" /></a></div>'; */
                  echo '</form>';
              }
               elseif ($_SESSION['LOGIN'] == "TRUE") {
                        echo '<div class="modal-body">';
                            echo '<div class="mallmenu">';
            	            echo '<h4><a href="index.php">FundraisingATM Homepage</a></h4>';
            	         	echo '<h4><a href="'.$_SESSION['home'].'"/>Account Home</a></h4>';
                	        echo '<h4><a href="../reset.php">Change My Password</a></h4>';
            	         	echo '</div>'; /*modal body end */
            	         	echo '<div class="modal-footer">';
			         	    include('menu/logout.inc.php');
			         	    echo '</div>'; /*modal body end */
                } 
           ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 
</body>
</html>
