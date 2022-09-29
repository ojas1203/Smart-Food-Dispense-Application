<?php
$con=mysqli_connect('localhost','root','','mmstores');
 $ArraY=array();
$sql = "SELECT * from temp ";
 $rel=$con->query($sql);
while ($row = mysqli_fetch_array($rel)) {
   
   $userID = $row['uid']; #users

$bookID = $row['product_id']; #course



$ArraY[$userID][$bookID] = $bookID;
     
      }


?>