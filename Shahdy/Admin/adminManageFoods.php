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
		<link rel="stylesheet"  href="styles/AdminBody.css">
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/ADMINSTYLES.css">
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
							<button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Logout</button>
						</div>
					</div>
				</div>
        </div>
		</header>
		
		<div class = "sidepane">
			
			<h3> General</h3>
			<ul type = "none">
				<li><a href="adminHome.html">Dashboard</a></li>
				<li><a href="adminManageFoods.php">Foods</a></li>
				<li><a href="adminManageImages.php">Images</a></li>
				<li><a href="adminManageCategories.php">Categories</a></li>
			</ul>
			
			<h3> Sales</h3>
			<ul type = "none">	
				<li><a href ="AdminOrders.php">Orders</a></li>
				<li><a href="Canceled.php">Canceled</a></li>
				<li><a href="Pending.php">Pending</a></li>
				<li><a href ="ManagePromos.php">Promotions</a></li>
				<li><a href ="Customers.php">Customers</a></li>
				<li><a href="ManageReviews.php">Reviews</a></li>
			</ul>
			
			<h3> Revenue</h3>
			<ul type = "none">
				<li><a href="Adminsales.php">Income</a></li>
				<li><a href="Reports.php">Reports</a></li>
			</ul>
			
		</div>
		
		
		
		<div class ="workArea">
			
			<br/>
				
			<center>
				<div class="TABLE1">
					<a href="AdminaddFood.php">
						<table>
							<tr><b> Add New Foods </b></tr>
						</table>
					</a>
				</div>
				<br><br>
				
				<div class= "AdminTable">
				
					<table border = "1" width ="100%">
					
						<tr>
							<th>ID</th>
							<th>Food Name</th>
							<th>Unit Price</th>
							<th>Description</th>
							<th>Availability</th>
							<th>Category</th>
							<th>Images</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						
						<!--get data from dataBase-->
						<?php
							$sql = "SELECT * FROM food";
							
							$result = $conn->query($sql);
							
							if( $result -> num_rows > 0 )
							{
								
								
								while($row=$result->fetch_assoc())
							
								{
									$id = $row['ID'];
									

									
									echo "<tr>
											<td>" .$row['foodCode']. "</td>
											<td>" .$row['foodName']."</td> 
											<td>" .$row['unitPrice']."</td> 
											<td>" .$row['description']."</td>
											<td>" .$row['Availability']."</td>  
											<td>" .$row['category']."</td> 
											<td><img src='upload/".$row['image']."' height='50px%' width='60px'></td> 
											<td><button type='submit'><a href='EditFoodData.php?id=$id'>Edit</a></button></td>
											<td><button type='submit'><a href='DeleteFoodData.php?id=$id'>Delete</a></button></td>
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
`			</center>
			
        </div>
	</body>
	
	
</html>
