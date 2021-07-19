<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Login Page</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel = "stylesheet" href ="styles/headerFile.css" >
		<!--<link rel="stylesheet"  href="styles/login.css">-->
		<link rel="stylesheet"  href="styles/log.css">
		<link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">
		<script src = "JS/ViewRevenue.js"></script>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
       
        
		<script src="script/menu.js"></script>
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
	</head>
	<body>
        <div class="headerBack">
            <div class="headerTop">
                <div class="headerLogo">
                    <img src="images/logo.png">
                    <p>Westeros Foods</p>
                </div>

                <div class="signupLogin">
                    <div class="userImage">
                        <img src="images/userxx.png">
                    </div>
                    <div class="buttonSection">
                        <button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Login/Sign Up</button>
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="../Agil/home.html" class="active">Home</a></li>
                    <li><a href="../Shahdy/myFinal/mm.php">Our Menu</a></li>
                    <li><a href="../Shahdy/myFinal/aboutus.html">Why Westeros</a></li>
                    <li><a href="#">Contact Us</a></li>
					<li style="float:right"><a href="../Shahdy/myFinal/promo.php"> Promotions</a></li>
                
                </ul>
            </div>
        </div>
		</div>
		<br><br><br>
			<h2>
				<center>
					<p id = "para">Hey there WELCOME BACK!!!!</p>	
				</center>
			</h2><br><br>
		
		


		
		<div id="container">
		<div class = "columnL">
		<h3><center><i>Login With Your Account!!</i></center></h3>
		<hr><br>
			<form method="post" action="SubmitLogin.php" name="myForm"  onsubmit="return validateLoginForm()">
			
			<center>
			<label id="in">User Number</label><br>
			<input type="text" name="username" id="mn" placeholder="Mobile Number"   pattern="[0-9]{10,10}" title="Must contain only Numbers"><br />
			
			<label id="in1">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br /><br />
			</center>
			
			<center>
			<button type="submit" id="sub">Login</button>
			</center>
			</form>
			<center><a href="forgot.php" id="FYPL">Forgotten Your Password ?</a></center><br />
			<a href="registerform.php" id="NR"><center><button type="submit" id="btnNR">Not Registered?</button></a></center>
			<br><hr>
			
			</div>
		</div>
	

</body>

<body>
<footer>
        <div class="pageFooter">
            <div class="firstQuarter">
                <h6>Locater</h6>
                <address>
                    Westros Foods<br><br>
                    No-1/1, Peradeniya Road,<br><br>
                    Kandy,<br><br>
                    Zip-Code : 20000
                </address>
                <ul>
                    <li><span class="fa fa-phone"></span> +94 (081) 123 4567</li><br>
                    <li><span class="fa fa-envelope-o"></span> westros@gmail.com </li>
                </ul>
            </div>
            
            <div class="secondQuarter">
                <h6>Quick Links</h6>
                <ul>
                    <li><a href="#">Home</a></li><br>
                    <li><a href="#">Our Menu</a></li><br>
                    <li><a href="#">Why Westeros</a></li><br>
                    <li><a href="#">Contact Us</a></li><br>
                    <li><a href="#">Cart</a></li><br>
                </ul>
                
            </div>
            
            <div class="thirdQuarter">
                <h6>About Us</h6>
                <p>Westeros, a subsidiary of Yum! Brands, is a new home of food established on 2.03.2018. Since its inception Westeros has fast become a household name across Sri Lanka with its first restaurant at Union Place, Colombo 2.</p>
                
            </div>
            
            <div class="fourthQuarter">
            <h6>Grab Our Newsletter</h6>
                <form method="post" action="#">
                        <input type="text" value="" placeholder="Name"><br>
                        <input type="text" value="" placeholder="Email"><br>
                        <button type="submit" value="Submit" class="footerSubmit">Submit</button>
                </form>
            </div>
        </div>
        </footer>
		
	</body>	
</html>