<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Forgot Password Page</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel = "stylesheet" href ="styles/headerFile.css">
		<link rel="stylesheet"  href="styles/forgot.css">
		<link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">
		<script src = "JS/ViewRevenue.js"></script>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">
        
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
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="viewmenu.html">Our Menu</a></li>
                    <li><a href="#">Why Westeros</a></li>
                    <li><a href="#">Contact Us</a></li>
                
                </ul>
            </div>
        </div>
		
		<br><br>
			<h2>
				<center>
					Re-set Your Password!!!
				</center>
			</h2><br>
		
		<div class="containerx">
		<center>
		<form method="post" name="Forgot" action="submitforgot.php" onsubmit="return validateForgotPage()">
		<h3><center><i>Forgot your password?</i></center></h3><br>
		<hr>
		<p>We can help you to reset your Password.First,enter your Mobile Number & follow the instructions below.</p>
		<br><br>
		
			<label id="in6"><b>Enter Your Mobile Number</b></label>
			<input type="text" name="number" placeholder=" Mobile number" pattern="[0-9]{10,10}" 
			title="Mobile number should contain only number">
		
		<br>
		<a href="#"><button id="btnc">Continue</button></a><br><br>
		
		
		<hr>
		<a href="loginO.php">Back to login?</a>
		</form>
		</center>
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