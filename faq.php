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
					<h2>Create a Knowledge Base with Ease</h2>
					<p class="writeen">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="input-group">
    <input type="text" class="form-control" placeholder="Search ">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  
				</div>
				
			</div>
		</header>
	</section>
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
	<div class="section-title text-center">
	<h2>HEADING</h2><p style="font-size:20px; color:gray;">random text random random random random random random.</p>
	</div>
	</div>
	</div>
	<div class="rowm">
	<div class="row1">
	
  <div class="col-sm-4">
  <div class="outera">
  <a> <p>FAQ</p> </a>

  </div>
  </div>
  <div class="col-sm-4"><div class="outera">
  <a> <p>FAQ</p> </a>

  </div></div>
  <div class="col-sm-4"><div class="outera">
  <a> <p>FAQ</p> </a>

  </div></div>
  
</div>
<div class="row1">
	
  <div class="col-sm-4">
  <div class="outera">
  <a> <p>FAQ</p> </a>

  </div>
  </div>
  <div class="col-sm-4"><div class="outera">
  <a> <p>FAQ</p> </a>

  </div></div>
  <div class="col-sm-4"><div class="outera">
  <a> <p>FAQ</p> </a>

  </div></div>
  
</div>
<div class="row1">
	
  <div class="col-sm-4">
  <div class="outera">
  <a> <p>FAQ</p> </a>
  </div>
  </div>
  <div class="col-sm-4"><div class="outera">
  <a> <p>FAQ</p> </a>
  </div></div>
  <div class="col-sm-4"><div class="outera">
  <a> <p>FAQ</p> </a>

  </div></div>
  
</div>
</div>
<div>
<hr class="offset1">
<div class="rowm">
<div class="row2">
<div class="col-sm-6">
<h3>Heading 1</h3>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
           <i class="fa fa-caret-right"></i>
		  Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
           <i class="fa fa-caret-right"></i>
		  Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		 <i class="fa fa-caret-right"></i>
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  
  </div>
</div>

</div>
<div class="col-sm-6">
<h3>Heading 2</h3>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
	  
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
			 <i class="fa fa-caret-right"></i>
		 Collapsible Group Item #4
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
		 <i class="fa fa-caret-right"></i>
          Collapsible Group Item #5
        </a>
      </h4>
    </div>
    <div id="collapsefive" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
	 
	  
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
		 <i class="fa fa-caret-right"></i>
          Collapsible Group Item #6
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  
  </div>
</div>

</div>
</div>
</div>

	
	<div class="row3" style="background-image: url(img/start-bg.png);">
            <div class="section-title text-center">
			<span style="color : #fff">
                <h2>Can't find what you're looking for?</h2>
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
						<li><a href="templates.php">Templates</a></li>
						<li><a href="get-a-job.php">Get a Job</a></li>
						<li><a href="faq.php">FAQ</a> </li>
						<li><a href="create-cv.php">Create CV</a> </li>
						
						<li class="nav-item"><a class="getfree_button" href="register.php">Register</a></li>
						<li class="nav-item"><a class="getfree_button" href="login.php">Sign in</a></li>
					</ul>
	</div>	
</body>

</html>