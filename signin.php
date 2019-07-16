<?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rememberme = $_POST['rememberme'];
        $login = new App;

        $newLogin = $login->login($email,$password);
        if ($newLogin === 'true') {
            $success = true;
        }else {
            $failed = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cryptocash is Professional Creative Template" />
<!-- SITE TITLE -->
<title>Cryptocash – ICO Cryptocurrency & ICO Landing Page HTML + Admin Dashboard Template</title>
<?php require('includes/css.php'); ?>
</head>

<body>
<?php require('includes/main-header.php'); ?>
<!-- START SECTION BANNER -->
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/home_banner_bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Login</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="index.php">Home</a> </li>
                        <li><span>Login</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION SIGN UP --> 
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="authorize_box">
                	<div class="title_default_dark title_border text-center">
                    	<h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Register</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Create your Free account</p>
                    </div>
                    <div class="field_form authorize_form">
                    	<form action="#" method="post">
                        	<div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            	<input type="email" class="form-control" required="" placeholder="Email" name="email">
                            </div>
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            	<input type="password" class="form-control" required="" placeholder="Password" name="password">
                            </div>
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.9s">
                            	<div class="checkbox_field d-inline">
                                    <input type="checkbox" name="rememberme" id="rememberme" value="rememberme">
                                    <label for="rememberme">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                            	<button class="btn btn-default btn-radius" type="submit" name="submit">Login <i class="fa fa-rocket"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="divider small_divider"></div>
                <div class="text-center">
                    <span class="animation" data-animation="fadeInUp" data-animation-delay="1s">Don't have an account? <a href="signup.php"> Signup</a></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SIGN UP --> 

<!-- START FOOTER SECTION -->
<footer>
	<div class="top_footer blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/footer_bg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12">
                	<div class="newsletter_form">
                        <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Newsletter</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">By subscribing to our mailing list you will always be update with the latest news from us.</p>
                        <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <input class="input-rounded" type="text" required placeholder="Enter Email Address"/>
                          <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit"> Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-8 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Quick Links</h4>
                    <ul class="footer_link half_link list_none">
                    	<li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#">Cryptocash ICO</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Team</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">How It Works</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Whitepaper</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#">Tokens</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#">FAQ</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Road map</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-4 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Social</h4>
                    <ul class="footer_social list_none">
                    	<li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#"><i class="ion-social-facebook"></i> Facebook</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#"><i class="ion-social-twitter"></i> Twitter</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#"><i class="ion-social-googleplus"></i> Google Plus</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#"><i class="ion-social-pinterest"></i> Pintrest</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#"><i class="ion-social-instagram-outline"></i> Instagram</a></li>
                    </ul>
                </div>
                
      		</div>
    	</div>
    </div>
    <div class="bottom_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright">Copyright &copy; 2018 All Rights Reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="list_none footer_menu">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</footer>
<!-- END FOOTER SECTION --> 


<a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="assets/js/jquery-1.12.4.min.js"></script> 
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="assets/js/parallax.js"></script> 	
<!-- countdown js  --> 
<script src="assets/js/jquery.countdown.min.js"></script> 
<!-- particles min js  --> 
<script src="assets/js/particles.min.js"></script> 
<!-- scripts js --> 
<script src="assets/js/jquery.dd.min.js"></script> 
<!-- jquery.counterup.min js --> 
<script src="assets/js/jquery.counterup.min.js"></script> 
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>
</body>

<!-- Mirrored from bestwebcreator.com/cryptocash/demo/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2019 19:27:54 GMT -->
</html>