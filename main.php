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
				 if(!empty($_SESSION["login"]))
	           {
			      $uid=$_SESSION["login"];
                  $sel_ins = "select * from mmstores where uid='$uid'";
                  $rel_ins=$con->query($sel_ins);
                  $data_ins=mysqli_fetch_array($rel_ins);

                  $balance=$data_ins['Bal'];
			   }
                 ?>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
					<?php 
					if(!empty($_SESSION["login"]))
	           {
					?>
                     <div class="inner-nav desktop-nav" style='background-color:black'>
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
                                <a href="#" style='color:white' class="active">Balance RM.<?php echo $balance;?></a>
                            </li>
                            <!-- End Cart -->
                            
                        </ul>
                    </div>
					<?php
					}
					?>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-30" style="background: black;height:10px">
                <div class="relative container align-left;height:10px">
                    
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
            <!-- End Head Section -->
			
         <div class="col-sm-12">
		  <span class='pull-center pendiente' style='width:50%;margin-left:5%;border:0px solid black' >					
		<strong>Food Category:</strong>
			<select class="input-md form-control" id="mySelect" onChange="check(this);"  style='width:30%;margin-left:5%'>
					<option value='1' >Breakfast</option>
					<option value='2'>Soups</option>
					<option value='3'>Starter</option>
					<option value='4'>Main Course</option>
					<option value='5'>Desserts</option>
					<option value='6'>Specials</option>
					</select>
			</span>
			
		 <div class="col-sm-6" style="padding-top: 50px;" id='Breakfast'>
    <?php
	$query = "SELECT * FROM products where category='Breakfast' ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$pname=$row["p_name"];
			$oid=$row['id'];
			?>
            <div class="col-sm-4" style="padding-top: 50px; overflow:hidden">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px">
           
			 <h5 class="text-info"><a data-toggle='modal' href="#myModal_itemdetails<?php echo $oid;?>" ><?php echo $row["p_name"]; ?></a></h5>
            <h5 class="text-danger">RM <?php echo $row["price"]; ?></h5>
            <input type="number" min='1' name="quantity" class="form-control" value="1" required>
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag">
            </div>
            </form>
            </div>
			<div class="modal fade" id="myModal_itemdetails<?php echo $oid;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$oid'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			   <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
            <?php
		}
	}
	?>
	
	</div>
	
	
	<div class="col-sm-6" style="padding-top: 50px;display:none" id='Starter'>
    <?php
	$query = "SELECT * FROM products where category='Starter' ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$oid=$row['id'];
			?>
            <div class="col-sm-4" style="padding-top: 50px; overflow:hidden">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px">
            <h5 class="text-info"><a data-toggle='modal' href="#myModal_itemdetails<?php echo $oid;?>" ><?php echo $row["p_name"]; ?></a></h5>
            <h5 class="text-danger">RM <?php echo $row["price"]; ?></h5>
            <input type="number" min='1' name="quantity" class="form-control" value="1" required>
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag">
            </div>
            </form>
            </div>
			<div class="modal fade" id="myModal_itemdetails<?php echo $oid;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$oid'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			     <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
            <?php
		}
	}
	?>
	
	</div>
	
	<div class="col-sm-6" style="padding-top: 50px;display:none" id='Main Course'>
    <?php
	$query = "SELECT * FROM products where category='Main Course' ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$oid=$row['id'];
			?>
            <div class="col-sm-4" style="padding-top: 50px; overflow:hidden">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px">
            <h5 class="text-info"><a data-toggle='modal' href="#myModal_itemdetails<?php echo $oid;?>" ><?php echo $row["p_name"]; ?></a></h5>
            <h5 class="text-danger">RM <?php echo $row["price"]; ?></h5>
            <input type="number" min='1' name="quantity" class="form-control" value="1" required>
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag">
            </div>
            </form>
            </div>
			<div class="modal fade" id="myModal_itemdetails<?php echo $oid;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$oid'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			     <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
            <?php
		}
	}
	?>
	
	</div>
	
	<div class="col-sm-6" style="padding-top: 50px;display:none" id='Soups'>
    <?php
	$query = "SELECT * FROM products where category='Soups' ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			 $oid=$row['id'];
			?>
            <div class="col-sm-4" style="padding-top: 50px; overflow:hidden">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px">
            <h5 class="text-info"><a data-toggle='modal' href="#myModal_itemdetails<?php echo $oid;?>" ><?php echo $row["p_name"]; ?></a></h5>
            <h5 class="text-danger">RM <?php echo $row["price"]; ?></h5>
            <input type="number" min='1' name="quantity" class="form-control" value="1" required>
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag">
            </div>
            </form>
            </div>
			<div class="modal fade" id="myModal_itemdetails<?php echo $oid;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$oid'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			     <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
            <?php
		}
	}
	?>
	
	</div>
	<div class="col-sm-6" style="padding-top: 50px;display:none" id='Desserts'>
    <?php
	$query = "SELECT * FROM products where category='Desserts' ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$oid=$row['id'];
			?>
            <div class="col-sm-4" style="padding-top: 50px; overflow:hidden">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
             <h5 class="text-info"><a data-toggle='modal' href="#myModal_itemdetails<?php echo $oid;?>" ><?php echo $row["p_name"]; ?></a></h5>
            <h5 class="text-danger">RM <?php echo $row["price"]; ?></h5>
            <input type="number" min='1' name="quantity" class="form-control" value="1" required>
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag">
            </div>
            </form>
            </div>
			<div class="modal fade" id="myModal_itemdetails<?php echo $oid;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$oid'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			     <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
            <?php
		}
	}
	?>
	
	</div>
	<div class="col-sm-6" style="padding-top: 50px;display:none" id='Specials'>
    <?php
	$query = "SELECT * FROM products where category='Specials' ORDER BY id ASC";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$oid=$row['id'];
			?>
            <div class="col-sm-4" style="padding-top: 50px; overflow:hidden">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;">
			<h5 class="text-info"><a data-toggle='modal' href="#myModal_itemdetails<?php echo $oid;?>" ><?php echo $row["p_name"]; ?></a></h5>
         
            <h5 class="text-danger">RM <?php echo $row["price"]; ?></h5>
            <input type="number" min='1' name="quantity" class="form-control" value="1" required>
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag">
            </div>
            </form>
            </div>
			
		<div class="modal fade" id="myModal_itemdetails<?php echo $oid;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$oid'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			   <img src="images/shop/<?php echo $row["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>	
            <?php
		}
	}
	?>
	
	</div>
	
	
	<div class="col-sm-6 font-alt" style="padding-top: 50px;"> 
    <?php
	if(empty($_SESSION["cart"]))
	{
		echo "<center><img src='images/shop/cart.gif' width='70px;'><h3 style='color:maroon'>Your Cart is empty...Start Shopping now..!</h3></center>";
	}
	if(!empty($_SESSION["cart"]))
	{?> <div style="clear:both"></div>
    <h2 class="font-alt">My Shopping Bag</h2>
    <div class="table-responsive" style="padding-top:30px">
    <table class="table table-bordered" >
    <tr class="font-alt">
    <th width="30%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="20%">Order Total</th>
	<th width="10%">Queue No.</th>
    <th width="10%">Action</th>
    </tr>
    <?php
	}
	               $var="select max(orderid) as max from temp";
	               $res=$con->query($var);
                   $row = mysqli_fetch_assoc($res);
	               $orderid = $row['max'] + 1; 
				   
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>RM <?php echo $values["product_price"]; ?></td>
            <td>RM <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
		    <td><?php echo $values["queue"]; ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
        <tr>
        <td colspan="3" align="left"><h3 style="margin: 10px;" class="font-alt">Total</h3></td>
        <td align="right"><p style="margin: 10px;" class="font-alt">RM <?php echo number_format($total, 2); ?></p></td>
        <td colspan="2"> <button style="margin-top:5px;" class="btn btn-mod btn-round font-alt" onclick="check_Login()">Buy Now</button>
		<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: black;color: white;">
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
          <h1 class="font-alt" style="margin-top: 16px !important;font-size: 18px !important;">Payment</h1>
        </div>
        <div class="modal-body">                           
                                   <h2 class="font-alt">Your Bill</h2>
    <div class="table-responsive" style="padding-top:30px">
    <table class="table table-bordered" >
    <tr class="font-alt">
    <th width="30%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="20%">Order Total</th>
    </tr>
    <?php
	
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>RM <?php echo $values["product_price"]; ?></td>
            <td>RM <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
        <tr>
        <td colspan="3" align="left"><h3 style="margin: 10px;" class="font-alt">Total</h3></td>
        <td align="right"><p style="margin: 10px;" class="font-alt">RM <?php $_SESSION["total"]=number_format($total, 2); echo number_format($total, 2); ?></p></td>
		</td>
        </tr>
        <?php
	}
	?>
    </table>
	<?php
	
			$rupees = $_SESSION["total"];
	
	echo '<h3>You need to pay RM '.$rupees.' By wallet or card payment !</h3>
	      <center><label class="radio-inline">
                    <input type="radio" value="Counter" name="cart" onclick="show1();">Counter
                  </label>

                  <label class="radio-inline">
                    <input type="radio" value="Card" name="cart" onclick="show2();">Card
                  </label>
	';
	?>
	
	 <div id="div_Counter" style="display:none; margin-top: 3%;">
            
            <form method='POST'>
             <table style="margin-bottom: 3%;width:50%;">
                <tr align='center'>
                  <td>
                      <label for="walletamt">Wallet Amount:</label>
                  </td>
                  <td>
                      <input class="form-control" style="margin-left: 3%; margin-bottom: 3%;" value="<?php echo $balance ?>" name="walletamt" type="text" readonly>
                  </td>
                </tr> 
				<tr align='center'>
                  <td>
                      <label for="orderamt">Order Amount:</label>
                  </td>
                  <td>
                   <input class="form-control" style="margin-left: 3%; margin-bottom: 3%;" value="<?php echo $rupees ?>" name="orderamt" type="text" readonly>
                  </td>
                </tr> 
       
            </table>

            <input type="submit"  name="sub" class="btn text-center" style="width:40%; background-color: coral; color: white; margin-bottom: 3%;" value="Buy Now">

           <?php
		    date_default_timezone_set('Asia/Kolkata');
             $date = date('d/m/Y H:i A');
		if(isset($_POST['sub']))
		{
			if($balance >= $rupees)
			{
				$wallet=($balance-$rupees);
				foreach($_SESSION["cart"] as $keys => $values)
		        {
				 $total=($values["item_quantity"] * $values["product_price"]);
				 $ins1="insert into temp values ('".$orderid."','$uid','".$values["product_id"]."','".$values["item_name"]."','".$values["product_price"]."','".$values["item_quantity"]."','".$total."','Order Placed','".$date."')";
		         if(mysqli_query($con, $ins1))
                        {
							
						}
		        }
				$upd="update mmstores set Bal='$wallet' where uid='$uid'";
				 if(mysqli_query($con, $upd))
                        {
							   unset($_SESSION["cart"]);
							   echo "<script>window.location.href='main.php'</script>";
						}
				 
			}
			 else
			{
				 echo "<script>alert('Please Refill your Card for Payment')</script>";    
		         echo "<script>window.location.href='refill.php'</script>";
			 }					 
				
		}
		?>
        </div>
       <div id="div_Card" style="display:none; margin-top: 3%;">
                 <table style="margin-bottom: 3%;width: 80%;border:0px solid black">
                    <tr align='center'>
                      <td style="width: 30%;">
                          <label for="name">Name on Card:</label>
                      </td>
                      <td style="width: 50%;">
                          <input  type="text" style="margin-bottom: 2%; width: 100%;" placeholder="Enter Name on Card" id="name" name="namec" class="form-control">
                      </td>
                    </tr> 

                     <tr align='center'>
                      <td style="width: 30%;">
                          <label for="name">Card No:</label>
                      </td>
                      <td style="width: 50%;">
                          <input  type="text" style="margin-bottom: 2%; width: 100%;" placeholder="Enter Card No" id="cardno" name="cardno" class="form-control" pattern="[0-9]{16}" title="Please Enter Valid Card Details" > 
                      </td>
                    </tr> 

                    <tr align='center'>
                      <td style="width: 30%;">
                          <label for="name">CVV:</label>
                      </td>
                      <td style="width: 50%;">
                          <input type="text"  style="margin-bottom: 2%; width:100%;" placeholder="Enter CVV" id="cvv" name="cvv" class="form-control" pattern="[0-9]{3}" title="Please Enter Valid CVV Number"> 
                      </td>
                    </tr> 

                     <tr align='center'>
                      <td style="width: 30%;">
                          <label for="name">Amount:</label>
                      </td>
                      <td style="width: 50%;">
                          <input value="<?php echo $rupees ?>" type="text" style="margin-bottom: 2%; width:100%;" placeholder="Enter Amount" id="amount_form" name="amount_form" class="form-control" readonly> 
                      </td>
                    </tr> 
           
                </table>

                <input type="submit" name="btn_pay" class="btn text-center" style="width:30%; background-color: crimson; color: white; margin-bottom: 3%;" value="Done">
            
        </div> 
		</center>
        <div class="modal-footer">
          <a type="button" class="btn btn-default font-alt" style="background: black;color: white;"  href="">Close</a>
        </div>
      </div>
      
    </div>
  </div>
		</td>
        </tr>
		
        <?php
		if(isset($_POST['btn_pay']))
		{
			$namec=$_POST['namec'];
			$cardno=$_POST['cardno'];
			$cvv=$_POST['cvv'];
			if(empty($namec)||empty($cardno)||empty($cvv))
			{
				 echo "<script>alert('Please Fill all fields')</script>";  
			}
			else
			{	
			foreach($_SESSION["cart"] as $keys => $values)
		    {
				$total=number_format($values["item_quantity"] * $values["product_price"], 2);
				$ins="insert into temp values ('".$orderid."','$uid','".$values["product_id"]."','".$values["item_name"]."','".$values["product_price"]."','".$values["item_quantity"]."','".$total."','Order Placed','".$date."')";
		         if(mysqli_query($con, $ins))
                        {
							
						}
		     }
			 unset($_SESSION["cart"]);
		    echo "<script>window.location.href='main.php'</script>";  
		  }
		}
		
	}
	?>
	</form>
    </table>
	<?php
