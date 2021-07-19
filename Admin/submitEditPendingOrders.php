<?php

	require 'config.php';
	
	$DBidN =$_POST['DBid'];
	$FidN =$_POST['Pno'];
	$status =$_POST['stat'];
	
	$sql = "UPDATE customer_orders SET status = '$status' WHERE ID = '$DBidN'";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> 
				alert('Record Updated Successfully');
			  </script>" ;
		header("Location:Pending.php");
	}
	
	else
	{
		echo "<script>
				alert('Error in updating record')
			  </script>";
	}
	
	mysqli_close($conn);
	
	
	
?>