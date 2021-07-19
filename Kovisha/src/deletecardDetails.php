<?php

		require 'config.php';
		

		
			// $phone = $_GET['phone'];
			$phone = $_SESSION['Phone'];
		
			#$id = $_POST['id'];
			
		
			$sql = "DELETE FROM card_detail WHERE Phone = '$phone'";
			
			if(mysqli_query($conn , $sql)) 
		{
			echo "<script> alert('Record deleted successfully') </script>";
			#header("Location:userprofiles.php");
		}
		
	else 
	{
		echo "<script>alert('Error deleting record: ')</script>";
	}
	
	
	
	
	mysqli_close($conn);
		
		
		
		

		
		?>