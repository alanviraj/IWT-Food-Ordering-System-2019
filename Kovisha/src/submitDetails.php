<?php

		require 'config.php';

		$type = $_POST['card'];
		$CardNo = $_POST['number'];
		$cvvNo = $_POST['cvv'];
		$expMonth = $_POST['expmonth'];
		$expYear = $_POST['expyear'];
		$phonenum = $_POST['phone'];
		
		$sql = "INSERT INTO card_detail(cardNumber , type ,	CVV, Phone  ,	expmonth	,expyear)
				VALUES( '$CardNo' ,  '$type'   , '$cvvNo' , '$phonenum' , '$expMonth' , '$expYear')";


		if($conn -> query ($sql))
		{
			echo "successfully inserted";
			header("Location:invoice.php");
		}
		
		else
		{
			echo "error";
		}


		$conn -> close();



?>    




