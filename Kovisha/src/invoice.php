
<?php
	
	
	//first start session environment
 
	session_start(); 


?>	
	
 
	
	
	
	
		<!DOCTYPE html>
<html>

	<head>
		<title> Westeros|Invoice</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="../css/footerFile.css" rel="stylesheet" type="text/css" media="all"> 
		
        <link rel = "stylesheet" href ="../css/headerFile.css" >
		
		<link rel = "stylesheet" href = "../css/invoice.css" >
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
	</head>
	<div class="headerBack">
            <div clas="headerTop">
                <div class="headerLogo">
                    <img src="../images/logo.png">
                    <p style = "text-align : center ;">Westeros Foods</p>
                </div>

                <div class="signupLogin">
                    <div class="userImage">
                        <a href="../../Joachim/userprofiles.php"><img src="../images/user.png"></a>
                    </div>
                    <div class="buttonSection">
                        <button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Login/Sign Up</button>
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="../../Agil/home.html" class="active">Home</a></li>
                    <li><a href="../../Shahdy/myfinal/mm.php">Our Menu</a></li>
                    <li><a href="../../Shahdy/myfinal/aboutus.html">Why Westeros</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li style="float:right"><a href="../../Shahdy/myfinal/promo.php"> Promotions</a></li>
                </ul>
            </div>
        </div>
		
		<br /><br />
	<body>

	<div id = "invoice" >
	
		<div class = "container">

			<h2>Order Placed Successfully  <i class="fa fa-thumbs-up" aria-hidden="true"></i></h2>
			<br/>
			
			
			<?php

			echo "Name :   " . $_SESSION['firstname']." ".$_SESSION['lastname']."<br/>"."<br/>" ."<br/>";
	
			echo "Contact number :  "  .  $_SESSION['Phone'] ."<br/>" ."<br/>" ."<br/>";  
			
			echo "Email :   "  .  $_SESSION['Email'] ."<br/>" ."<br/>" ."<br/>"; 

				if($_SESSION['altDeliveryAddress'] == "")
				{
					echo "Delivery Address :  "  .  $_SESSION['Address'] ."<br/>" ."<br/>" ."<br/>"; 
				}
				
				else
				{
					echo "Delivery Address :  "  .  $_SESSION['altDeliveryAddress'] ."<br/>" ."<br/>" ."<br/>";
				}
			
			

			#echo "Type of order :  "  .  $_SESSION['Order'] ."<br/>" ."<br/>" ."<br/>"; 

			#echo "Type of payment :  "  .  $_SESSION['Type'] ."<br/>" ."<br/>" ."<br/>";  
			
			  echo "<table border='2'  cellspacing='0'>

            
            <tr>
            <th>Sub Total</th>
            <th>Discounted Amount</th>
			<th>Service Charge</th>
            <th>Net Total</th>

            </tr>";
			
			
			
			echo "<tr>";
            echo "<td>" .$_SESSION['tot'] . "</td>";
			echo "<td>" .$_SESSION['discount'] . "</td>";
			echo "<td>" .$_SESSION['service'] . "</td>";
			echo "<td>"  .$_SESSION['netTotal'] .  "</td>";
              echo "</tr>";
			  
			echo "</table>" ;
			
			
 
		?> 

	
	
		</div>



	</div>
		<br /><br /><br /><br >


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