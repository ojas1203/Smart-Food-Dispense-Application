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

        <center><h2 class="font-alt">New Orders</h2>
	      <table class="table table-bordered table-hover" style='width:80%'>
<?php
 $sel = "select * from temp where status='Accept' or status='In Kitchen'";
 $rel=$con->query($sel);
       if(mysqli_num_rows($rel)==0)
       {
          echo "<h4 style='margin-top: 5%;'>No records to display</h4>";
       }
       else
       {

          

          echo '<thead style="background-color:grey;color:white">           
            <tr>
                <th>UserID</th>
                <th>Name</th>
				<th>FoodOrder</th>
				<th>Price</th>
				<th>Quantity</th>
                <th>Total</th>
                <th>Date and Time</th>
                <th>Status</th>
                                       
            </tr>
          </thead>
          <tbody>';


          while($data=mysqli_fetch_array($rel))
          {
              $orderid=$data['orderid']; 
              $userid=$data['uid'];
			  
			  $q="select * from mmstores where uid='$userid'";
			  $qq=$con->query($q);
			  $row=mysqli_fetch_array($qq);
			  
              $name=$row['username'];
              $totalamount=$data['total'];
              $datetime=$data['date']; 
              $itemname=$data['item_name'];
			  $price=$data['product_price'];
			  $quantity=$data['item_quantity'];
			  $status=$data['status'];
			  
              echo"<tr>
                <td>".$userid."</td>
                <td>".$name."</td>
				<td>".$itemname."</td>
				<td>".$price."</td>
				<td>".$quantity."</td>
                <td>".$totalamount."</td>
                <td>".$datetime."</td>";
                if($status=="Accept")
				{
                  echo"					
                    <td><a class='btn btn-primary' href='orderstatus.php?orderid=".$orderid."&orderstatus=InKitchen'>In Kitchen</a>
                    <a class='btn btn-primary' href='orderstatus.php?orderid=".$orderid."&orderstatus=Ready'>Ready</a>
                    </td>
					";
				}	
				 if($status=="In Kitchen")
				{
                  echo"					
					<td><a class='btn btn-primary' href='orderstatus.php?orderid=".$orderid."&orderstatus=Ready'>Ready</a>
                    </td>
					";
				}	
					?>
               
              </tr>


      <?php

          }
          echo '</table></center>';
        }
}
?>
