<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title> Admin Order </title>
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
                        <form method="post" action="../Admin/Adminlogout.php"> 
							<input name="logout" class="headerButton" type="submit" value="Log out"/>
						</form>
                    </div>
                </div>
            </div>
		</div>	
		
		<div class = "sidepane">
			
			<h3> General</h3>
			<ul type = "none">
				<li><a href="../Admin/adminHome.php">Dashboard</a></li>
				<li><a href="../Admin/adminManageFoods.php">Foods</a></li>
				<li><a href="../Admin/adminManageCategories.php">Categories</a></li>
			</ul>
			
			<h3> Sales</h3>
			<ul type = "none">	
				<li><a href ="AdminOrders.php">Orders</a></li>
				<li><a href="../Admin/Pending.php">Pending</a></li>
				<li><a href ="../Admin/ManagePromos.php">Promotions</a></li>
				<li><a href ="../Admin/Customers.php">Customers</a></li>
				<li><a href="../Admin/ManageReviews.php">Reviews</a></li>
			</ul>
			
			<h3> Revenue</h3>
			<ul type = "none">
				<li><a href="../Admin/Adminsales.php">Income</a></li>
				<li><a href="../Admin/Reports.php">Reports</a></li>
			</ul>
			
		</div>
		
        <br><br>
		<center>
			<h2>User Order History</h2>
			<br><br>
			<div class="ordHisTable">
			<a href="addOrder.php"><button id="uAddOrd">Add Order</button></a><br><br>
				<table id="myTable" border = "1" width ="100%">
				
					<tr>
						<th>Id</th>
						<th>Total Amount</th>
						<th>Discount Amount</th>
						<th>Phone No</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				
				<!--get data from dataBase-->
				<?php
					$sql = "SELECT *FROM orders";
					$result = $conn->query($sql);
					
					if($result -> num_rows >0)
					{
						
						
						while( $row = $result->fetch_assoc() )
					
						{
							$id = $row['ID'];
							echo "<tr>
									<td>" .$row['ID']. "</td>
									<td>" .$row['totalAmount']."</td> 
									<td>" .$row['discountedAmount']."</td> 
									<td>" .$row['Phone']."</td>
									<td><button type='submit'><a href='editOrder.php?id=$id'>EDIT</a></button></td>
									<td><button type='submit'><a href='deleteOrder.php?id=$id'>DELETE</a></td>
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