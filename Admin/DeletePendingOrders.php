<?php
	
	require 'config.php';
	
	$recordID = $_GET['id'];
	
	$sql ="DELETE FROM customer_orders WHERE ID = '$recordID' ";
	
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> 
				alert('Record Deleted Successfully');
			  </script>" ;
		header("Location:Pending.php");
	}
	
	else
	{
		echo "<script>
				alert('Error in Deleting record')
			  </script>";
	}
	
	mysqli_close($conn);
	
?>