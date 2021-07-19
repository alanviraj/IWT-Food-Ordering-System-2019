<?php


	require 'config.php';

	$promoId = $_POST['PID'];
	$promoname = $_POST['PromoName'];
	$discount = $_POST['Promodisc'];
	$validity = $_POST['Promvalidity'];
	$added = $_POST['Promodate'];

	$sql = "INSERT INTO 
	promo(promoCode,promoName,Validity,addedDate,discountPercent)
	VALUE('$promoId','$promoname','$validity','$added','$discount')";

	//if($conn -> query($sql))  
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert('Record inserted successfully')	
		</script>";
		header("Location:ManagePromos.php");	
	}
	else
	{
		echo "<script>
		alert('ERROR')
		</script>";
	}
	
	$conn->close();
?>