<?php

		require 'config.php';

		$name = $_POST['name'];
		$Phone = $_POST['phone'];
		$Email = $_POST['mail'];
		$Date = $_POST['Date'];
		$Order = $_POST['order'];
		$Inquiry = $_POST['about'];
		$Feedback = $_POST['comment'];
		
		
		$sql = "INSERT INTO feed_detail(Name, Phone,Email,Date ,Order,Inquiry,Feedback)
				VALUE('$name','$Phone','$Email','$Date','$Order','$Inquiry','$Feedback')";


		if($conn -> query ($sql))
		{
			echo "successfully inserted";
		}
		
		else
		{
			echo "error";
		}


		$conn -> close();



?>    