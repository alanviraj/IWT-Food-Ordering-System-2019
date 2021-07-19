<?php

	require '../Admin/config.php';
	
		$rName = $_POST['cName'];
		$rPhone = $_POST['number'];
		$rMail = $_POST['mail'];
		$date = $_POST['pickupdate'];
		$pName = $_POST['rname'];
		$pPhone = $_POST['rnumber'];
		$Mail = $_POST['rmail'];
		
		if(!empty($_POST['cName']) && ($_POST['number']) && ($_POST['mail']) && ($_POST['pickupdate']) && ($_POST['rname']) && ($_POST['rnumber']) && ($_POST['rmail']) )
		{
			$sql = "INSERT INTO coupon(customer_id , receiverName , receiverPhone ,  receiverMail , date , purchaserName , purchaserPhone , purchaserMail) 
					VALUES ('' , '$rName', '$rPhone' ,  '$rMail' , '$date' , '$pName' , '$pPhone' , '$Mail' )" ;
			
			 if($conn-> query($sql))
			{
				
				 echo "<script>alert('successfully inserted')</script>";
				 echo "<script>alert('Your promo code is P01. Please use the code in your bill summary page')</script>";
				 header('location:promo.php');
			}
			
			else
			{
				 echo "<script>alert('failed to insert!')</script>;";
			  
			}
		}
		else
			{
				 echo "<script>alert('Cannot add null data')</script>;";
			  
			}
		
		// if(mysqli_query($conn,$sql))
			// {
				//echo "<script>
				//alert('Record inserted successfully')	
				// </script>";
				// header("Location:ManagePromos.php");	
			// }
			// else
			// {
				// echo "<script>
				// alert('ERROR')
				// </script>";
			// }
			

			$conn->close();

?>