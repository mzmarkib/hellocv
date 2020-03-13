<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="js/jquery-version3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mmenu.all.min.js"></script>
		<script src="js/pepper.js"></script>
		<script src="js/formProgressBar.jquery.js"></script>
		<script src="js/custom.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawsome.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/formProgressBar.css">
        <title>HelloCV | Create A Awesome CV</title>
        <style>
            .col-lg-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 100% !important;
            max-width: 100% !important;
			}
			
			/* custom */
			.tab{
				display: none;
			}
			.tab.active{
				display: block;
			}
        </style>

        <script type="text/javascript">
            $(function() {
              $(".scroll").on('click', function(e) {
				  e.preventDefault();
                $('html, body').animate({ scrollTop: $($.attr(this, 'href')).offset().top}, 800);
              });
            });
        </script>
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
								header("location:login.php");
								}
						

							
						?>



					</ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="section-title text-center">
                        <h2>CREATE YOUR AWESOME CV</h2>
                        <p class="writeen">Tell us a little more informations to make it!</p>
                        <a href="#form-section" class="scroll" " id="scroll"><i id="un" class="fa fa-angle-double-down hvr-hang down"  ></i> </a>
                    </div>
                </div>
            </header>
		</section>
		<section id="form-section" class="container">
			<form class="cvform" id="cv_form" action="server/save_cv.php" method="POST">
				<!-- tab 1 -->
				<div class="tab active">

					<div class="row" id="headerrow">
						<div class="col-lg-8 offset-lg-2">
							<div class="section-title text-center">
								<h2>Personal</h2>
								<p style="font-size:20px;color:gray;">Some of the companies we've helped recruit excellent applicants over the years.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-8">
							<div class="row mt-3 row-full-name">
								<div class="col-6 col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="fname">First Name *</label>
										<input type="text" tabindex="1" name="FNAM" placeholder="" maxlength="35" class="form-control required" id="fname" autocomplete="given-name" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="lname">Last Name *</label>
										<input type="text" tabindex="2" name="LNAM" placeholder="" maxlength="35" class="form-control required" id="lname" autocomplete="family-name" value="">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-6 col-address">
									<div class="form-group placeholder-wrap is-filled  is-valid"><label class="control-label " for="uaddress">Address</label>
										<input type="text" tabindex="3" name="ADDR" placeholder="" maxlength="150" class="form-control required" id="uaddress" autocomplete="shipping locality" value="">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group placeholder-wrap is-filled  is-valid"><label class="control-label " for="city">City</label>
										<input type="text" tabindex="4" name="CITY" placeholder="" maxlength="100" class="form-control required" id="city" autocomplete="shipping region" value="">
									</div>
								</div>
							</div>
							<div class="row row-phone-email">
								<div class="col-6">
									<div class="form-group placeholder-wrap is-valid"><label class="control-label " for="uphone">Phone</label>
										<input type="text" tabindex="5" id="uphone" name="PHONE" placeholder="" maxlength="14" class="form-control required" autocomplete="tel" value="">
									</div>
								</div>
								<div class="col-6 col-email">
									<div class="form-group placeholder-wrap is-filled  is-valid"><label class="control-label " for="uemail">Email Address</label>
										<input type="email" tabindex="6" name="EMAIL" placeholder="" maxlength="50" class="form-control required" id="uemail" autocomplete="email" value="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-address">
									<div class="form-group placeholder-wrap is-filled  is-valid"><label class="control-label " for="uabout_me">About me</label>
										<input type="text" tabindex="7" name="ABOUT_ME" placeholder="" maxlength="300" class="form-control mt-0 required" id="uabout_me" value="">
									</div>
								</div>
							</div>
							<div class="row row-phone-email">
								<div class="col-6">
									<div class="form-group placeholder-wrap  is-valid">
										<label class="control-label btn btn-primary" for="image_file" id="image_select">Upload Picture</label>
										<input type="file" id="image_file" tabindex="8" class="required" accept="image/*" />
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-12 text-right">
									<button class="btn round-btn next-btn" tabindex="9">NEXT</button>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- 1st tab end -->
				<!-- 2nd  tab  start -->
				<div class="tab">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="section-title text-center">
								<h2>Educational</h2>
								<p style="font-size:20px;color:gray;">Some of the companies we've helped recruit excellent applicants over the years.</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-8">
							<div class="row mt-3 row-full-name">
								<div class="col-6 col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="dig_title">Digree Title</label>
										<input type="text" tabindex="8" name="DIG_TITLE" placeholder="" maxlength="35" class="form-control required" id="dig_title" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="dig_ins">Institue Name</label>
										<input type="text" tabindex="9" name="DIG_INS" placeholder="" maxlength="35" class="form-control required" id="dig_ins" value="">
									</div>
								</div>
								<div class="col-12 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="dig_loc">Institue Details and Location</label>
										<input type="text" tabindex="10" name="DIG_LOC" placeholder="" maxlength="100" class="form-control required" id="dig_loc" value="">
									</div>
								</div>
							</div>
							<br>
							<div class="row mt-3 row-full-name">
								<div class="col-6 col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="dig_title_1">Digree Title</label>
										<input type="text" tabindex="11" name="DIG_TITLE_1" placeholder="" maxlength="35" class="form-control required" id="dig_title_1" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="dig_ins_1">Institue Name</label>
										<input type="text" tabindex="12" name="DIG_INS_1" placeholder="" maxlength="35" class="form-control required" id="dig_ins_1" value="">
									</div>
								</div>
								<div class="col-12 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="dig_loc_1">Institue Details and Location</label>
										<input type="text" tabindex="13" name="DIG_LOC_1" placeholder="" maxlength="100" class="form-control required" id="dig_loc_1" value="">
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-12 text-right">
									<button class="btn round-btn back-btn mr-2">BACK</button>
									<button class="btn round-btn next-btn" class="" tabindex="14">NEXT</button>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
				<!-- tab 2 end -->
				<!-- 3rd tab start -->

				<div class="tab">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="section-title text-center">
								<h2>WORK EXPERIENCE</h2>
								<p style="font-size:20px;color:gray;">Some of the companies we've helped recruit excellent applicants over the years.</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-8">
							<div class="row mt-3 row-full-name">
								<div class="col-6 col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="job_title">Job Title</label>
										<input type="text" tabindex="15" name="JOB_TITLE" placeholder="" maxlength="35" class="form-control required" id="job_title" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="job_ins">Company Name</label>
										<input type="text" tabindex="16" name="JOB_INS" placeholder="" maxlength="35" class="form-control required" id="job_ins" value="">
									</div>
								</div>
								<div class="col-12 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="job_loc">Company Details and Location</label>
										<input type="text" tabindex="17" name="JOB_LOC" placeholder="" maxlength="100" class="form-control required" id="job_loc" value="">
									</div>
								</div>
							</div>
							<br>
							<div class="row mt-3 row-full-name">
								<div class="col-6 col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="job_title_1">Job Title</label>
										<input type="text" tabindex="18" name="JOB_TITLE_1" placeholder="" maxlength="35" class="form-control required" id="job_title_1" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="job_ins_1">Company Name</label>
										<input type="text" tabindex="19" name="JOB_INS_1" placeholder="" maxlength="35" class="form-control required" id="job_ins_1" value="">
									</div>
								</div>
								<div class="col-12 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="job_loc_1">Company Details and Location</label>
										<input type="text" tabindex="20" name="JOB_LOC_1" placeholder="" maxlength="100" class="form-control required" id="job_loc_1" value="">
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-12 text-right ">
									<button class="btn round-btn back-btn mr-2">BACK</button>
									<button class="btn round-btn next-btn" class="" tabindex="21">NEXT</button>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>				
				<!-- 3rd tab end -->
				<!-- 4th tab start -->
				<div class="tab">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="section-title text-center">
								<h2>REFERENCES</h2>
								<p style="font-size:20px;color:gray;">Some of the companies we've helped recruit excellent applicants over the years.</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-8">
							<div class="row mt-3 row-full-name">
								<div class="col-6 col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="ref_name">Reference Name</label>
										<input type="text" tabindex="22" name="REF_NAME" placeholder="" maxlength="35" class="form-control required" id="ref_name" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_job">Job Title</label>
										<input type="text" tabindex="23" name="REF_JOB" placeholder="" maxlength="35" class="form-control required" id="ref_job" value="">
									</div>
								</div>
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_com">Company</label>
										<input type="text" tabindex="24" name="REF_COM" placeholder="" maxlength="35" class="form-control required" id="ref_com" value="">
									</div>
								</div>
								
								<div class="col-6 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_phone">Company Phone</label>
										<input type="text" tabindex="25" name="REF_PHONE" placeholder="" maxlength="35" class="form-control required" id="ref_phone" value="">
									</div>
								</div>
								<div class="col-12 col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_detail">Reference Details and Location</label>
										<input type="text" tabindex="26" name="REF_DETAIL" placeholder="" maxlength="100" class="form-control required" id="ref_detail" value="">
									</div>
								</div>
							</div>
							<br>
							<div class="row mt-3 row-full-name">
								<div class="col-6  col-first-name">
									<div class="form-group placeholder-wrap  bold-FNAM  is-valid">
										<label class="control-label " for="ref_name_1">Reference Name</label>
										<input type="text" tabindex="27" name="REF_NAME_1" placeholder="" maxlength="35" class="form-control required" id="ref_name_1" value="">
									</div>
								</div>
								<div class="col-6  col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_job_1">Job Title</label>
										<input type="text" tabindex="28" name="REF_JOB_1" placeholder="" maxlength="35" class="form-control required" id="ref_job_1" value="">
									</div>
								</div>
								<div class="col-6  col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_com_1">Company</label>
										<input type="text" tabindex="29" name="REF_COM_1" placeholder="" maxlength="35" class="form-control required" id="ref_com_1" value="">
									</div>
								</div>
								
								<div class="col-6  col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_phone_1">Company</label>
										<input type="text" tabindex="30" name="REF_PHONE_1" placeholder="" maxlength="35" class="form-control required" id="ref_phone_1" value="">
									</div>
								</div>
								<div class="col-12  col-last-name">
									<div class="form-group placeholder-wrap  bold-LNAM  is-valid">
										<label class="control-label " for="ref_detail_1">Reference Details and Location</label>
										<input type="text" tabindex="31" name="REF_DETAIL_1" placeholder="" maxlength="100" class="form-control required" id="ref_detail_1" value="">
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-12 text-right">
									<button class="btn round-btn back-btn mr-2">BACK</button>
									<button class="btn round-btn" tabindex="32" type="submit">Submit & Save</button>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
				<input type="hidden" id="hidden_html" name="cv_html">
			</form>
			<div id="side-frame">
				<?php
					
					if(isset($_SESSION['cv_link'])){
						$cvlink = $_SESSION['cv_link'];
						echo '<iframe src="'.$cvlink.'" frameborder="0" id="previewIframe" scrolling="no"></iframe>';
					}else{
						echo '<iframe src="cv-templates/resume1.html" frameborder="0" id="previewIframe" scrolling="no"></iframe>';
					}
				  ?>
				<!-- <iframe src="cv-templates/resume1.html" frameborder="0" id="previewIframe" scrolling="no"></iframe> -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cv-templates">
					Compare Another Template
				  </button><br>
				  <?php
					
					if(isset($_SESSION['cv_link'])){
						$cvlink = $_SESSION['cv_link'];
						echo '<a href="'.$cvlink.'" class="btn btn-primary text-light" target="_blank">Live Preview <i class="fa fa-external-link" aria-hidden="true"></i></a>';
					}
				  ?>
				
			</div>
		</section>



		<!-- Modal -->
