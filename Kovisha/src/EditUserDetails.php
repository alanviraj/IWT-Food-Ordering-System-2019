<?php

		require 'configurate.php';

?>


	<!DOCTYPE html>
<html>

	<head>
		<title> Westeros|Payment </title>
		<meta  charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="../css/footerFile.css" rel="stylesheet" type="text/css" media="all"> 
        <link rel = "stylesheet" href ="../css/headerFile.css" >
		
	<link rel = "stylesheet"  href = "../css/finalpayment.css">
	<script src="../js/finalpayment.js"></script>
	<style> #extra{ display: none; }</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	</head>
	<body>
        <div class="headerBack">
            <div class="headerTop">
                <div class="headerLogo">
                    <img src="../images/logo.png">
                    <p style = "text-align : center;">Westeros Foods</p>
                </div>

                <div class="signupLogin">
                    <div class="userImage">
                        <img src="../images/user.png">
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
                    <li><a href="#">Contact us</a></li>
                    <li style="float:right"><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Cart</a></li>
                </ul>
            </div>
        </div>
		
		<br /><br />


<body>


<?php
		
		#getting the url passed parameter to another variable
		
		$customerPhone = $_GET['phone'];
		
		#selecting the data relevant to the mentioned phonenumber
		
		$sql = "SELECT * FROM customer_detail where Phone = '$customerPhone'";
	
		#$result = $con -> query($sql);
		
		  $result = mysqli_query($con , $sql);
		
		if($result -> num_rows > 0  )
		{  #take specific row data to variable according to idea.
	
			while($row = $result -> fetch_assoc()) 
			{
				#reading the records of that particular row and storing them to variables
				
				$fname = $row['firstName'];
				$lname = $row['lastName'];	
				$address = $row['Address'];
				$mail =$row['Email'];
				$feed =$row['feedBack'];
				
			}
		}
		
		else
		{
			echo "No records";
		}
		
		
		mysqli_close($con);
		#$con -> close();
	
		?>
		
		<div  style="width: 80%"  class = "bigcontainer">
	
	    <div class = "fixedcontainer">
		
			
			<form name="Register" method = "post" action = "submitUpdatedUserDetails.php">  <!--onsubmit="return validateRegisterForm()">-->
		
		<h2 style = "color : white ;" >User details</h2><br />
				
				<label id="in">First  Name</label>
							<input type="text" id="firstname" name="fname" placeholder="Enter your firstname" 
							title="Must contain a Uppercase and Lowercase letters" pattern="[A-Za-z]+${2,15}" <?php echo $fname; ?> ><br>		
						
							<label id="in">Last  Name</label>
							<input type="text" id="lastname" name="lname" placeholder="Enter your lastname" size="40" 
							title="Must contain a Uppercase and Lowercase letters" pattern="[a-zA-Z]{2,15}" <?php echo $lname; ?>><br>			
					
						
						
							<label id="in1">Mobile  Number</label>
							<input type="text" name="number" placeholder="Enter your number" title="Must contain only Numbers" pattern="[0-9]{10,10}"size="40" value = <?php echo $customerPhone ;?> readonly><br>
						
						
						
							<label id="in2">E-mail</label>
							<input type="text" id="e-mail" name="email" placeholder="Enter your e-mail" title="eg:- abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" size="40" <?php echo $mail; ?>><br>
					
				
							<label id="in3">Address</label>
							<input type="text" id="address" name="address"  placeholder="Enter your address" <?php echo $address; ?>><br>
	
							<label id="in">Password</label>
							<input type="password" name="password" id="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
							title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" size="40" disabled >
							<br><input type="checkbox" onclick="myFunction()"><label id="in5">Show Password</label><br><br>
							
		
				
							<label id="in4">Confirm  Password</label>
							<input type="text" name="cpassword" id="cpassword"placeholder="Confirm your password" onclick="myFunctionY()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
							title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"size="40" disabled><br>
							
							<input type = "submit" name = "Submit" value = "Update" id = "btn">
						
							
							
		
		
		
		</form>
		
	</div>
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
                    <li><a href="#">cart.html</a></li><br>
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
	

</html>