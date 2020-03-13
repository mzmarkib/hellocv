<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="js/jquery-version3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mmenu.all.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/pepper.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontawsome.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>HelloCV</title>
</head>
<body>
<div class="page">
	<section class="header">
		<header class="container">
			<div class="row">
				<div class="menu_mobile">
					<a href="#mobilemenu" class="fa fa-bars"></a>
				</div>
				<nav class="navbar navbar-expand-sm">
				  <!-- Brand/logo -->
					<a class="navbar-brand" href="index.php">
						<img src="img/logo.png"/>
					</a>
				  <!-- Links -->
				  <ul class="navbar-nav">
						<li class="nav-item"><a href="templates.php">Templates</a></li>
						<li class="nav-item"><a href="get-a-job.php">Get a Job</a></li>
						<li class="nav-item"><a href="faq.php">FAQ</a> </li>
						<li class="nav-item"><a href="create-cv.php">Create CV</a> </li>
						

						<?php
							session_start();
							if(isset($_SESSION['username'])){
								$username =  $_SESSION['username'];
								echo '<li class="nav-item">
										<div class="dropdown">
											<button class="btn dropdown-toggle text-light no-outline" type="button" id="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-user-circle-o" aria-hidden="true"></i> '.$username.'
											</button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="menu">
												<a class="dropdown-item text-dark" href="server/logout.php">Logout</a>
											</div>
										</div>
									</li>';
							}else{
									echo '<li class="nav-item"><a class="getfree_button" href="register.php">Register</a></li>
									<li class="nav-item"><a class="getfree_button" href="login.php">Login</a></li>';
								}
						

							
						?>



					</ul>
				</nav>
			</div>
			<div class="row">
				<div class="section-title text-center">
					<h2>The Easiest Way to Get Your New Job</h2>
					<p class="writeen">Find jobs, create trackable resumes and enrich your applications.</p>
					<div class="input-group1">
    <input type="text" class="form-control1" placeholder="Keywords ">
	<input type="text" class="form-control1" placeholder="Location ">
	<select class="form-control1"placeholder="Choose Category">
	<option>Choose Category</option>
	</select>
    
      <button class="sj" type="button">
	  Search Jobs
        
      </button>
    
  </div>
  
				</div>
				
			</div>
		</header>
	</section>
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<h2>Companies We've Helped</h2><p style="font-size:20px;color:gray;">Some of the companies we've helped recruit excellent applicants over the years.</p>
	</div>
	</div>
	</div>
	<div class="row1">
	
	<div class="companies">
	<a><img src="img/optimizely-logo-final.svg"></a>
	</div>
	<div class="companies">
	<a><img src="img/optimizely-logo-final.svg"></a>
	</div>
	<div class="companies">
	<a><img src="img/optimizely-logo-final.svg"></a>
	</div>
	<div class="companies">
	<a><img src="img/optimizely-logo-final.svg"></a>
	</div>
	<div class="companies">
	<a><img src="img/optimizely-logo-final.svg"></a>
	</div>
	
	
	</div>
	
	<div class="row5" style="background-image:url(img/hero-image-text-right-darker.jpg)">
	<div class="col-lg-6 offset-lg-6">
						<div class="callout-feature-content callout-feature-content--height-medium">
