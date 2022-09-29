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
                    <div class="row">
				
                                <div class="col-md-4 col-md-offset-4">
								<br>
                                    	<center><h2 class="font-alt">Add Food Items</h2></center>
								<br>
                                    <form action=""  class="form contact-form" enctype="multipart/form-data" method="post">
                                        <div class="clearfix">
         
                                            <div class="form-group">
                                                <input type="text" name="foodname" class="input-md round form-control" placeholder="Enter Food Name" required>
                                            </div>
                                            
                                            <div class="form-group">
											<select name="category" id="category" class="input-md form-control" required>
											 <option value="">Select Category</option>
											<option value="Breakfast">Breakfast</option>
											<option value="Starter">Starter</option>
											<option value="Meal">Meal</option>
											<option value="Beverages">Beverages</option>
											<option value="Desert">Desert</option>
											<option value="Rice">Rice</option>
											<option value="Snacks">Snacks</option>										
											</select>
											</div>
											
                                            <div class="form-group">   
                                             <input type="file" name="image" class="form-control" placeholder='Food Image' required>
                                           </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <textarea name="description" class="input-md round form-control" placeholder="Enter Food Description" style='height:70px' required></textarea>
                                            </div>
											
											<!-- Phone No.-->
                                            <div class="form-group">
                                                <input type="text" name="price"  class="input-md round form-control" placeholder="Enter Price" pattern="[0-9]*$" title='Please Enter In numbers only' required>
                                            </div>
											
											<div class="form-group">
                                             <input type="text" name="time" style='width:85%' class="input-md round form-control" placeholder="Enter Preparation time" required> Minutes
                                            </div>
											
                                                
                                        </div>
                                        
                                        <!-- Send Button -->
                                        <div class="pt-10">
                                           <!---- <button class="submit_btn btn btn-mod btn-medium btn-round btn-full" id="reg-btn">Register</button>
                                       ---> 
									   <input type="submit" name='add' class="btn btn btn-mod btn-medium btn-round btn-full"/>
									   </div>
                                     <?php

									 if(isset($_POST['add']))
				{
					  $file=$_FILES['image']['tmp_name'];
					 echo $iname=$_FILES['image']['name'];
					  if(isset($iname))
					  {
					 if(!empty($iname))
					  {      
                      $location = 'images/';      
                     if(move_uploaded_file($file, $location.$iname))
					 {
                             
                     }
                    } 
					  }			
                else
					{
                     
                    }
		
				   $var="select max(id) as max from products";
	               $res=$con->query($var);
                   $row = mysqli_fetch_assoc($res);
	               $pid = $row['max'] + 1; 
				   
				    $category = $_POST['category'];
                    $foodname = $_POST['foodname'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $time = $_POST['time'];
				    $image=$iname;
					
				$sql = "Insert into products values('$pid','$foodname',
                        '$image','$description','$price','$category','$time')";

                        if(mysqli_query($con, $sql))
                        {
                            echo "<script>alert('FoodItem added successfully');</script>";
							echo "<script>window.location.href='additems.php'</script>";  
                        }   
                        else
                        {
                            echo "<script>alert('Please Try again');</script>";
                        }
				}
				   ?>
                                    </form>
                                    
                                </div>
                            </div>


<?php
include("footer.php");
}
?>