<?php
	session_start();
	if(!isset($_SESSION['price'])){
		header("Location: q24.php");
		exit;
	}
	
	$price=$_SESSION['price'];
	$quant=$_SESSION['quan'];
	$total = $price * $quant;
	echo "COST IS : ".$total;
?>
