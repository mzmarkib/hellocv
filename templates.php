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
					<h1>TEMPLATES</h1>
					<h2>CV & COVER LETTERS</h2>
					<p style="color:white;font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<br><br>
					<button class="btn round-btn">CV TEMPLATES</button>
					<button class="btn round-btn1">COVER LETTER TEMPLATES</button>
		<br><br>
				</div>
				
			</div>
		</header>
	</section>
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<h2><span style="">CV</span> TEMPLATES</h2><p style="font-size:20px;color:gray;">Check out our all cv templates</p>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
	<div class="col-lg-4"><img style="border-radius: 10px; max-width: 100%;" src="img/cv1.jpg" alt="">
	<h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Classic Version<span style="padding: 0 8px; margin-left: 8px; display: inline-block; font-size: 14px; line-height: 20px; background: #975d8f; color: #fff; border-radius: 4px;">New</span></h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv2.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Default Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv3.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Dark Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv4.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Classic Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv5.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">SimpleCard Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv6.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Default (Version 2)</h5> </a></div></div>
	</div>
	
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<h2><span style="">COVER LETTER</span> TEMPLATES</h2><p style="font-size:20px;color:gray;">Check out our all cover letter templates</p>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
	<div class="col-lg-4"><img style="border-radius: 10px; max-width: 100%;" src="img/cv1.jpg" alt="">
	<h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Classic Version<span style="padding: 0 8px; margin-left: 8px; display: inline-block; font-size: 14px; line-height: 20px; background: #975d8f; color: #fff; border-radius: 4px;">New</span></h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv2.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Default Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv3.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Dark Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv4.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Classic Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv5.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">SimpleCard Version</h5> </a></div>
	<div class="col-lg-4"> <img style="border-radius: 10px; max-width: 100%;" src="img/cv6.jpg" alt=""><h5 style="text-align: center;margin: 15px 0 55px 0;color: #333; font-size: 18px;">Default (Version 2)</h5> </a></div></div>
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
</div>
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