<div class="modal fade" id="cv-templates" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">Some Creative CV Templates</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <div class="container">
			  <div class="row" id="cvs-temp">
				  <div class="col-sm-4 pb-3">
					  <a href="#." class="cv-id" data-id="1">
						<img src="img/cv_1.jpg" alt="">
					  </a>
				  </div>
				  <div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="2">
					  <img src="img/cv_2.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="3">
					  <img src="img/cv_3.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="4">
					  <img src="img/cv_4.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="5">
					  <img src="img/cv_5.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="6">
					  <img src="img/cv_6.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="7">
					  <img src="img/cv_7.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="8">
					  <img src="img/cv_8.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="9">
					  <img src="img/cv_9.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4 pb-3">
					<a href="#." class="cv-id" data-id="10">
					  <img src="img/cv_10.jpg" alt="">
					</a>
				</div>
			  </div>
		  </div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
		
		<script>
			var profile_img;
			

			$("#image_file").change(function(){

				var fd = new FormData();

                var files = $(this)[0].files[0];

                fd.append('file',files);

                $.ajax({
                    url:'server/upload.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if(response != 0){
							var frame = $("#previewIframe");
							frame.contents().find('#img').attr("src",response);
							frame.contents().find('#img1').attr("src",response);
                            profile_img = response;
							updateCVSide();
                        }else{
                            alert('File not uploaded');
                        }
                    }
                });
			})

			$(".required").keyup(function(e){
				updateCVSide();
			});

			$(".next-btn").click(function(e){
				e.preventDefault();
				$('.tab.active').removeClass("active").next().addClass("active")
			});
			
			$(".back-btn").click(function(e){
				e.preventDefault();
				$('.tab.active').removeClass("active").prev().addClass("active")
			});

			// progress bar
			var elem = $("#cv_form").formProgressBar({
				transitionTime: 500,
				percentCounting:true,
				height: 25,
				transitionType:'ease-in-out'

			});
			$(".cv-id").click(function(e){
				e.preventDefault();
				var id = $(this).data("id");
				$("#previewIframe").attr("src","cv-templates/resume"+id+".html" );
				setTimeout(function(){
					updateCVSide();
				},500)
			})



			function updateCVSide(){
				var frame = $("#previewIframe");
				var f_name = $("#fname").val();
				var l_name = $("#lname").val();
				var about_me = $("#uabout_me").val();
				var email = $("#uemail").val();
				var phone = $("#uphone").val();
				var address = $("#uaddress").val();
				// education variable
				var dig_title = $("#dig_title").val();
				var dig_ins = $("#dig_ins").val();
				var dig_loc = $("#dig_loc").val();

				var dig_title_1 = $("#dig_title_1").val();
				var dig_ins_1 = $("#dig_ins_1").val();
				var dig_loc_1 = $("#dig_loc_1").val();

				// job variable
				var job_title = $("#job_title").val();
				var job_ins = $("#job_ins").val();
				var job_loc = $("#job_loc").val();

				var job_title_1 = $("#job_title_1").val();
				var job_ins_1 = $("#job_ins_1").val();
				var job_loc_1 = $("#job_loc_1").val();

				// references 
				var ref_name = $("#ref_name").val();
				var ref_job = $("#ref_job").val();
				var ref_com = $("#ref_com").val();
				var ref_phone = $("#ref_phone").val();
				var ref_detail = $("#ref_detail").val();

				var ref_name_1 = $("#ref_name_1").val();
				var ref_job_1 = $("#ref_job_1").val();
				var ref_com_1 = $("#ref_com_1").val();
				var ref_phone_1 = $("#ref_phone_1").val();
				var ref_detail_1 = $("#ref_detail_1").val();

				// var img = $("#image_file").val();
				if(profile_img != ""){
					frame.contents().find('#img').attr("src",profile_img);
					frame.contents().find('#img1').attr("src",profile_img);
				}


				// personal info
				if(f_name != ''){
					frame.contents().find('#f_name').html(f_name);
					frame.contents().find('#f_name1').html(f_name);
				}
				if(l_name != ''){
					frame.contents().find('#l_name').html(l_name);
					frame.contents().find('#l_name1').html(l_name);
				}
				if(about_me != ''){
					frame.contents().find('#about_me').text(about_me);
					frame.contents().find('#about_me1').text(about_me);
				}
				if(email != ''){
					frame.contents().find('#email').html(email);
					frame.contents().find('#email1').html(email);
				}
				if(phone != ''){
					frame.contents().find('#phone').html(phone);
					frame.contents().find('#phone1').html(phone);
				}
				if(address != ''){
					frame.contents().find('#address').html(address);
					frame.contents().find('#address1').html(address);
				}
				// education
				if(dig_title != ''){
					frame.contents().find('#edu_title').html(dig_title);
					frame.contents().find('#edu_title1').html(dig_title);
				}
				if(dig_ins != ''){
					frame.contents().find('#edu_name').html(dig_ins);
					frame.contents().find('#edu_name1').html(dig_ins);
				}
				if(dig_loc != ''){
					frame.contents().find('#edu_detail').html(dig_loc);
					frame.contents().find('#edu_detail1').html(dig_loc);
				}

				if(dig_title_1 != ''){
					frame.contents().find('#edu_title_1').html(dig_title_1);
					frame.contents().find('#edu_title_11').html(dig_title_1);
				}
				if(dig_ins_1 != ''){
					frame.contents().find('#edu_name_1').html(dig_ins_1);
					frame.contents().find('#edu_name_11').html(dig_ins_1);
				}
				if(dig_loc_1 != ''){
					frame.contents().find('#edu_detail_1').html(dig_loc_1);
					frame.contents().find('#edu_detail_11').html(dig_loc_1);
				}

				// job decription
				if(job_title != ''){
					frame.contents().find('#job_title').html(job_title);
					frame.contents().find('#job_title1').html(job_title);
				}
				if(job_ins != ''){
					frame.contents().find('#job_name').html(job_ins);
					frame.contents().find('#job_name1').html(job_ins);
				}
				if(job_loc != ''){
					frame.contents().find('#job_detail').html(job_loc);
					frame.contents().find('#job_detail1').html(job_loc);
				}

				if(job_title_1 != ''){
					frame.contents().find('#job_title_1').html(job_title_1);
					frame.contents().find('#job_title_11').html(job_title_1);
				}
				if(job_ins_1 != ''){
					frame.contents().find('#job_name').html(job_ins);
					frame.contents().find('#job_name1').html(job_ins);
				}
				if(job_loc_1 != ''){
					frame.contents().find('#job_detail_1').html(job_loc_1);
					frame.contents().find('#job_detail_11').html(job_loc_1);
				}

				// refrences
				if(ref_name != ''){
					frame.contents().find('#ref_name').html(ref_name);
					frame.contents().find('#ref_name1').html(ref_name);
				}
				if(ref_job != ''){
					frame.contents().find('#ref_job').html(ref_name);
					frame.contents().find('#ref_job1').html(ref_name);
				}
				if(ref_phone != ''){
					frame.contents().find('#ref_phone').html(ref_phone);
					frame.contents().find('#ref_phone1').html(ref_phone);
				}
				if(ref_com != ''){
					frame.contents().find('#ref_com').html(ref_com);
					frame.contents().find('#ref_com1').html(ref_com);
				}
				if(ref_detail != ''){
					frame.contents().find('#ref_detail').html(ref_detail);
					frame.contents().find('#ref_detail1').html(ref_detail);
				}

				if(ref_name_1 != ''){
					frame.contents().find('#ref_name_1').html(ref_name_1);
					frame.contents().find('#ref_name_11').html(ref_name_1);
				}
				if(ref_job_1 != ''){
					frame.contents().find('#ref_job_1').html(ref_name_1);
					frame.contents().find('#ref_job_11').html(ref_name_1);
				}
				if(ref_phone_1 != ''){
					frame.contents().find('#ref_phone_1').html(ref_phone_1);
					frame.contents().find('#ref_phone_11').html(ref_phone_1);
				}
				if(ref_com_1 != ''){
					frame.contents().find('#ref_com_1').html(ref_com_1);
					frame.contents().find('#ref_com_11').html(ref_com_1);
				}
				if(ref_detail_1 != ''){
					frame.contents().find('#ref_detail_1').html(ref_detail_1);
					frame.contents().find('#ref_detail_11').html(ref_detail_1);
				}
				var html = frame.contents().find('html').html();
				// html.wrap();
				var finalHTML = '<html lang="en">'+html + '</html>';
				
				$("#hidden_html").val(finalHTML);
			}

		</script>

        
       
      
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