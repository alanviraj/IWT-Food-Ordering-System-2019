<?php


	require 'config.php';

	$category = $_POST['Cname'];
	
	$sql = "INSERT INTO 
	category(Category_ID,Name)
	VALUE('','$category') ";

	//if($conn -> query($sql))  
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert('Record inserted successfully')
		</script>";
		header("Location:adminManageCategories.php");
	}
	else
	{
		echo "<script>
		alert('ERROR')
		</script>";
	}
	
	$conn->close();
?>