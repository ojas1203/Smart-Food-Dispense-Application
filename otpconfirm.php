<?php
include('connection.php'); 
?>
<html>
<head>
        <title>Login/Register</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">        

        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            

                        
            <!-- Head Section -->
            <section class="small-section bg-dark-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">My Account</h1>
                            <div class="hs-line-4 font-alt">
                                Please Login to Continue
                            </div>
                        </div>
                        
                      
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
			<?php
$uid=$_GET['uid'];
$var="select * from mmstores where uid='$uid'";
$res=$con->query($var);
$row = mysqli_fetch_assoc($res);
$otp = $row['OTP'];  
?>

<div class="row">
 <div class="col-md-4 col-md-offset-4">
 <br><br>
 <form  method="post" class="form contact-form" id="contact_form">
   <div class="clearfix">
         <div class="form-group">
		<label style='color:red'>* Enter OTP sended on your registered EmailId</label>
        <input type="text" name="otp" id="otp" class="input-md round form-control" placeholder="Enter OTP" required>
        </div>
											
	<div class="pt-10">            
	<input type="submit" name='proceed' value='Proceed' class="btn btn btn-mod btn-medium btn-round btn-full"/>
	 </div>
	</div>
					<?php
                        if(isset($_POST['proceed']))
						{
							$o=$_POST['otp'];
							if($otp==$o)
							{
								$upd="update mmstores set status='Valid' where uid='$uid'";
								if(mysqli_query($con, $upd))
                                 {
									  echo "<script>alert('Registration Done Succesfully');</script>";
							          echo "<script>window.location.href='login.php'</script>";
								 }
								 else
								 {
									 echo "<script>alert('Please try again');</script>";
								 }
							}
							 else
								 {
									 echo "<script>alert('Please Enter right OTP');</script>";
								 }
						}
                    ?>					
		</form>
											
		</div>
		</div>
</div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
