<?php


	require 'config.php';

	$UN = $_POST['username'];
	$pwd = $_POST['password'];
	
	$oriUN="vithifood";
	$oriPWD="Vithi1234";
	
	if($UN == $oriUN)
	{
			if( $pwd == $oriPWD )
			{
				echo "<script> alert('Login Success'); </script>";
				header("Location:adminHome.php");
					
			}
				
			else
			{
				echo "<script>alert('Incorrect Password');</script>";
				echo"<br><br><a href='adminLogin.php'><button>Previous Page</button></a>";
			
			}
			
	}		
	else
	{
		echo "<script>alert('Invalid User Name')</script>";
		echo"<br><br><a href='adminLogin.php'><button>Previous Page</button></a>";
	}
	
	
?>

<?php

	//first start session environment
 
	session_start(); 
	
	// store data in session variable through user
 
	$_SESSION['firstname']= $_POST['username'];
 
    $_SESSION['lastname']= $_POST['password'];  
	
?>