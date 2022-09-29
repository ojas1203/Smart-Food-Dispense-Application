<?php
include "connection.php";
if(isset($_SESSION["login"]))
	echo 1;
else
	echo 0;
?>