<?php

		require 'configurate.php';

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$mail = $_POST['email'];
		$Address = $_POST['address'];
		$Phone = $_POST['number'];
		
		
		$sql = "INSERT INTO customer_detail(firstName , lastName , Phone  ,	Address	, Email , feedBack)
				VALUES( '$firstname' ,  '$lastname'   , '$Phone' , '$Address' , '$mail' , '')";


		if($con -> query ($sql))
		{
			echo "successfully inserted";
		}
		
		else
		{
			echo "error";
		}


		$con -> close();



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
	
	


?>