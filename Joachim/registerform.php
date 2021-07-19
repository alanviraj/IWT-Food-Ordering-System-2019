

	<!--// first start session environment
 
	session_start(); 
	
	// store data in session variable through user
 
	$_SESSION['firstname']= $_POST['fname'];
 
    $_SESSION['lastname']= $_POST['lname'];  
	
	$_SESSION['Phone']= $_POST['number'];  

	$_SESSION['Email']= $_POST['email']; 
	
	$_SESSION['Address']= $_POST['address']; -->
	
	





<!DOCTYPE html>
<html>

	<head>
		<title>Registration Page</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel = "stylesheet" href ="styles/headerFile.css">
		<link rel="stylesheet"  href="styles/registerform.css">
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
		
		
			
		
		<br>
				<center>
					<h2>Register YourSelf !!!</h2>
				</center>
							
				
				
					<div class="para1">
						<p id="firstk">
							<center>
								Registering with WESTEROS FOODS allows you to access your<br>order status and history.Just fill in the fields<br>
								below,and we"ll get a new account set up for<br>you in no time.We will only ask you for<br>necessary information to make the purchase<br>
								process faster and easier.
							</center>	
						</p><br><br>
					</div>

		
		<div class="containerR" >
		
		<!--action = "submitUserDetails.php"-->
		
			<center>
				<form name="Register" method = "post" action = "submitUserDetails.php" onsubmit="return validateRegisterForm()">
				
							<label id="in">First  Name</label>
							<input type="text" id="firstname" name="fname" placeholder="Enter your firstname" 
							title="Must contain a Uppercase and Lowercase letters" pattern="[A-Za-z]+${2,15}"><br>		
						
							<label id="in">Last  Name</label>
							<input type="text" id="lastname" name="lname" placeholder="Enter your lastname" size="40" 
							title="Must contain a Uppercase and Lowercase letters" pattern="[a-zA-Z]{2,15}"><br>			
					
						
						
							<label id="in1">Mobile  Number</label>
							<input type="text" name="number" placeholder="Enter your number" title="Must contain only Numbers" pattern="[0-9]{10,10}"size="40"><br>
						
						
						
							<label id="in2">E-mail</label><br>
							<input type="text" id="e-mail" name="email" placeholder="Enter your e-mail" title="eg:- abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" size="40"><br>
					
				
							<label id="in3">Address</label><br>
							<input type="text" id="address" name="address"  placeholder="Enter your address"><br>
	
							<label id="in">Password</label>
							<input type="password" name="password" id="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
							title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" size="40" >
							<br><input type="checkbox" onclick="myFunction()"><label id="in5">Show Password</label><br><br>
							
		
				
							<label id="in4">Confirm  Password</label>
							<input type="text" name="cpassword" id="cpassword"placeholder="Confirm your password" onclick="myFunctionY()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
							title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"size="40"><br>
							
							<center><input type="radio" name="use" value="Use your Mobile Number as Username"   required><label id="in5">Use your Mobile Number as Username</label></center><br>
							
							
							
							<center><input type="checkbox" class="chkb" name="cbox" required><label id="in5">Accept Privacy & Policy Terms</label></center><br><br>
						
							
							<center><button type="submit" id="btnregister" onclick="register()"><!--class="btn"-->Register</button></center>
						
				</form>
			</center>
		</div>
		
</body>

	
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
                <form method="post" action="loginO.php">
                        <input type="text" value="" placeholder="Name"><br>
                        <input type="text" value="" placeholder="Email"><br>
                        <button type="submit" value="Submit" class="footerSubmit">Submit</button>
                </form>
            </div>
        </div>
        </footer>
		
		
</html>
