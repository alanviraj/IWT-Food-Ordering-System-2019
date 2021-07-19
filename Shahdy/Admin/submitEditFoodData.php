<?php

	require 'config.php';
	
	$DBidN =$_POST['DBid'];
	$FidN =$_POST['Fid'];
	$FnameN =$_POST['Fname'];
	$FPriceN =$_POST['FPrice'];
	$FavailN =$_POST['Favail'];
	$FcatN =$_POST['Fcat'];
	$FDescN =$_POST['FDesc'];
	
	
	$sql = "UPDATE food SET foodCode = '$FidN', 
							foodName = '$FnameN', 
							unitPrice = '$FPriceN', 
							description = '$FDescN', 
							Availability = '$FavailN', 
							category = '$FcatN' 
						WHERE ID = '$DBidN'";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> 
				alert('Record Updated Successfully');
			  </script>" ;
		header("Location:adminManageFoods.php");
	}
	
	else
	{
		echo "<script>
				alert('Error in updating record')
			  </script>";
	}
	
	mysqli_close($conn);
	
	
	
?>