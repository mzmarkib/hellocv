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
	<link rel="stylesheet" href="css/updated.css">
	<title>HelloCV | The Best CV Creator In The Market</title>
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
				<div class="header-left">
					<h1>100% Free</h1>
					<h2>Impressive Resumes Easy<br>Online Builder!</h2>
					<button type="submit" class="getquote" onclick="location.href='create-cv.php';">Build My Resume</button>
				</div>
				<a href="#." class="get-job"><img src="img/model.png" class="img-responsive"/></a>
			</div>
		</header>
	</section>
	<div class="creation-process">
		<div class="container">
			<div class="row">
				<h3>Say Hello To This CV Creation Process</h3>
				<div class="col-md-4">
					<div class="sign-process">
						<div class="">
							<div class="nmbr">01</div>
							<h4>REGISTER</h4>
						 </div>
						<p>Proceed to account registration in less than 2 minutes by entering only some information.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sign-process">
						<div class="">
							<div class="nmbr">02</div>
							<h4>BUILD CV</h4>
						 </div>
						<p>Whether from your phone or computer. Follow our easy 5 step CV creation process.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sign-process">
						<div class="">
							<div class="nmbr">03</div>
							<h4>SHARE</h4>
						 </div>
						<p>You can save, print or share a web link leading directly to your CV for employers.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="new-job">
		<h2>We Have More Than 20 Templates<br>Available For You</h2>
		<p>Don't worry| you can change the design of the CV after completing it|</p>
		<div class="slides">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/start-bg.png" alt="Los " width="1100" height="500">
					</div>
					<div class="carousel-item">
						<img src="img/start-bg.png" alt="Chicago" width="1100" height="500">
					</div>
					<div class="carousel-item">
						<img src="img/start-bg.png" alt="New York" width="1100" height="500">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
		<button type="submit" class="getquote">SAY HELLO TO YOUR NEW JOB</button>
	</div>
	<div class="reasons">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
						<img src="img/reasons.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-6">
					<div class="first-wigdet">
						<h4>7 REASONS WHY HELLOCV.CA </h4>
						<div class="chckbox">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
								<label class="custom-control-label" for="customCheck1">ITS! FREE</label>
							 </div>
							<p>It's free ! You will never pay! It's<br> just amazing!</p>
						</div>
						<div class="chckbox">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
								<label class="custom-control-label" for="customCheck2">NICEST WAY TO CREATE A CV</label>
							 </div>
							<p>Create a CV in the easiest way in the world by simply filling in the boxes to be completed and following the instructions on the site.</p>
						</div>
						<div class="chckbox">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
								<label class="custom-control-label" for="customCheck3">CHANGE YOUR CV SIMPLY BY<br>LOG IN TO YOUR ACCOUNT</label>
							 </div>
							<p>Your CV will be saved in your accessible account with your email address. Do you have a modification to make? Then you just have to connect and make the modification.</p>
						</div>
						<div class="chckbox">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
								<label class="custom-control-label" for="customCheck4">TIPS TO CREATE THE<br>COOLEST CV</label>
							 </div>
							<p>During the CV creation process, you will get advice, tips and examples to make a good impression.</p>
						</div>		
						<div class="chckbox">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck5" name="example1">
								<label class="custom-control-label" for="customCheck5">CREATE YOUR CV WITH<br>YOUR PHONE!?</label>
							 </div>
							<p>No need to use complicated software to create your CV. Now everything is done online from your phone or computer.</p>
						</div>
						<div class="chckbox">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck6" name="example1">
								<label class="custom-control-label" for="customCheck6">TELL THEM IF YOU ARE <br>AVALAIBLE OR NOT</label>
							 </div>
							<p>Our system allows real-time to let hirers know or get your search status from the following choices: Search, Pending or Hired.</p>
						</div>	
						<div class="chckbox1">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck7" name="example1">
								<label class="custom-control-label" for="customCheck7">SHARE YOUR CV LIKE YOUR FACEBOOK PROFIL</label>
							 </div>
							<p>Once your CV is finished, you can press publish to get a web link (URL) that you can leave to employers so that they can see your CV on the internet.</p>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<footer class="footer-black-non-transparent footer2">
		<div class="upper-footer">
			<div class="container">
				<div class="row">
					<label class="text-center">
					<h2>DO YOUR CV IN LESS THAN 10 MINUTES</h2>
					<p>10 minutes only ! Because you have a lot of better  things to do than create a CV ;)</p></label>
					<button type="submit" class="getquote">OK ! LETS START</button>
				</div>
			</div>
		</div>
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
