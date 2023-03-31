<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNo='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['wsmsuid']=$ret['ID'];
     header('location:index.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Influenza.co-Signin Page</title>

<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<?php include_once('includes/header.php');?>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/ws-rem.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Signin</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals of water</div>
						<div class="section_title"><h1>Sign In</h1></div>
					</div>
				</div>
			</div>
			<div class="row contact_row">

				<!-- Contact - About -->
				

				<!-- Contact - Image -->
			

			</div>
			<div class="row contact_form_row">
				<div class="col">
					<div class="contact_form_container">
						<form action="#" class="contact_form text-center" id="contact_form" method="post" name="signup">
							<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
							<div class="row">
								<div class="col-lg-12">
									<input type="text" class="form-control" placeholder="Registered Email or Contact Number" name="emailcont" id="email" required="true">
								</div>
					
							</div>
							<div class="row" style="margin-top:2%">
								<div class="col-lg-12">
									<input type="password" class="form-control" placeholder="Password" id="password" name="password" required="true">
								</div>
			<a href="forgot-password.php" style="margin-left:2%; margin-top:1%">Forgot Password?</a>
							</div>
							
							

							
							<button class="contact_button" type="submit" name="login">Submit</button>
							<div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account?  <a href="signup.php" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php include_once('includes/footer.php');?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>