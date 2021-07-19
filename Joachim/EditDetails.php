<?php

		require 'config.php';

?>


	<!DOCTYPE html>
<html>

	<head>
		<title> Westeros|Payment </title>
		<meta  charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel = "stylesheet" href ="styles/headerFile.css">  
		<link rel = "stylesheet"  href = "styles/finalpayment.css">
		<link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">`
		<script src="../js/finalpayment.js"></script>
		
		<style> #extra{ display: none; }</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
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
                    <li><a href="#">Contact us</a></li>
                    <li style="float:right"><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Cart</a></li>
                </ul>
            </div>
        </div>
		
		<br /><br />


<body>


<?php
		
		#getting the url passed parameter to another variable
		
		$customerPhone = $_POST['phone'];
		
		#selecting the data relevant to the mentioned phonenumber
		
		$sql = "SELECT * FROM card_detail where Phone = '$customerPhone'";
	
		#$result = $con -> query($sql);
		
		  $result = mysqli_query($conn , $sql);
		
		if($result -> num_rows > 0  )
		{  #take specific row data to variable according to idea.
	
			while($row = $result -> fetch_assoc()) 
			{
				#reading the records of that particular row and storing them to variables
				
				$num = $row['cardNumber'];
				$type = $row['type'];	
				$cvNo = $row['CVV'];
				$month =$row['expmonth'];
				$year =$row['expyear'];
				
			}
		}
		
		else
		{
			echo "No records";
		}
		
		
		mysqli_close($conn);
		#$con -> close();
	
		?>
		
		<div  style="width: 80%"  class = "bigcontainer">
	
	    <div class = "fixedcontainer">
		
			<form name = "paymentform" method = "post" action = "submitUpdateDetails.php"> <!--onsubmit = "return validation()" -->
		
		<h2 style = "color : white ;" >Enter your card details <i class="fa fa-credit-card" aria-hidden="true"></i></h2><br />
				
				 <label for = "fname" >Accepted Cards</label>
				 
			            <div class="icon-container">

							  <i class="fa fa-cc-visa" style="color:navy;" id="visaicon"></i>
							  
							  <i class="fa fa-cc-mastercard" style="color:orangered;" id="mastericon"></i>
			             </div>
		
		<h3>SELECT TYPE OF PAYEMNT</h3>
		
		<input type = "radio" name = "card">Credit card
		<input type = "radio" name = "card">Debit card<br /><br />
					
		<label>Name of CardHolder </label><br /><br />
		<input type = "text" name = "name" placeholder = "Hannah Baker" ><br /><br />
		
		<label>Phone number of CardHolder </label><br /><br />  
		<input type = "text" name = "phone" placeholder = "Enter the phone number used as ur id" value = <?php echo $customerPhone ;?> readonly > <br /><br />

	    <label>Card number</label><br /><br />
		<input type = "text" name = "number" placeholder = "1111-2222-3333-4444"  onblur="creditcolour()" value = <?php echo $num ;?> > <br /><br />


		<label >Exp Month</label><br /><br />
	    <input type="text"  name="expmonth" placeholder = "2" value = <?php echo $month ;?> > <br /><br />
					 
	    <label >Exp Year</label><br /><br />
	    <input type="text"  name="expyear" placeholder = "2019" value = <?php echo $year ;?> > <br /><br />

		<label>CVV</label><br /><br />
		<input type = "text" name = "cvv" placeholder = "2345" value = <?php echo $cvNo ;?> > <br /><br />
					
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