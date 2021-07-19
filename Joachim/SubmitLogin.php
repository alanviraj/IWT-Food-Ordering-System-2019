<?php
	session_start(); 

	require 'config.php';

	$UN = $_POST['username'];
	$pwd = $_POST['password'];
	
	$sql="SELECT* FROM customer_detail ";
	
	$result = $conn->query($sql);
	
	if( $result -> num_rows > 0 )
	{
		while( $row = $result->fetch_assoc() )
		{
			
			$DBUN = $row['Phone'];
			$DBpwd = $row['Password'];
			
			if( $UN == $DBUN )
			{
				if( $pwd == $DBpwd )
				{
					echo "<script> alert('Success'); </script>";
					header("Location:../Agil/home.html");
					
				}
				
				else
				{
					echo "<script>alert('PWD MISMATCH');</script>";
					header("Location:loginO.php");
				}
			}
			
			else
			{
				echo "<script>alert('NO User')</script>";
			}
			
		}
	}
	
	else
	{
		echo "0 Results";
	}
	
	

	//first start session environment
 
	// session_start(); 
	
	// store data in session variable through user
 
	$_SESSION['firstname']= $_POST['username'];
 
    // $_SESSION['lastname']= $_POST['password'];  
	
?>