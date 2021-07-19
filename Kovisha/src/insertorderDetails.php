<?php

	session_start();
	
	require 'config.php';
	
	   $nettotal =  $_SESSION['netTotal'] ;
	
	   $dis = $_SESSION['discount'] ;
	   
	    $phone =  $_SESSION['Phone'] ;


		$sql = "INSERT INTO customer_orders(id , totalAmount , discountedAmount ,Phonecust,status)
                VALUES( '' ,  '$nettotal'  , '$dis' , '$phone' ,'Pending' )";
				
				if($conn -> query ($sql))
		{
			echo "successfully inserted";
			header('Location:finalpayment.php');
		}
		
		else
		{
			echo "error";
		}


		$conn -> close();







?>