<?php
include("connection.php");
$orderid=$_GET['orderid'];
$status=$_GET['status'];
if($status=='Accept' || $status=='Order Placed')
{
	$del="delete from temp where orderid='$orderid'";
	if(mysqli_query($con, $del))
            {
					echo "<script>window.location.href='orderhistory.php'</script>"; 		
			}
}
else
{
	echo "<script>alert('Your order is in Process..Can't cancel now');</script>";
	echo "<script>window.location.href='orderhistory.php'</script>"; 
}	
?>