<?php
	require 'config.php';
?>

<!DOCTYPE html>
	<html>

	<head>
		<title> Add Order </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel = "stylesheet" href ="styles/aaa.css" >
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/Adminforms.css">
		
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
			<h2 style="color:#262626;font-size:30px;">Add Orders</h2>
			<br><br>
		</center>	
	
		<center>
			<div class="Adminform">
				<form method ="post" action ="submitAddItems.php">
					
					<!--<label>Order ID </label>
					<input type ="text" name="oid"><br><br>-->
					
					<label>Food Code </label>
					<input type ="text" name="ofCode"><br><br>
					
					<label>Quantity</label>
					<input type ="text" name="oqty"><br><br>
					
					<label>Promo Code </label>
					<input type ="text" name="opCode"><br><br>
					
					<label>Delivary Mode</label>
					
					<input type="submit" value="Add Order">
				
				</form>
			</div>
		</center>
		

	</body>	
</html>