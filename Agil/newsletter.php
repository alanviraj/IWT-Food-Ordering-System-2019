<?php

	require 'config.php';
	
	$emailT = $_POST['uEmail'];
	
	if(filter_var($emailT,FILTER_VALIDATE_EMAIL))
	{	
	
		$name = $_POST['uName'] ;
		$email = $_POST['uEmail'] ;

		$sql = "INSERT INTO newsletter(name,email)VALUE('$name','$email')";

		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			alert('Record Inserted Successfully')
			</script>";
			
		}
		
		mysqli_close($conn);
	}
	else
	{
		echo"<script>alert('Invalid Email')</script>";
		
	}
	echo"<html><br><br><a href='home.html' style='text-decoration:none'><button>Previous Page</button></a></html>";
	
?>
