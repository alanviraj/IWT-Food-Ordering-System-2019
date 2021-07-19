<?php

	require 'config.php';
	
	$idN =$_POST['id'];
	$fnameN =$_POST['fname'];
	$lnameN =$_POST['lanme'];
	$phoneN =$_POST['phone'];
	$emailN =$_POST['email'];
	$addressN =$_POST['address'];
	
	
	$sql = "UPDATE customer_detail SET firstName = '$fnameN',
									   lastName = '$lnameN',
									   Phone = '$phoneN',
									   Address = '$addressN',
									   Email = '$emailN'
								   WHERE ID = '$idN'";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> 
				alert('Record Updated Successfully');
			  </script>" ;
		header("Location:Customers.php");
	}
	
	else
	{
		echo "<script>
				alert('Error in updating record')
			  </script>";
	}
	
	mysqli_close($conn);
	
	
	
?>
