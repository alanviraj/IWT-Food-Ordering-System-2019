<?php


	require 'config.php';

	$itemname = $_POST['ItemName'] ;
	$price = $_POST['Price'] ;
	$quantity = $_POST['Quantity'] ;
	$description = $_POST['Description'] ;

	$sql = "INSERT INTO 
	item(itemId,item_name,quantity,price,description)
	VALUE('','$itemname','$price','$quantity','$description')";

	//if($conn -> query($sql))  
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert('Record inserted successfully')
		</script>";
	}
	else
	{
		echo "<script>
		alert('ERROR')
		</script>";
	}
	
	//$conn->close();
	$sql2 ="SELECT * FROM item";
	$result = $conn -> query($sql2);
	if($result -> num_rows > 0)
	{
		while($row=$result -> fetch_assoc())
		{
			echo $row["itemId"]."-".$row["item_name"]."<BR>";
		}
	}
	else
	{
		echo "no result";
	}
	
	$conn->close();

?>