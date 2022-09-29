<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "mmstores");
$i = ! empty($_SESSION['i']) ? $_SESSION['i'] : ' ';
if($i==' ')
{
			$m="Select count(orderid) as max from temp where status!='Ready'";
			$n=$connect->query($m);
			$o = mysqli_fetch_assoc($n);
	        $que = $o['max'] + 1;  	
	        $_SESSION['i']=1;
	        $_SESSION['queue']=$que;
}
	
if(!empty($_SESSION["login"]))
{
    if(isset($_POST["add"]))
   {
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count =$_SESSION['j'];
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"],
			'queue' => $_SESSION['queue']+1,
			);
			$_SESSION["cart"][$count] = $item_array;
			$_SESSION['j']=$_SESSION['j']+1;
			$_SESSION['queue']=$_SESSION['queue']+1;

			echo '<script>window.location="main.php"</script>';
			header("Location: main.php");
			;
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="main.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'product_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"],
	     'queue' => $_SESSION['queue'],
		);
		$_SESSION["cart"][0] = $item_array;
	    $_SESSION['j']=1;
		$count = count($_SESSION["cart"]);
		header("Location: main.php");
		
	}
   }
}
else
{

	echo '<script>window.location="login.php"</script>';
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="main.php"</script>';
			}
		}
	}
}
?>