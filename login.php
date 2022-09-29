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
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xxs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs">
                            
                            <li class="active">
                                <a href="#mini-one" data-toggle="tab">Login</a>
                            </li>
                            
                            <li>
                                <a href="#mini-two" data-toggle="tab">Registration</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- End Nav Tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text">
                        
                        <div class="tab-pane fade in active" id="mini-one">
                            
                            <!-- Login Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
                                    <form  method="post" class="form contact-form" id="contact_form">
                                        <div class="clearfix">
                                            
                                            <!-- Username -->
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" class="input-md round form-control" placeholder="Username" pattern=".{3,100}" required>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}" required>
                                            </div>
                                                
                                        </div>
                                        
                                        <div class="clearfix">
                                            
                                            <div class="cf-left-col">
                                                
                                                <!-- Inform Tip -->                                        
                                                <div class="form-tip pt-20">
                                                   
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="cf-right-col">
                                                
                                                <!-- Send Button -->
                                                <div class="align-right pt-10">
                                                 <!-------   <button class="submit_btn btn btn-mod btn-medium btn-round" id="login-btn">Login</button>
                                                ----->
												<input type="submit" name='login' class="btn btn-mod btn-medium btn-round btn-full"/>
												</div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- End Login Form -->
                            
                        </div>
                        
                        <div class="tab-pane fade" id="mini-two">
                            
                            <!-- Registry Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
                                    <form class="form contact-form" id="contact_form"  method="post">
                                        <div class="clearfix">
                                            
                                            <!-- Email -->
                                            <div class="form-group">
                                                <input type="email" name="email" id="Email" class="input-md round form-control" placeholder="Email" pattern=".{3,100}" required>
                                            </div>
                                            
                                            <!-- Username -->
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" class="input-md round form-control" placeholder="Username" pattern=".{3,100}" title='Minimum 3 letters required in username' required>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" title='Minimum 5 letters required in password' pattern=".{5,100}" required>
                                            </div>
											
											<!-- Phone No.-->
                                            <div class="form-group">
                                                <input type="text" name="phone" id="Phone" class="input-md round form-control" placeholder="Contact" pattern="[0-9]{10}" title="Please Enter Valid Contact Number" required>
                                            </div>
											
											<div class="form-group">
											<select name="DEPARTMENT" id="DEPARTMENT" class="input-md form-control" required>
											<option value="">Select Department</option>
											<option value="CSE">CSE</option>
											<option value="Aerospace">Aerospace</option>
											<option value="ECE">ECE</option>
											<option value="EEE">EEE</option>
											<option value="MECH">MECH</option>
											<option value="CIVIL">CIVIL</option>										
											</select>
											</div>
											
										
											<div class="form-group">
											<select name="DESIGNATION" id="DESIGNATION"class="input-md form-control" required>
											<option value="">Select Designation</option>
											<option value="Faculty">Faculty</option>
											<option value="Student">Student</option>
											<option value="Staff">Staff</option>
											</select>
											</div>
                                                <br>

                                        </div>
                                        
                                        <!-- Send Button -->
                                        <div class="pt-10">
                                           <!---- <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Register</button>
                                       ---> 
									   <input type="submit" name='register' class="btn btn btn-mod btn-medium btn-round btn-full"/>
									   </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- End Registry Form -->
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
			<?php
			
			      if(isset($_POST['login']))
				  {
					
					  $username=$_POST['username'];
					  $password=$_POST['password'];
					  
					  $sel="select * from admin where username='$username' and password='$password'";
					  $rel=$con->query($sel);
					  
					  $sel1="select * from mmstores where username='$username' and password='$password' and status='Valid'";
					  $rel1=$con->query($sel1);
					  
					   if($row=mysqli_fetch_array($rel))				
		               {
			                    
					            $_SESSION['aid']=$row['username'];
					            $aid= $_SESSION['aid'];
				
					            echo "<script>window.location.href='additems.php'</script>";  
			           }
			           elseif($qq=mysqli_fetch_array($rel1))
			           {
				             	$_SESSION["login"] = $qq["uid"];
								$_SESSION["name"] = $qq["username"];
								$_SESSION["Bal"] = $qq["Bal"];
								echo "<script>window.location.href='main.php'</script>";  
	      	           }
					   else
					   {
						   echo "<script>alert('Invalid Username or Password');</script>";
					   }
				  }
			 
			 
			 
			  if(isset($_POST['register']))
				  {
					 
                   $var="select max(uid) as max from mmstores";
	               $res=$con->query($var);
                   $row = mysqli_fetch_assoc($res);
	               $uid = $row['max'] + 1;  				   
					 $email=$_POST['email']; 
					 $username=$_POST['username']; 
					 $password=$_POST['password'];
					 $contact=$_POST['phone'];
					 $dep=$_POST['DEPARTMENT'];
					 $des=$_POST['DESIGNATION'];
					 $otp=rand();
				$ins="insert into mmstores values('$uid','$username','$email','$password','$contact','$dep','$des','0','$otp','-')"; 
					  if(mysqli_query($con, $ins))
                        {
							 require 'PHPMailerAutoload.php';
                              require("class.phpmailer.php");
		                   $body="OTP:".$otp.",<br>Please Enter Above OTP for succesfull registration";
		  
		                          $mail = new PHPMailer(); 
						         $mail->IsSMTP(); // send via SMTP
						       //IsSMTP(); // send via SMTP
						
						$mail->SMTPOptions = array(
								'ssl' => array(
									'verify_peer' => false,
									'verify_peer_name' => false,
									'allow_self_signed' => true
								)
                         );
						$mail->SMTPAuth = true; // turn on SMTP authentication
										$mail->Host = "smtp.gmail.com"; 
										$mail->Port=587;
										//$mail->Host="localhost";
										$mail->Username = "gria2408@gmail.com"; // SMTP username
										$mail->Password = "gria2408"; // SMTP password
										$webmaster_email = "gria2408@gmail.com"; //Reply to this email ID
						$email=$email; // Recipients email ID
                         $name=$name; // Recipient's name
                         $mail->From = $webmaster_email;
						  $mail->FromName = "Canteen Management System";
						$mail->AddAddress($email,$name);
						$mail->AddReplyTo($webmaster_email,"Print Management System");
						$mail->WordWrap = 50; // set word wrap
						//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
						//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
						$mail->IsHTML(true); // send as HTML
						$mail->Subject = "Login Details";
						$mail->Body = $body ; //HTML Body
						$mail->AltBody = "Login Details"; //Text Body
							if(!$mail->Send())
							{
							 echo "Mailer Error: " . $mail->ErrorInfo;
							}
							else
							{
							 echo "<script>alert('Register succesfully..Email Sent to user');</script>";
							}
                            echo "<script>alert('OTP Sended on registered EmailId');</script>";
							echo "<script>window.location.href='otpconfirm.php?uid=$uid'</script>";  
                        }   
                        else
                        {
                            echo "<script>alert('Please Try again');</script>";
                        }
				  }
			?>
			
			
			
			
			
			
			
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
               
                    
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="#" target="_blank">&copy; TCETCanteen 2016</a>.
                        </div>
                        <!-- End Copyright -->
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
            
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
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
