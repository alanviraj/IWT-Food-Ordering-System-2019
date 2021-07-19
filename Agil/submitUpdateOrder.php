<?php
	require 'config.php';
	
	$idN = $_POST["oid"];
	$tAmountN = $_POST["otAmount"];
	$dAmountN = $_POST["odAmount"];
	$phoneN = $_POST["ophone"];
	
	
	$sql= "UPDATE orders SET ID = '$idN',
							 totalAmount = '$tAmountN',
							 Phone = '$phoneN',
							 discountedAmount = '$dAmountN'
							 WHERE ID = '$idN'";
							 
	if(mysqli_query($conn, $sql))
	{
		echo"<script>alert('Records Updated Successfully!!')</script>";
		header("Location:adminOrder.php");
	}		
	else
	{
		echo"<script>alert('Error in Updating the Record')</script>";
	}
	
	mysqli_close($conn);
?>