<?php
	require 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FOOD STORE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet"  href="styles/footerFile.css">
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/AdminBody.css">
		<link rel="stylesheet"  href="styles/sidepane.css">
		<link rel="stylesheet"  href="styles/AdminWorkArea.css">
		<link rel="stylesheet"  href="styles/AdminTable.css">
		
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
		<script></script>
	</head>
	
	<body class="Adminbody">
		<header>
			<div class="headerBack">
				<div clas="headerTop">
					<div class="headerLogo">
						<img src="images/logo.png">
						<center>
							<p>Westeros Foods</p>
						</center>
					</div>

					<div class="signupLogin">
						<div class="adminImage">
							<a href="adminProfile.html"><img src="images/profile1.png"></a>
						</div>
						<div class="buttonSection">
							<form method="post" action="Adminlogout.php"> 
								<input name="logout" class="headerButton" type="submit" value="Log out"/>
							</form>
						</div>
					</div>
				</div>
        </div>
		</header>
		
		<div class = "sidepane">
			
			<h3> General</h3>
			<ul type = "none">
				<li><a href="adminHome.php">Dashboard</a></li>
				<li><a href="adminManageFoods.php">Foods</a></li>
				<li><a href="adminManageCategories.php">Categories</a></li>
			</ul>
			
			<h3> Sales</h3>
			<ul type = "none">	
				<li><a href ="../Agil/adminOrder.php">Orders</a></li>
				<li><a href="Pending.php">Pending</a></li>
				<li><a href ="ManagePromos.php">Promotions</a></li>
				<li><a href ="Customers.php">Customers</a></li>
				<li><a href="ManageReviews.php">Reviews</a></li>
			</ul>
			
			<h3> Revenue</h3>
			<ul type = "none">
				<li><a href="Adminsales.php">Income</a></li>
			</ul>
			
		</div>
		
		
		
		<div class ="workArea">
			
			<br/>
			<center>
				<div class= "AdminTable">
				
					<table border = "1" width ="100%">
					
						<tr>
							<th>Order ID</th>
							<th>Total</th>
							
						</tr>
						
						<!--get data from dataBase-->
						<?php
							$sql = "SELECT * FROM orders";
							
							$result = $conn->query($sql);
							
							if( $result -> num_rows > 0 )
							{
								
								$total=0;
								
								while( $row = $result->fetch_assoc() )
							
								{
									$id = $row['orderID'];
									
									echo "<tr>
											<td>" .$row['orderID']. "</td>
											<td>" .$row['totalAmount']."</td>   
											</tr>";
									
									$total = $total + $row['totalAmount'];		
								}
							}
							
							else
							{
								echo "0 Results";
							}
							
						echo "</table>";
						?>
						<br><br>
						<label>Total = <?php echo $total; ?> </label>
				
				</div>
			</center>
			
        </div>
		
		<br/>
		<hr>
        
	</body>
	
	
</html>