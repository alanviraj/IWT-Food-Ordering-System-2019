<?php

		require 'config.php';

?>

		<?php
		session_start();
	#extract values entered in text box
	#pass the name of text box
		$Password = $_POST['npassword'];
		$cPassword=$_POST['cnpassword'];
		$phone=$_SESSION['phonepwd'];		
				
		if($Password == $cPassword)
		{
				$sql = "UPDATE customer_detail SET
							Password = '$Password'
							WHERE Phone = '$phone' ";
							
				
				#to update convert the id disabled to readonly
				if(mysqli_query($conn , $sql)) 
				{
				echo "<script> alert('Record updated successfully') </script>";
				/*header("Location:userprofiles.php");*/
				}
				
				else 
				{
					echo "<script>alert('Error updating record: ')</script>";
				}
				
				
				
				
				mysqli_close($conn);
		}
		else{
			echo"<script>alert('Password Mis-match!')</script>";
		}
	?>
