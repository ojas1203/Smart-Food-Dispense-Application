<?php
include('connection.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
		<title>Product page</title>
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
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/cart.css">
		<link rel="stylesheet" href="css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.btn-mod.btn-round {
    padding: 10px;
    font-size: 11px;
	}
	bootstrap-select {

  width:20px;
}
bootstrap-select {

  width:20px;
}
.bootstrap-select .btn {
  background-color: grey;
  border-style: solid;
  border-left-width: 3px;
  border-left-color: orange;
  border-top: none;
  border-bottom: none;
  border-right: none;
  color: white;
  font-weight: 100;
  padding: 12px 12px;
  font-size: 14px;
  margin-bottom: 10px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.bootstrap-select .dropdown-menu {
  margin: 15px 0 0;
}
</style>
 <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            <nav class="main-nav js-stick" style='background-color:black'>
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
					 <img src='images/shop/logo.png' width='90px'>
                 <?php
			      $uid=$_SESSION["login"];
                  $sel_ins = "select * from mmstores where uid='$uid'";
                  $rel_ins=$con->query($sel_ins);
                  $data_ins=mysqli_fetch_array($rel_ins);

                  $balance=$data_ins['Bal'];

                 ?>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                           
                            <!-- Cart -->
							<li>
                                <a href="index.html" style='color:white' class="active">Home</a>
                            </li>
							<li>
                                <a href="main.php" style='color:white' class="active">Menu</a>
                            </li>
							<li>
                                <a href="refill.php" style='color:white' class="active">Refill Card</a>
                            </li>
							<li>
                                <a href="orderhistory.php" style='color:white' class="active">Order History</a>
                            </li>
							<li>
                                <a href="Logout.php" style='color:white' class="active">Logout</a>
                            </li>
                            <li>
                                <a href="#" style='color:white' class="active">Balance RM <?php echo $balance;?></a>
                            </li>
                            <!-- End Cart -->
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-30" style="background: black;height:10px">
                <div class="relative container align-left" style='height:10px'>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Shop</h1>
                            <div class="hs-line-4 font-alt">
                                Choose the best products in our shop
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="index.html">Home</a>&nbsp;&nbsp;
								 <a href="Logout.php">Logout</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
			<br><br>