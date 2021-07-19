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
				<?php					
					//echo "itemId".$_GET['id'];
					$recordID = $_GET['id'];
					
					$sql="SELECT* FROM category WHERE Category_ID =$recordID";
					
					$result = $conn->query($sql);
					
					if( $result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
							$id = $row['Category_ID'];
							$name = $row['Name'];
						}	
						
					}
					
					else
					{
						echo "No Record";
					}
				?>
				
				<br><br>
				<form class="Adminform" method ="post" action ="submitEditCategory.php">
					
					<label>Category ID</label>
					<input type ="text" name="id" readonly value =<?php echo $id; ?> ><br><br>
					
					<label>Category</label>
					<input type ="text" name="Cname" value =<?php echo $name; ?>><br><br>
					
					<input type="submit" value ="submit">
					
				</form>
			</center>
        </div>
		
		<br/>
		<hr>
        
	</body>
	
	
</html>