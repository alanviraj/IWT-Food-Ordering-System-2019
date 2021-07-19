<?php

	session_start();
	
	$n = $_POST['name'];
	$pr = $_POST['prc'];
	$quan = $_POST['qty'];
	
	
	$product = array($n , $pr , $quan);
	
	$_SESSION['$n[][]'] = $product;
	
	/*header('location:index.php');*/
	
	header('location:viewmenu.html');


?>