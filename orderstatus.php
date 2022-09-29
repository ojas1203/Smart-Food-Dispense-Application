<?php
include("connection.php");
$orderid=$_GET['orderid'];
$orderstatus=$_GET['orderstatus'];
if($orderstatus=="Accept")
{
	$upd="update temp set status='Accept' where orderid='$orderid'";
	 if(mysqli_query($con, $upd))
        {
			echo "<script>window.location.href='neworders.php'</script>";  				
	    }
}
if($orderstatus=="InKitchen")
{
	$upd="update temp set status='In Kitchen' where orderid='$orderid'";
	 if(mysqli_query($con, $upd))
        {
				echo "<script>window.location.href='pending.php'</script>";  			
	    }
}

if($orderstatus=="Ready")
{
	$upd="update temp set status='Ready' where orderid='$orderid'";
	 if(mysqli_query($con, $upd))
        {
				echo "<script>window.location.href='pending.php'</script>";  			
	    }
}
?>