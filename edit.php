<?php
include('connection.php');
$pid=$_GET['pid'];
$sel="select * from products where id='$pid'";
$rel=$con->query($sel);
$data=mysqli_fetch_array($rel);
	include("adminmenu.php");
?>

 <div class="row">
				
                                <div class="col-md-4 col-md-offset-4">
								<br>
                                    	<center><h2 class="font-alt">Edit Food Items</h2></center>
								<br>
                                    <form action=""  class="form contact-form" enctype="multipart/form-data" method="post">
                                        <div class="clearfix">
         
                                            <div class="form-group">
                                                <input type="text" name="pname" value="<?php echo $data['p_name']?>" class="input-md round form-control" placeholder="Enter Food Name" required>
                                            </div>
                                            
                                            <div class="form-group">
											<select name="category" id="category" class="input-md form-control" required>
											 <option><?php echo $data['category']?></option>
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
											<label style='font-size:15px;'>Food Image: </label><br>
                                             <input type="text" name="img" value="<?php echo $data['image']?>"><br>
                                           <input type="file" style='font-size:15px;width:35%' name="image" >
                                           </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <textarea name="description" class="input-md round form-control" placeholder="Enter Food Description" style='height:90px' required><?php echo $data['description']?></textarea>
                                            </div>
											
											<!-- Phone No.-->
                                            <div class="form-group">
                                                <input type="text" name="price"  class="input-md round form-control" placeholder="Enter Price"  value="<?php echo $data['price']?>" pattern="[0-9]*$" title='Please Enter In numbers only' required>
                                            </div>
											
											<div class="form-group">
                                             <input type="text" name="time" style='width:85%' class="input-md round form-control" placeholder="Enter Preparation time" pattern="[0-9]*$" title='Please Enter time in minutes'  value="<?php echo $data['time']?>" required> Minutes
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
                             echo 'uploaded';
                     }
                    } 
					  }			
                else
					{
                     echo 'please upload';
                    }
		
					  $pname=$_POST['pname'];
					  $img=$iname;
					  $price=$_POST['price'];
					  $desc=$_POST['description'];
					  $cat=$_POST['category'];
					 $image=$_POST['img'];
					  $time=$_POST['time'];
				  if(empty($img))
			{
				$sql="update products set p_name='$pname', image='$image' , price='$price' ,description='$desc', category='$cat', time='$time'  where id='$pid'";
				
				if(mysqli_query( $con,$sql))
				  {
					  echo "<script>alert('Food Item Updated Succesfully');</script>";
					  echo "<script>window.location.href='manageitems.php'</script>";
				  }
				  else
				  {
					  echo "<script>alert('Please Try Again');</script>";
				  }	
			}
			else{
				  $sql= "update products set p_name='$pname', image='$img' , price='$price' ,description='$desc', category='$cat',time='$time' where id='$pid'";
				  
				  if(mysqli_query( $con,$sql))
				  {
					  echo "<script>alert('Food Item Updated Succesfully');</script>";
					  echo "<script>window.location.href='manageitems.php'</script>";
				  }
				  else
				  {
					  echo "<script>alert('Please Try Again');</script>";
				  }	
				}	
				}
				   ?>
                                    </form>
                                    
                                </div>
                            </div>