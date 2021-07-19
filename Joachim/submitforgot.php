<?php


	require 'config.php';

	session_start();
	$pwd = $_POST['number'];
	$_SESSION['phonepwd']=$pwd;
	
	$sql="SELECT Phone FROM customer_detail ";
	
	$result = $conn->query($sql);
	
	if( $result -> num_rows > 0 )
	{
		while( $row = $result->fetch_assoc() )
		{
			if($row['Phone']==$_POST['number'])
			{
				$_SESSION['phone']=$row['Phone'];
				
				
				
				
				
				if(isset($_SESSION['phone']))
				{
					header("Location:editpwd.php");
				}
				else
				{
					/*header("Location:loginO.php");*/
					
				}
			}
			else{
				echo "<script>alert('Invalid User Name')</script>";
			}	
		}
	}
	
	
?>