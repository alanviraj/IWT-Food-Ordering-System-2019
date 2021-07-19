<?php


	require 'config.php';

	$firstname = $_POST['fname'];
	$lastname = $_POST['lanme'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$sql = "INSERT INTO 
	customer_detail(firstName,lastName,Phone,Address,Email,feedBack)
	VALUE('$firstname','$lastname','$phone','$address','$email','') ";

	//if($conn -> query($sql))  
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert('Record inserted successfully')
		</script>";
		header("Location:Customers.php");
	}
	else
	{
		echo "<script>
		alert('ERROR')
		</script>";
	}
	
	$conn->close();
?>