<?php

include('usermenu.php');
$uid=$_SESSION['login'];

$sel="select * from temp where uid='$uid' order by date";
$rel=$con->query($sel);
if(mysqli_num_rows($rel) > 0)
	{
		echo"<table class='table table-hover' align='center' style='width:70%'>
		<tr align='center'>
		<th><center>OrderId</center></th>
		<th><center>Food Order</center></th>
		<th><center>Price</center></th>
		<th><center>Quantity</center></th>
		<th><center>Total</center></th>
		<th><center>Status</center></th>
		<th><center>Date</center></th>
		<th><center>Action</center></th>
		</tr> 
		";
		
		while($row = mysqli_fetch_array($rel))
		{
			$orderid=$row['orderid'];
			$item=$row['item_name'];
			$price=$row['product_price'];
			$qnty=$row['item_quantity'];
			$total=$row['total'];
			$status=$row['status'];
			$date=$row['date'];
			
	        echo "
			       <tr align='center'>
				   <td>".$orderid."</td>
				   <td>".$item."</td>
				   <td>".$price."</td>
				   <td>".$qnty."</td>
				   <td>".$total."</td>
				   <td>".$status."</td>
				   <td>".$date."</td>";
		if($status=='Accept' || $status=='Order Placed')
		{
			echo "<td><a href='deleteorder.php?orderid=".$orderid."&status=".$status."' class='btn btn-danger'>Cancel Order</a></td>"; 
		}
		elseif($status='Ready')
		{
			echo "<td>Done</td>";
		}
		else
		{
			echo "<td>In Process</td>";
		}
		
		
			
				 echo"</tr>";
		}
		echo "</table>";
	}
?>