
<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  
<form id="myform" method="post">
        
             <?php

                      $userid = $_GET['userid'];
                      
                      include("connection.php");

                      $sel = "select * from mmstores where uid='$userid'";
                                   

                      $rel=$con->query($sel);

                     if(mysqli_num_rows($rel)==0)
                     {
                            echo "<option value='nodata'>--No records to display--</option>";
                     }
                     else
                     {
                        while($data=mysqli_fetch_array($rel))
                        { 

                            $name = $data['username'];
                            $balance = $data['Bal']; 

                            echo "<div class='form-group'><label for='studentname' style='float: left;'>Student Name:</label>
                              <input type='text' name='name' value='".$name."' class='input-md round form-control' id='' readonly>                           
                            </div>
                           <div class='form-group'><label for='st_walletamt' style='float: left; '>Student Wallet Amount:</label>
                              <input type='text' name='st_walletamt' value='".$balance."' class='input-md round form-control' id='' readonly>                           
                            </div>
                            <div class='form-group'><label for='amt_update' style='float: left;'>Amount To Update:</label>
                              <input type='number' min='1' name='amt_update' class='input-md round form-control' id=''>                           
                            </div>

                            <input type='submit' name='btn_update' class='btn btn btn-mod btn-medium btn-round btn-full' value='Update'>
                            ";
                           
                        }
                    }

                                 
              ?>





</form>


<script src="js/jquery.validate.min.js"></script>

<script>

    $(function()
    {
            $("#myform").validate({
            
            rules:{        
                amt_update : "required",               

                 amt_update: {
                    required:true,
                    number:true,
                    
                },
                                           
            },

            messages:{
                amt_update:"<h5 style='color:black;'>Enter amount to update</h5>",
               
            },

            submitHandler: function(form){
                form.submit();
            }

        });

    });


</script>



</body>

</html>