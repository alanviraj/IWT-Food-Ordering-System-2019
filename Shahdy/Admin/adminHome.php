

<!DOCTYPE html>
<html>
	<head>
		<title>FOOD STORE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet"  href="styles/footerFile.css">
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/ADMINSTYLES.css">
		<link rel="stylesheet"  href="styles/sidepane.css">
		<link rel="stylesheet"  href="styles/AdminWorkArea.css">
		<link rel="stylesheet"  href="styles/AdminTable.css">
		<link rel="stylesheet"  href="styles/AdminBody.css">
		
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
		
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
					<a href="AdminOrders.php">
						<table>
							<tr>
								<img src="images/order.png"></img>
							</tr>
							<tr><b> Orders</b></tr>
							
						</table>
					</a>
				</div>
				
				<div class="TABLE2">
					<a  href ="AdminRevenue.php">
						<table>
							<tr>
								<img src="images/revenue1.png"></img>
							</tr>
							<tr><b> Revenue</b></tr>
						</table>
					</a>
				</div>
				
				<div class="TABLE3">
					<a href="AdminStatics.php">
						<table>
							<tr>
								<img src="images/revenue2.png"></img>
							</tr>
							<tr><b> Statistics</b></tr>
						</table>
					</a>
				</div>
			</center>
			
			<br/><br/><br/><br/><br/>			
			
			<center>
				<div class="TABLE1">
						<table>
							<tr>
								<td><b>Customers<b></td>
							</tr>
							<tr><td><b></b></td></tr>
						</table>
						<br/><br/>
				</div>
				
				<div class="TABLE2">
						<table>
							<tr>
								<td><b>Orders</b></td>
							</tr>
							<tr><td><b></b></td></tr>
						</table>
						<br/><br/>
				</div>
				
				<div class="TABLE3">
						<table>
							<tr>
								<td><b>Sales<b></td>
							</tr>
							<tr><td><b></b></td></tr>
						</table>
						<br/><br/>
				</div>
				</center>
				<br/><br/><br/>
			<center><p><img src="images/chart.png" height ="30%" width="40%"> </img></p></center>
			
			
		</div>
		
		<br/>
		<hr>
        
	</body>
	
	
</html>