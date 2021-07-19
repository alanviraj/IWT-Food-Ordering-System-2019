<?php

	$servername ="localhost";
	$username ="root";
	$password = "";
	$databasename = "foodorder";

	$conn = new mysqli($servername,$username,$password,$databasename) ;
	
	//create comnnection
	
	if($conn->connect_error){
		
		die("Connection Failed".$conn->connect_error);
	}

	else 
	{
		echo "Connected Successfully";
	}
?>