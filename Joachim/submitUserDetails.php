<?php

		require 'config.php';

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$mail = $_POST['email'];
		$Address = $_POST['address'];
		$Phone = $_POST['number'];
		$Password = $_POST['password'];
		// $feedback = $_POST['feedback'];
		// $ID = $_POST['ID'];
		
		$sql = "INSERT INTO customer_detail (firstName,lastName,Phone  ,Address	, Email, Password,feedBack,ID )
				VALUE( '$firstname' , '$lastname','$Phone' ,'$Address' ,'$mail' ,'$Password','','' )";


		if($conn -> query ($sql))
		{
			echo "successfully inserted";
			header("Location:loginO.php");
		}
		
		else
		{
			echo "error";
		}


		$conn -> close();



?>    

<?php

	//first start session environment
 
	session_start(); 
	
	// store data in session variable through user
 
	$_SESSION['firstname']= $_POST['fname'];
 
    $_SESSION['lastname']= $_POST['lname'];  
	
	$_SESSION['Phone']= $_POST['number'];  

	$_SESSION['Email']= $_POST['email']; 
	
	$_SESSION['Address']= $_POST['address']; 
	
	$_SESSION['Password']= $_POST['password']; 
	
	


?>