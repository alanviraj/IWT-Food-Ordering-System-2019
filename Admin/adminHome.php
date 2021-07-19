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
				<div class="TABLE1">
					<a href="../Agil/adminOrder.php">
						<table>
							<tr>
								<img width="20%" height="20%" src="images/order.png"></img>
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
					<a href="#">
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

				<?php 
					$sql="SELECT COUNT(Phone) as total FROM customer_detail"; 
					$result = mysqli_query($conn,$sql);
					$val=mysqli_fetch_assoc($result);
					$ans=$val['total'];
					
					$sql2="SELECT COUNT(orderID) as total2 FROM orders"; 
					$result2 = mysqli_query($conn,$sql2);
					$val2=mysqli_fetch_assoc($result2);
					$ans2=$val2['total2'];
					
					$sql3="SELECT SUM(totalAmount) as total3 FROM orders"; 
					$result3 = mysqli_query($conn,$sql3);
					$val3=mysqli_fetch_assoc($result3);
					$ans3=$val3['total3'];
				?>
			
			<center>
				<div class="TABLE1">
						<table style="color:white">
							<tr>
								<td style="font-size:20px"><b>Customers<b></td><br>
							</tr>
							<tr><td><label style="margin-left:35px;font-size:35px;"><b><?php echo $ans?></b></label></td></tr>
						</table>
						<br/>
				</div>
				
				<div class="TABLE2">
						<table style="color:white">
							<tr>
									<td style="font-size:20px"><b>Orders</b></td><br>
							</tr>
							<tr><td><label style="margin-left:23px;font-size:35px;"><b><?php echo $ans2?></b></label></td></tr>
						</table>
						<br/>
				</div>
				
				<div class="TABLE3">
						<table style="color:white">
							<tr>
								<td style="text-align:center;font-size:20px"><b>Sales<b></td><br>
							</tr>
							<tr><td><label style="margin-left:0px;font-size:35px;"><b><?php echo "Rs.".$ans3?></b></label></td></tr>
						</table>
						<br/>
				</div>
				</center>
				<br/><br/><br/>
			<center><p><img src="images/chart.png" height ="30%" width="40%"> </img></p></center>
			
			
		</div>
		
		<br/>
		<hr>
        
	</body>
	
	
</html>