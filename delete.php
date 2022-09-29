<?php
  include("connection.php");
 $val=$_GET['val'];
 $sel="Delete from products where id='$val'";
  if(mysqli_query($con,$sel))
  {
	  echo "<script>alert('Deleted Successfully');</script>";
	  echo "<script>window.location.href='manageitems.php'</script>";
  }
  else
  {
	  echo "<script>alert('Please Try Again');</script>";
  }
  ?>