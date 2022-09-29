<?php
include('usermenu.php')
?>
<html>
<form method="post" align="center" id="myform">	

<div class="container">
	 <div class="row">
         <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Wallet Refill</h3>
                </div>


            <?php

                $uid=$_SESSION['login'];
                $sel_s = "select * from mmstores where uid='$uid'";
                $rel_s=$con->query($sel_s);
                $data_s=mysqli_fetch_array($rel_s);

                $balance_walletrefill = $data_s['Bal'];


            ?>

                <div class="panel-body">
                    <form role="form"  class="form contact-form">
					<div class="clearfix">
                    <fieldset>
                    <div class="form-group">
                    <label for="cardname" style="float: left; margin-left: 2%;">Name on Card:</label>
                    <input class="input-md round form-control" placeholder="Enter Name on Card" name="cardname" type="text" required>
                    </div>                        


                            <div class="form-group">
                               <label for="cardno" style="float: left; margin-left: 2%;">Card No:</label>
                                <input class="input-md round form-control" placeholder="Enter Card No" name="cardno" type="text" pattern="[0-9]{16}" title="Please Enter Valid Card Details" required>
                            </div>


                             <div class="form-group">
                                <label for="cvv" style="float: left; margin-left: 2%;">CVV:</label>
                                <input class="input-md round form-control" placeholder="Enter CVV" name="cvv" type="text" pattern="[0-9]{3}" title="Please Enter Valid Cvv number" required>
                            </div>

                            <div class="form-group">
                                <label for="amount" style="float: left; margin-left: 2%;">Wallet Amount:</label>
                                <input class="input-md round form-control" value="<?php echo $balance_walletrefill ?>" name="wallet_amount" readonly type="text">
                            </div>

                            <div class="form-group">
                                <label for="amount" style="float: left; margin-left: 2%;">Amount to Refill:</label>
                                <input class="input-md round form-control" placeholder="Enter Amount to Refill" name="amount_refill" type="text" pattern="[0-9]*$" required>
                            </div>
                                     

                           <input type="submit" name="btn_pay_walletrefill" class="btn text-center" style="width: 30%; background-color: lightcoral; color: white; margin-bottom: 3%;" value="Pay">
                          
                        </fieldset>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php


if(isset($_POST['btn_pay_walletrefill']))
{
    $wallet_amount = $_POST['wallet_amount'];
    $amount_refill = $_POST['amount_refill'];
   
    
    $totalamt_update = ($wallet_amount + $amount_refill);
   

        $sql_update = "Update mmstores set Bal='$totalamt_update' where uid='$uid'";

        if(mysqli_query($con, $sql_update))
        {
            echo "<script>alert('Wallet Refilled successfully');</script>";
			echo "<script>window.location.href='refill.php'</script>";  
        }   
        else
        {
            echo "<script>alert('Please Try again');</script>";
        }
    
}


?>




</form>

</div>

<script src="js/jquery.validate.min.js"></script>

<script>

    $(function()
    {
        $("#myform").validate({
            
            rules:{
                cardname: "required",

                cardno: {
                  required:true,
                  number:true,
                  maxlength:16
                },

                cvv: {
                  required:true,
                  number:true,
                  maxlength:3
                },

                amount_refill: {
                  required:true,
                  number:true
                },

              },

              messages:{
                cardname:"<p style='color:black;'>Please enter valid name</p>",
                cardno:"<p style='color:black;'>Please enter valid cardno</p>",
                cvv:"<p style='color:black;'>Please enter valid cvv</p>",
                amount_refill:"<p style='color:black;'>Please enter valid amount</p>",

              },

            submitHandler: function(form){
                form.submit();
            }

        });

    });


</script>


</html>