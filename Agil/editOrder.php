<?php
	require 'config.php';
?>

<!DOCTYPE html>
	<html>

	<head>
		<title> Edit Order </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel = "stylesheet" href ="styles/aaa.css" >
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		
		<script src="js/jscript.js"></script>
	
	</head>
	<body>
        <div class="headerBack">
            <div>
                <div class="headerLogo">
                    <img src="images/logo.png">
                    <p>Westeros Foods</p>
                </div>

                <div class="signupLogin">
                    <div class="adminImage">
                        <img src="images/profile1.png">
                    </div>
                    <div class="buttonSection">
                        <form method="post" action="logout.php"> 
							<input name="logout" class="headerButton" type="submit" value="Log out"/>
						</form>
                    </div>
                </div>
            </div>
		</div>	
        <br><br>
		<center>
			<h2>Edit User Order History</h2>
			<br><br>
		</center>	
	
		<?php
			$recordID = $_GET['id'];
			
			$sql = "SELECT* FROM orders WHERE id = $recordID";
			
			$result = $conn->query($sql);
			
			if($result-> num_rows > 0)
			{
				while($row=$result -> fetch_assoc())
				{
					$id = $row['ID'];
					$tAmount = $row['totalAmount'];
					$dAmount = $row['discountedAmount'];
					$phone = $row['Phone'];	
				}
				
			}
			
			else
			{
				echo "No Records";
			}
		
		
		?>
		
		<form method ="post" action ="submitUpdateOrder.php">
			
			<label> ID </label>
			<input type ="text" name="oid" value =<?php echo $id ?> readonly><br><br>
			
			<label>Total Amount </label>
			<input type ="text" name="otAmount" value =<?php echo $tAmount ?> ><br><br>
			
			<label>Discount Amount </label>
			<input type ="text" name="odAmount" value =<?php echo $dAmount ?> ><br><br>
			
			<label>Phone No </label>
			<input type ="text" name="ophone" value =<?php echo $phone ?>><br><br>
		
			<input type="submit" value="Update Order">
		
		</form>
		
		

	</body>	
</html>