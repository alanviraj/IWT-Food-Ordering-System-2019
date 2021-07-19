<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title> Admin Order </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet"  href="styles/footerFile.css">
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/ADMINSTYLES.css">
		<link rel="stylesheet"  href="styles/sidepane.css">
		<link rel="stylesheet"  href="styles/AdminWorkArea.css">
		<link rel="stylesheet"  href="styles/AdminTable.css">
		<link rel="stylesheet"  href="styles/AdminBody.css">
		<link rel="stylesheet"  href="styles/login.css">
		
		
		<script src="js/jsLogin.js"></script>
	
	</head>
	<body>
        <div class="headerBack">
            <div>
                <div class="headerLogo">
                    <img src="images/logo.png">
                    <p style="text-align:center">Westeros Foods</p>
                </div>

                <div class="signupLogin">
                    <div class="adminImage">
                        <img src="images/profile1.png">
                    </div>
                    <div class="buttonSection">
                        <form method="post" action="Adminlogout.php"> 
							<input name="logout" class="headerButton" type="submit" value="Login"/>
						</form>
                    </div>
                </div>
            </div>
		</div>	
		
        <br><br>
		<center>
			<p id = "para">Welcome Admin</p>
		</center>
		
		<div id="container">
		<div class = "columnL">
		<h3><center><i>Login With Your Account!!</i></center></h3>
		<hr><br>
			<form method="post" action="submitAdminLogin.php" name="myForm"  onsubmit="return validateLoginForm()">
			
			<center>
			<label id="in">User Name</label><br>
			<input type="text" name="username" id="mn" placeholder="Mobile Number"   pattern="[a-zA-Z0-9]{6,18}"><br />
			
			<label id="in1">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br /><br />
			</center>
			
			<center>
			<button type="submit" id="sub">Login</button>
			</center>
			</form>
			
			
			</div>
		</div>
	

	</body>	
</html>