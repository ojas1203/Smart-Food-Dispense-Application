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
        <script>

function showHint(str) {

    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET", "getdd_addbalance.php?userid="+str, true);
        xmlhttp.send();
    }
}


</script> 
            <div class="row">
				
                                <div class="col-md-4 col-md-offset-4">
								<br>
                                    	<center><h2 class="font-alt">Add Balance</h2></center>
								<br>
					<form action="" class="form contact-form" enctype="multipart/form-data" method="post">
                                        <div class="clearfix">
         
                                            <div class="form-group">
                          <label for="dd_foodid" style="float: left;">User ID:</label>									
											<select id="dd_studentid" onchange="showHint(this.value)" class="input-md form-control" name="dd_studentid"  required>
                                    <option value="">Select UserId</option>

                                     <?php

                                      

                                        $sel = "select uid from mmstores";                  

                                        $rel=$con->query($sel);

                                           if(mysqli_num_rows($rel)==0)
                                           {
                                                  echo "<option value='nodata'>--No records to display--</option>";
                                           }
                                           else
                                           {
                                              while($data=mysqli_fetch_array($rel))
                                              {                            
                                                    echo "<option value='".$data['uid']."'>".$data['uid']."</option>";
                                                 
                                              }
                                          }
                                     
                                    ?>

                                </select>
								</div>
								
								  <div id="txtHint">

                            </div>  
							</div>
							</div>
						
							</div>
							
<?php
if(isset($_POST['btn_update']))
{
    $userid = $_POST['dd_studentid'];
    $name = $_POST['name'];
    $st_walletamt = $_POST['st_walletamt'];
    $amt_update = $_POST['amt_update'];
    
    $totalamt_update = ($st_walletamt + $amt_update);
   

        $sql_update = "Update mmstores set Bal='$totalamt_update' where 
        uid='$userid'";

        if(mysqli_query($con, $sql_update))
        {
            echo "<script>alert('Amount updated successfully');</script>";
        }   
        else
        {
            echo "<script>alert('Please Try again');</script>";
        }
    
}
}
?>			
	</form>				