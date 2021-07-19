<?php

	require 'config.php';
	
	$idN =$_POST['id'];
	$nameN =$_POST['Cname'];
	
	
	$sql = "UPDATE category SET Name = '$nameN' 
						WHERE Category_ID = '$idN'";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> 
				alert('Record Updated Successfully');
			  </script>" ;
		header("Location:adminManageCategories.php");
	}
	
	else
	{
		echo "<script>
				alert('Error in updating record')
			  </script>";
	}
	
	mysqli_close($conn);
	
	
	
?>
