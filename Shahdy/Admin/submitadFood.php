<?php

	require 'config.php';
	
	if(isset($_POST['upload']))
	{
		$foodId = $_POST['ID'];
		$itemname = $_POST['FoodName'];
		$price = $_POST['Price'];
		$description = $_POST['Description'];
		$availability = $_POST['Availability'];
		$category=$_POST['Category'];
		
		
		//path to store the uploaded files
		$target="upload/". basename($_FILES['image']['name']) ;
		
		// get the image details
		$image= $_FILES['image']['name'];		
		
		$sql= "INSERT INTO food(foodCode,foodName,unitPrice,description,Availability,category,image,ID) 
			   VALUE ('$foodId','$itemname','$price','$description','$availability','$category','$image','')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			alert('Record inserted successfully')
			</script>";
			header("Location:adminManageFoods.php");
		}

		else
		{
			echo "<script>
			alert('ERROR')
			</script>";
		}
		
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target ))
		{
			$msg="Image update success";
		}
		
		else
		{
			$msg="Error";
		}
		
	}
	
	
	
	// $sql = "INSERT INTO 
	// food(foodCode,foodName,unitPrice,description,Availability,imagePath,category)
	// VALUE('$foodId','$itemname','$price','$description','$availability','','$category')";

	// if($conn -> query($sql))  
	// if(mysqli_query($conn,$sql))
	// {
		// echo "<script>
		// alert('Record inserted successfully')
		// </script>";
		// header("Location:adminManageFoods.php");
	// }
	
	// else
	// {
		// echo "<script>
		// alert('ERROR')
		// </script>";
	// }
	
	// $conn->close();

?>