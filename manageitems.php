<?php
include("connection.php");
$aid = ! empty($_SESSION['aid']) ? $_SESSION['aid'] : ' ';
if($aid==" ")
{
	echo "<script>window.location.href='homepage.php'</script>";
}
else
{
	include("adminmenu.php");
	?>
	<center>
	<br><br>
	<div style='border:0px solid black;width:50%;align:center'><ul class="nav nav-tabs" width='70%'>
  <li class="active"><a data-toggle="tab" href="#home">Breakfast</a></li>
  <li><a data-toggle="tab" href="#menu1">Soups</a></li>
  <li><a data-toggle="tab" href="#menu2">Starter</a></li>
  <li><a data-toggle="tab" href="#menu3">Main Course</a></li>
  <li><a data-toggle="tab" href="#menu4">Desserts</a></li>
  <li><a data-toggle="tab" href="#menu5">Specials</a></li>
</ul>
</div>
</center>
<center>
<div class="tab-content" style='border:0px solid black;width:50%;align:center'>
  <div id="home" class="tab-pane fade in active">
   <?php
			       
				   
				  $sel="select * from products where category='Breakfast'";
				  $rel=$con->query($sel);
				  if(mysqli_num_rows($rel)==0)
				  {
					
					
				  }
				  else
				  {
					  while($data=mysqli_fetch_array($rel))
		              {
                            $img=$data['image'];
                            $name=$data['p_name'];
							$price=$data['price'];
							$pid=$data['id'];
							$catg=$data['category'];
							$desc=$data['description'];
							$time=$data['time'];
					  echo "
					  <div class='col-sm-12'>
					  <div class='col-sm-4'>
					 <img src='images/shop/".$img."' style='width:350px' class='img_inner fleft'> <br><br><br><br>
					  </div>
					  <div class='col-sm-8'>
					  <div class='title col3'><a href='#'>$name</a></div>
          <p class='col1'>
            <time datetime='2013-01-01'>Price:$price</time><span> || </span>Category: 
            $catg
          </p>$desc
          <br>
          <a href='edit.php?pid=$pid' class='link1' style='color:green'><i class='fa fa-pencil-square' style='font-size:20px' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp;&nbsp;
		  <a href='delete.php?val=$pid' class='link1' style=''><i class='fa fa-trash' style='font-size:20px;color:black' aria-hidden='true'></i>Delete</a>&nbsp;&nbsp; <br><br><br><br>
					  </div>
					  </div>
					  <br><br>
					  ";
				}}?>
  </div>
  <div id="menu1" class="tab-pane fade">
      <?php
			       
				   
				  $sel="select * from products where category='Soups'";
				  $rel=$con->query($sel);
				  if(mysqli_num_rows($rel)==0)
				  {
					
					
				  }
				  else
				  {
					  while($data=mysqli_fetch_array($rel))
		              {
                            $img=$data['image'];
                            $name=$data['p_name'];
							$price=$data['price'];
							$pid=$data['id'];
							$catg=$data['category'];
							$desc=$data['description'];
							$time=$data['time'];
					  echo "
					  <div class='col-sm-12'>
					  <div class='col-sm-4'>
					 <img src='images/shop/".$img."' style='width:350px' class='img_inner fleft'><br><br><br><br>
					  </div>
					  <div class='col-sm-8'>
					  <div class='title col3'><a href='#'>$name</a></div>
          <p class='col1'>
            <time datetime='2013-01-01'>Price:$price</time><span> || </span>Category: 
            $catg
          </p>$desc
          <br>
          <a href='edit.php?pid=$pid' class='link1' style='color:green'><i class='fa fa-pencil-square' style='font-size:20px' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp;&nbsp;
		  <a href='delete.php?val=$pid' class='link1' style=''><i class='fa fa-trash' style='font-size:20px;color:black' aria-hidden='true'></i>Delete</a>&nbsp;&nbsp;<br><br><br><br>
					  </div>
					  </div>
					  ";
				}}?>
  </div>
  <div id="menu2" class="tab-pane fade">
   <?php
			       
				   
				  $sel="select * from products where category='Starter'";
				  $rel=$con->query($sel);
				  if(mysqli_num_rows($rel)==0)
				  {
					
					
				  }
				  else
				  {
					  while($data=mysqli_fetch_array($rel))
		              {
                            $img=$data['image'];
                            $name=$data['p_name'];
							$price=$data['price'];
							$pid=$data['id'];
							$catg=$data['category'];
							$desc=$data['description'];
							$time=$data['time'];
					  echo "
					  <div class='col-sm-12'>
					  <div class='col-sm-4'>
					 <img src='images/shop/".$img."' style='width:350px' class='img_inner fleft'><br><br><br><br>
					  </div>
					  <div class='col-sm-8'>
					  <div class='title col3'><a href='#'>$name</a></div>
          <p class='col1'>
            <time datetime='2013-01-01'>Price:$price</time><span> || </span>Category: 
            $catg
          </p>$desc
          <br>
          <a href='edit.php?pid=$pid' class='link1' style='color:green'><i class='fa fa-pencil-square' style='font-size:20px' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp;&nbsp;
		  <a href='delete.php?val=$pid' class='link1' style=''><i class='fa fa-trash' style='font-size:20px;color:black' aria-hidden='true'></i>Delete</a>&nbsp;&nbsp;<br><br><br><br>
					  </div>
					  </div>
					  ";
				}}?>
  </div>
  
    <div id="menu3" class="tab-pane fade">
   <?php
			       
				   
				  $sel="select * from products where category='Main Course'";
				  $rel=$con->query($sel);
				  if(mysqli_num_rows($rel)==0)
				  {
					
					
				  }
				  else
				  {
					  while($data=mysqli_fetch_array($rel))
		              {
                            $img=$data['image'];
                            $name=$data['p_name'];
							$price=$data['price'];
							$pid=$data['id'];
							$catg=$data['category'];
							$desc=$data['description'];
							$time=$data['time'];
					  echo "
					  <div class='col-sm-12'>
					  <div class='col-sm-4'>
					 <img src='images/shop/".$img."' style='width:350px' class='img_inner fleft'><br><br><br><br>
					  </div>
					  <div class='col-sm-8'>
					  <div class='title col3'><a href='#'>$name</a></div>
          <p class='col1'>
            <time datetime='2013-01-01'>Price:$price</time><span> || </span>Category: 
            $catg
          </p>$desc
          <br>
          <a href='edit.php?pid=$pid' class='link1' style='color:green'><i class='fa fa-pencil-square' style='font-size:20px' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp;&nbsp;
		  <a href='delete.php?val=$pid' class='link1' style=''><i class='fa fa-trash' style='font-size:20px;color:black' aria-hidden='true'></i>Delete</a>&nbsp;&nbsp;<br><br><br><br>
					  </div>
					  </div>
					  ";
				}}?>
  </div>
  
      <div id="menu4" class="tab-pane fade">
   <?php
			       
				   
				  $sel="select * from products where category='Desserts'";
				  $rel=$con->query($sel);
				  if(mysqli_num_rows($rel)==0)
				  {
					
					
				  }
				  else
				  {
					  while($data=mysqli_fetch_array($rel))
		              {
                            $img=$data['image'];
                            $name=$data['p_name'];
							$price=$data['price'];
							$pid=$data['id'];
							$catg=$data['category'];
							$desc=$data['description'];
							$time=$data['time'];
					  echo "
					  <div class='col-sm-12'>
					  <div class='col-sm-4'>
					 <img src='images/shop/".$img."' style='width:350px' class='img_inner fleft'><br><br><br><br>
					  </div>
					  <div class='col-sm-8'>
					  <div class='title col3'><a href='#'>$name</a></div>
          <p class='col1'>
            <time datetime='2013-01-01'>Price:$price</time><span> || </span>Category: 
            $catg
          </p>$desc
          <br>
          <a href='edit.php?pid=$pid' class='link1' style='color:green'><i class='fa fa-pencil-square' style='font-size:20px' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp;&nbsp;
		  <a href='delete.php?val=$pid' class='link1' style=''><i class='fa fa-trash' style='font-size:20px;color:black' aria-hidden='true'></i>Delete</a>&nbsp;&nbsp;<br><br><br><br>
					  </div>
					  </div>
					  ";
				}}?>
  </div>
  
      <div id="menu5" class="tab-pane fade">
   <?php
			       
				   
				  $sel="select * from products where category='Specials'";
				  $rel=$con->query($sel);
				  if(mysqli_num_rows($rel)==0)
				  {
					
					
				  }
				  else
				  {
					  while($data=mysqli_fetch_array($rel))
		              {
                            $img=$data['image'];
                            $name=$data['p_name'];
							$price=$data['price'];
							$pid=$data['id'];
							$catg=$data['category'];
							$desc=$data['description'];
							$time=$data['time'];
					  echo "
					  <div class='col-sm-12'>
					  <div class='col-sm-4'>
					 <img src='images/shop/".$img."' style='width:350px' class='img_inner fleft'><br><br><br><br>
					  </div>
					  <div class='col-sm-8'>
					  <div class='title col3'><a href='#'>$name</a></div>
          <p class='col1'>
            <time datetime='2013-01-01'>Price:$price</time><span> || </span>Category: 
            $catg
          </p>$desc
          <br>
          <a href='edit.php?pid=$pid' class='link1' style='color:green'><i class='fa fa-pencil-square' style='font-size:20px' aria-hidden='true'></i>Edit</a>&nbsp;&nbsp;&nbsp;
		  <a href='delete.php?val=$pid' class='link1' style=''><i class='fa fa-trash' style='font-size:20px;color:black' aria-hidden='true'></i>Delete</a>&nbsp;&nbsp;<br><br><br><br>
					  </div>
					  </div>
					  ";
				}}?>
  </div>
</div>
	

</div>
<?php
}
?>