require_once("recommend.php");
require_once("test.php");

if(!empty($_SESSION["login"]))
{



$sel_u="select * from temp where uid='$uid'";

$rel_u=$con->query($sel_u);

if(mysqli_num_rows($rel_u)==0)
	{			  
		//echo "<center><h2>No records to display</h2></center>";	
	}
	else
	{
	
$re = new Recommend();
echo"
<center><br><br><button class='btn btn-danger' style='width:70%'><h4>Recommendation</h4></button></center>
<table width='70%' align='center'><tr>
<center><h3 style='color:maroon'>Customer also brought this</h3></center>
";
$i=0;

foreach ($re->getRecommendations($ArraY, "$uid") as $value) {
	$sel="select * from products where id='$value'";

$rel=$con->query($sel);
		
 while($data=mysqli_fetch_array($rel))
		  {
			  if($i<=1)
			  {
			  echo "
			         <td width='50%'><center><div class='w3-card w3-white' style='width:350;border:0px solid black'>
			         <img src='images/shop/".$data['image']."' style='width:150px;height:150px'>
					 <div class='w3-container'>
					  <a data-toggle='modal' href='#itemdetails".$value."'><h4>".$data['p_name']."</h4></a>
			          <h5>Price:".$data['price']."</h5>
					</div></div></center>";
					
				echo '<form method="post" action="shop.php?action=add&id='.$value.'">
				<center><input type="number" min="1" name="quantity" class="form-control" value="1" style="width:70%" required>
                      <input type="hidden" name="hidden_name" value="'.$data['p_name'].'" >
                      <input type="hidden" name="hidden_price" value="'.$data['price'].'">
                    <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag"></center>
					</td></form>';
					$i++;
			  }
             ?>
			<div class="modal fade" id="itemdetails<?php echo $value;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$value'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			   <img src="images/shop/<?php echo $d["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
		<?php	 
		  }
	 }
	 
    }
echo"</tr></table>";
$recom="select * from temp where uid='$uid'";
$recomm=$con->query($recom);
if(mysqli_num_rows($recomm)==0)
	{		
		$prod="select distinct id from products";
		$prod_res=$con->query($prod);
		if(mysqli_num_rows($prod_res)==0)
		{						
		}
		else
		{
			while($p=mysqli_fetch_array($prod_res))
			  {
				  $product_id[]=$p['id'];
			  }
			  $m=count($product_id);
			  if($m >= 2)
		  {
		    $random_keys=array_rand($product_id,2);
		   
		    $val1=$product_id[$random_keys[0]];
		    $val2=$product_id[$random_keys[1]];
		   
		    $a="select * from products where id='".$val1."'";
		    $b=$con->query($a);
		    $c=mysqli_fetch_array($b);
		    
			echo"
			<table width='70%' border='0' align='center'><tr><center><h3 style='color:maroon'>Recommended For you</h3></center>
			<td width='50%'><center><div class='w3-card w3-white' style='width:350;border:0px solid black'>
			         <img src='images/shop/".$c['image']."' style='width:150px;height:150px'>
					 <div class='w3-container'>
					 <a data-toggle='modal' href='#itemdetails".$val1."'><h4>".$c['p_name']."</h4></a>
			          <h5>Price:".$c['price']."</h5>
					</div></div></center>";
					
					echo '<form method="post" action="shop.php?action=add&id='.$val1.'">
					<center><input type="number" min="1" name="quantity" class="form-control" value="1" style="width:70%" required>
                      <input type="hidden" name="hidden_name" value="'.$c['p_name'].'" >
                      <input type="hidden" name="hidden_price" value="'.$c['price'].'">
                    <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag"></center>
					</td></form>
					
			';
			
		    $d="select * from products where id='".$val2."'";
		    $e=$con->query($d);
		    $fr=mysqli_fetch_array($e);
		    
			echo"
			<td width='50%'><center><div class='w3-card w3-white' style='width:350;border:0px solid black'>
			         <img src='images/shop/".$fr['image']."' style='width:150px;height:150px'>
					 <div class='w3-container'>
					  <a data-toggle='modal' href='#itemdetails".$val2."'><h4>".$fr['p_name']."</h4></a>
			          <h5>Price:".$fr['price']."</h5>
					</div></div></center>";
					
			echo '<form method="post" action="shop.php?action=add&id='.$val2.'">
			<center><input type="number" min="1" name="quantity" class="form-control" value="1" style="width:70%" required>
                <input type="hidden" name="hidden_name" value="'.$fr['p_name'].'" >
                <input type="hidden" name="hidden_price" value="'.$fr['price'].'">
                <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag"></center>
				</td></form></tr></table>
			';
	
		  }
			  
		}	
		
	}
	else
	{
 while($f=mysqli_fetch_array($recomm))
		  {
			  $pid[]=$f['product_id'];
		  }
		  $n=count($pid);
		  if($n >= 2)
		  {
		    $random_keys=array_rand($pid,2);
		   
		    $val1=$pid[$random_keys[0]];
		    $val2=$pid[$random_keys[1]];
		   
		    $a="select * from products where id='".$val1."'";
		    $b=$con->query($a);
		    $c=mysqli_fetch_array($b);
		    
			echo"
			<table width='70%' border='0' align='center'><tr><center><h3 style='color:maroon'>Recommended For you</h3></center>
			<td width='50%'><center><div class='w3-card w3-white' style='width:350;border:0px solid black'>
			         <img src='images/shop/".$c['image']."' style='width:150px;height:150px'>
					 <div class='w3-container'>
					 <a data-toggle='modal' href='#itemdetails".$val1."'><h4>".$c['p_name']."</h4></a>
			          <h5>Price:".$c['price']."</h5>
					</div></div></center>";
					
					echo '<form method="post" action="shop.php?action=add&id='.$val1.'">
					<center><input type="number" min="1" name="quantity" class="form-control" value="1" style="width:70%" required>
                      <input type="hidden" name="hidden_name" value="'.$c['p_name'].'" >
                      <input type="hidden" name="hidden_price" value="'.$c['price'].'">
                    <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag"></center>
					</td></form>
					
			';
			
		    $d="select * from products where id='".$val2."'";
		    $e=$con->query($d);
		    $fr=mysqli_fetch_array($e);
		    
			echo"
			<td width='50%'><center><div class='w3-card w3-white' style='width:350;border:0px solid black'>
			         <img src='images/shop/".$fr['image']."' style='width:150px;height:150px'>
					 <div class='w3-container'>
					  <a data-toggle='modal' href='#itemdetails".$val2."'><h4>".$fr['p_name']."</h4></a>
			          <h5>Price:".$fr['price']."</h5>
					</div></div></center>";
					
			echo '<form method="post" action="shop.php?action=add&id='.$val2.'">
			<center><input type="number" min="1" name="quantity" class="form-control" value="1" style="width:70%" required>
                <input type="hidden" name="hidden_name" value="'.$fr['p_name'].'" >
                <input type="hidden" name="hidden_price" value="'.$fr['price'].'">
                <input type="submit" name="add" style="margin-top:20px;" class="btn btn-mod btn-round" value="Add to Bag"></center>
				</td></form></tr></table>
			';
	
		  }
	} 
}
else
{
	
}
 ?>
 			<div class="modal fade" id="itemdetails<?php echo $val1;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$val1'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			   <img src="images/shop/<?php echo $d["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
	  
	   		<div class="modal fade" id="itemdetails<?php echo $val2;?>" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <center><h2 class="modal-title" style="margin-top: 2%;">Item Details</h2></center>
            </div>
        
           <div class="modal-body">
              
         <form method="post"> 
            <?php 
			 $s="select * from products where id='$val2'";
			 $r=$con->query($s);
             $d=mysqli_fetch_array($r);
			?>
              <center>
               <div class="title"><a href="#"><h4 style='color:maroon'><?php echo $d['p_name'] ?></h4></a></div>
			   <img src="images/shop/<?php echo $d["image"]; ?>" class="img-responsive" style="min-height: 171px;width:300px">
			   <br><div  style='border:0px solid black;width:80%'><?php echo $d['description'] ?></div></center> <br>
		       <center><div class="title" style='font-size:18px'><label><b>Category:</b></label> <?php echo $d['category'] ?>
			<br><br><label style='color:red'><b>Price:</b></label> RM <?php echo $d['price'] ?> </div></center> 
              

           </form>  

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
        </div>
      </div>
	  
    </div>
    </div>
	</div>

	<script>
	function check_Login()
	{
		$.ajax({url: "check_Login.php", success: function(result){
			if(result == 1)
			{
				
				$("#myModal").modal("toggle");
			}
			else
				window.location = "login.php";
		}});
	}
	</script>
	<script>
	
function show1(){
  document.getElementById('div_Counter').style.display ='block';
  document.getElementById('div_Card').style.display = 'none';
  document.getElementById('btn_buynow_focus').focus();

}
function show2(){
  document.getElementById('div_Card').style.display = 'block';
  document.getElementById('div_Counter').style.display ='none';
  document.getElementById('name').focus();
}
function check(elem) {
	var value=document.getElementById("mySelect").value;
	if(value=='1')
	{		
    document.getElementById('Soups').style.display ='none';
	document.getElementById('Breakfast').style.display ='block';
	document.getElementById('Starter').style.display ='none';
	document.getElementById('Main Course').style.display ='none';
	document.getElementById('Specials').style.display ='none';
	document.getElementById('Desserts').style.display ='none';
	}
	if(value=='2')
	{		
  
	document.getElementById('Breakfast').style.display ='none';
	document.getElementById('Soups').style.display ='block';
	document.getElementById('Starter').style.display ='none';
	document.getElementById('Main Course').style.display ='none';
	document.getElementById('Specials').style.display ='none';
	document.getElementById('Desserts').style.display ='none';
	}
	if(value=='3')
	{		
  
	document.getElementById('Breakfast').style.display ='none';
	document.getElementById('Soups').style.display ='none';
	document.getElementById('Starter').style.display ='block';
	document.getElementById('Main Course').style.display ='none';
	document.getElementById('Specials').style.display ='none';
	document.getElementById('Desserts').style.display ='none';
	}
	if(value=='4')
	{		
  
	document.getElementById('Breakfast').style.display ='none';
	document.getElementById('Soups').style.display ='none';
	document.getElementById('Starter').style.display ='none';
	document.getElementById('Main Course').style.display ='block';
	document.getElementById('Specials').style.display ='none';
	document.getElementById('Desserts').style.display ='none';
	}
	if(value=='5')
	{		
  
	document.getElementById('Breakfast').style.display ='none';
	document.getElementById('Soups').style.display ='none';
	document.getElementById('Starter').style.display ='none';
	document.getElementById('Main Course').style.display ='none';
	document.getElementById('Desserts').style.display ='block';
	document.getElementById('Specials').style.display ='none';
	}
	if(value=='6')
	{		
  
	document.getElementById('Breakfast').style.display ='none';
	document.getElementById('Soups').style.display ='none';
	document.getElementById('Starter').style.display ='none';
	document.getElementById('Main Course').style.display ='none';
	document.getElementById('Desserts').style.display ='none';
	document.getElementById('Specials').style.display ='block';
	}
}
</script>
 </body>
</html>
