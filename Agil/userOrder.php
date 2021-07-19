<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title> User Order </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel = "stylesheet" href ="styles/aaa.css" >
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/sidepane.css">
		<link rel="stylesheet"  href="styles/table.css">
		
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
			<h2>User Order History</h2>
			<br><br>
			<div class="ordHisTable">
			
				<table border = "1" width ="100%">
				
					<tr>
						<th>ID</th>
						<th>Total Amount</th>
						<th>Discount Amunt</th>
						<th>Phone No</th>
						
					</tr>
				
				<!--get data from dataBase-->
				<?php
					session_start();
				
					$phone=$_SESSION['Phone'];
					// $phone=$_GET['phone'];	
					
					$sql = "SELECT *FROM customer_orders WHERE Phonecust = '$phone'";
					$result = $conn->query($sql);
					
					if($result -> num_rows >0)
					{
						
						
						while( $row = $result->fetch_assoc() )
					
						{
							$id = $row['id'];
							echo "<tr>
									<td>" .$row['id']. "</td>
									<td>" .$row['totalAmount']."</td> 
									<td>" .$row['discountedAmount']."</td> 
									<td>" .$row['Phonecust']."</td>
									
								</tr>";
						}
					}
					
					else
					{
						echo "0 Results";
					}
					
					echo "</table>";
				?>
				
			</div>
		</center>

	</body>	
</html>