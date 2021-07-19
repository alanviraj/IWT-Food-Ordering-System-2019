<?php
	require 'config.php';
	
	$recordID = $_GET['id'];
	
	$sql = "DELETE FROM orders WHERE ID = '$recordID'";
	
	if(mysqli_query($conn, $sql))
	{
		echo"<script>alert('Records Deleted Successfully!!')</script>";
		header("Location:adminOrder.php");
	}		
	else
	{
		echo"<script>alert('Error in Deleting the Record')</script>";
	}
	
	mysqli_close($conn);
?>