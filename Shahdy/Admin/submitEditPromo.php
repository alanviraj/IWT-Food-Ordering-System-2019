<?php

	require 'config.php';
	
	$DBidN =$_POST['DBid'];
	$idN =$_POST['id'];
	$PnameN =$_POST['Pname'];
	$discN =$_POST['disc'];
	$PromvalidityN =$_POST['Promvalidity'];
	$PromodateN =$_POST['Promodate'];
	
	
	$sql = "UPDATE promo SET promoCode = '$idN',
							 promoName = '$Pname',
							 Validity = '$PromvalidityN',
							 addedDate = '$PromodateN',
							 discountPercent = '$discN'
						WHERE ID = '$DBidN'";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> 
				alert('Record Updated Successfully');
			  </script>" ;
		header("Location:ManagePromos.php");
	}
	
	else
	{
		echo "<script>
				alert('Error in updating record')
			  </script>";
	}
	
	mysqli_close($conn);
	
	
	
?>