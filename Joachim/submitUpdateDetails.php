<?php

		require 'config.php';

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


		<?php
	
	#extract values entered in text box
	#pass the name of text box
				$Phone = $_POST['phone'];
				$cardNo = $_POST['number'];
				$cvv = $_POST['cvv'];
				$expmonth = $_POST['expmonth'];
				$expyear = $_POST['expyear'];
				
				
	
	$sql = "UPDATE card_detail SET
				cardNumber = '$cardNo' ,
				CVV = '$cvv' ,
				expmonth = '$expmonth' , 
				expyear = '$expyear' 
				WHERE Phone = '$Phone'";
	
	#to update convert the id disabled to readonly
	if(mysqli_query($con , $sql)) 
	{
    echo "<script> alert('Record updated successfully') </script>";
	header("Location:userprofiles.php");
	}
	
	else 
	{
		echo "<script>alert('Error updating record: ')</script>";
	}
	
	
	
	
	mysqli_close($con);

	?>
































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