<h2 class="callout-feature-title">Make Recruiting Your Competitive Advantage</h2>
<p>Talent is a top priority for all startup founders and executives. Jobify offers a way to completely optimize your entire recruiting process. Find better candidates, conduct more focused interviews, and make data-driven hiring decisions.</p>
<p style="margin-top:40px;"><a href="https://jobify-demos.astoundify.com/classic/pricing/" class="button button--color-white button--size-medium">Get Started</a></p>
</div>
					</div>
	</div>
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<h2>Hundreds of Jobs From All Over the Globe</h2></div>
	</div>
	</div>
	
	<div class="row4">
	<div class="jobs">
	<div class="col-sm-6">
	<img class="jimg" src="img/company-logo-shopify-150x150.jpg" width="150px">
	<span class="company"><p>Art Director</p>Shopify</span>
	</div>
  <div class="col-sm-3">
  
  <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Kananas City,Missouri</span>
  </div>
  <div class="col-sm-3">
  <p class="ft">Full Time</p>
  </div>	
	</div>
	<div class="jobs">
	<div class="col-sm-6">
	<img class="jimg" src="img/company-logo-shopify-150x150.jpg" width="150px">
	<span class="company"><p>Art Director</p>Shopify</span>
	</div>
  <div class="col-sm-3">
  
  <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Kananas City,Missouri</span>
  </div>
  <div class="col-sm-3">
  <p class="pt">Part Time</p>
  </div>	
	</div>
	<div class="jobs">
	<div class="col-sm-6">
	<img class="jimg" src="img/company-logo-shopify-150x150.jpg" width="150px">
	<span class="company"><p>Art Director</p>Shopify</span>
	</div>
  <div class="col-sm-3">
  
  <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Kananas City,Missouri</span>
  </div>
  <div class="col-sm-3">
  <p class="fl">Freelance</p>
  </div>	
	</div>
	</div>
	
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<a href="#" class="loadmore">Load More Listings</a>
	</div>
	</div>
	</div>
	<hr class="offset1">
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<h3>Jobify Site Stats</h3>
	<p>Here we list our site stats and how many people we’ve helped find a job and companies have found recruits. It's a pretty awesome stats area!</p>
	</div>
	</div>
	</div>
	
	<div class="rowm">
	<div class="row1">
	
  <div class="col-sm-3">
  <div class="outeraa">
	<span class="oaa"> <h3>21</h3> Jobs Posted </span>

  </div>
  </div>
  <div class="col-sm-3"><div class="outeraa">
  <span class="oaa"> <h3>0</h3> Jobs Filled </span>

  </div></div>
  <div class="col-sm-3"><div class="outeraa">
 <span class="oaa"> <h3>21</h3> Companies </span>

  </div></div>
  <div class="col-sm-3"><div class="outeraa">
  <span class="oaa"> <h3>1056</h3> Members </span>

  </div></div>
  
</div>
</div>

	
	<div class="row3" style="    background-color: #3175da;;">
            <div class="section-title text-center">
			<span style="color : #fff">
                <h2>Got a question?</h2>
                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </span>
				<p class="uk-margin-medium-top">
                    <button class="btn round-btn">Contact Support</button>
                </p>
            </div>
        </div>
	
	
	
	<!-- footer -->
	<footer class="footer-black-non-transparent footer2">
		<section id="" class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="first-wigdet">
							<a href="#" class="logo-branding">    
								<img src="img/logo.png" height="36" class="img-responsive" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-md-8 second-footer-right">
						<div class="col-md-4">
							<h6>Menu</h6>
							<ul class="">
								<li class=""><a href="#">Resume Templates</a></li> 								
								<li class=""><a href="#">CV Templates</a></li> 															
								<li class=""><a href="#">Cover Letters</a></li> 								
								<li class=""><a href="#">Career Blog</a></li> 								
								<li class=""><a href="#">Pricing</a></li> 								
							</ul>
						</div>
						<div class="col-md-4">
							<h6>Learn More</h6>
							<ul class="">
								<li class=""><a href="#">Career Blog</a></li> 									
								<li class=""><a href="#">How to write a resume</a></li> 									
								<li class=""><a href="#">How to write a Cover Letter</a></li> 									
								<li class=""><a href="#">Resume Examples</a></li> 									
								<li class=""><a href="#">Cover Letter Examples</a></li> 									
							</ul>
						</div>
						<div class="col-md-4">
							<h6>Follow Us</h6>
							<div class="social-buttons-wigdet">
								<ul>
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="https://dribbble.com/"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="https://linkedin.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p class="copy-write cp">@ 2020 | All Rights Reserved</p>
		</section>
	</footer>

	<div id="mobilemenu">
		<ul>
						<li><a href="templates.html">Templates</a></li>
						<li><a href="get-a-job.html">Get a Job</a></li>
						<li><a href="faq.html">FAQ</a> </li>
						<li><a href="create-cv.html">Create CV</a> </li>
						
						<li class="nav-item"><a class="getfree_button" href="register.php">Register</a></li>
						<li class="nav-item"><a class="getfree_button" href="login.php">Sign in</a></li>
					</ul>
	</div>	
</body>

</html>