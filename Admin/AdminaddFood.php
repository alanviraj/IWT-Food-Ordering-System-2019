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
		<link rel="stylesheet"  href="styles/sidepane.css">
		<link rel="stylesheet"  href="styles/AdminWorkArea.css">
		<link rel="stylesheet"  href="styles/AdminTable.css">
		<link rel="stylesheet"  href="styles/Adminforms.css">
		
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
		<script src="js/addfood.js"></script>  
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
			</ul>
			
		</div>
		
		
		
		<div class ="workArea">
			<center>
				<div>
					<br/>
					<br/>
					<form class="Adminform" name="foodform" method="post" action="submitadFood.php" enctype="multipart/form-data" onsubmit = "return validation()">
						<label>Food ID</label>
						<input type="text" name="ID" placeholder=" M01"></input><br/><br/>
						
						<label> Food Name </label>
						<input type ="text" name ="FoodName" placeholder=" Enter Name" ></input><br/><br/>

						<label> Unit Price </label>
						<input type ="text" name ="Price" placeholder=" Enter Unit Price"></input><br/><br/>
						
						<label> Description </label>
						<textarea name ="Description" placeholder=" Enter Description"></textarea><br/><br/><br/><br/><br/><br/>
						
						<label> Availability </label>	
						<select name="Availability">
							<option value="1">1</option>
							<option value="0">0</option>
						</select><br/><br/><br/>
						
						<label> Category </label>
						<select name="Category">
							<option value="Chinese">Chinese</option>
							<option value="Indian">Indian</option>
							<option value="Srilankan">Srilankan</option>
							<option value="Westerose">Westerose</option>
							<option value="Japanese">Japanese</option>
							<option value="Italian">Italian</option>
							<option value="Mexican">Mexican</option>		
						</select><br/><br/>	
						
						<input type="hidden" name="size" value="1000000" />  
						
						<div>
							<input type="file" name ="image" >
						</div>
						
						<br><br><br>
						
						<input type="submit" name="upload" value="insert"> </input>
					</form>
				</div>
			</center>
        </div>
		
		<br/>
		<hr>
        
	</body>
</html>
