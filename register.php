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
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Register | HelloCV</title>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="index.php">
							<img src="img/logo.png" alt="helo CV logo" style="width: auto;">
						</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 mx-auto">
						<?php
                            if(isset($_GET['error'])){
                                echo '<div class="alert alert-danger">Email is already exist.</div>';
							}
							session_start();
							if(isset($_SESSION['username'])){
                                header("location:index.php");
                            }
                        ?>
						<div class="wrap-login100 py-5 px-4">
							<form class="login100-form validate-form flex-sb flex-w" method="POST" action="server/login.php">
								<h2 class=" pb-4 text-center">Register Account</h2>
								<span class="txt1 pb-2">Email *</span>
								<div class="wrap-input100 validate-input mb-4">
									<input class="input100" type="email" name="email" required>
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 pb-2">Username *</span>
								<div class="wrap-input100 validate-input mb-4">
									<input class="input100" type="text" name="username" required>
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 pb-2">Phone</span>
								<div class="wrap-input100 validate-input mb-4">
									<input class="input100" type="number" name="phone">
									<span class="focus-input100"></span>
								</div>
								<span class="txt1 pb-2">Password *</span>
								<div class="wrap-input100 validate-input mb-4" data-validate="Password is required">
									<span class="btn-show-pass"><i class="fa fa-eye"></i></span>
									<input class="input100" type="password" name="pass" required minlength="6">
									<span class="focus-input100"></span>
								</div>
								<div class="flex-sb-m w-full pb-4">
									<div class="contact100-form-checkbox">
										<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" checked>
										<label class="label-checkbox100" for="ckb1">Remember me</label>
									</div>
								</div>
								<div class="container-login100-form-btn text-center">
									<button class="login100-form-btn mx-auto" type="submit" name="register">Register</button>
								</div>
								<p class="pt-3">Already have an account? <a href="login.php"><u>Login</u></a></p>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		   
		</div>
	 </div>
</body>

</html>

