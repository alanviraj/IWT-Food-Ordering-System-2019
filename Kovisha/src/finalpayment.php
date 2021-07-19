	
	
	<?php
	
	// first start session environment
 
	session_start(); 
	
	// store data in session variable through user
 
	$_SESSION['altDeliveryAddress']= $_POST['altdelivery'];
 
    $_SESSION['UserLandmark']= $_POST['landmark'];  
	
	
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
	<script src = "../js/finalpayment.js"></script>
	<style> #invisible{ display: none; }</style>
	<style> #extra{ display: none; }</style>
	<style>body{background-color: gray;}</style>
	<!-- <style> body{background-color: gray;}</style> -->
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


	<div  style="width: 80%" class = "bigcontainer" >
	
	    <div class = "fixedcontainer">
			
			<form name="deliveryForm" method = "post"> 
			
                <div id = "confirm">  <!--Container with address entered in user profile -->
				
		
			
                     <h3>Confirm your delivery address :</h3>  
					 
						<?php echo"<h4>". $_SESSION['Address'] . "</h4>" ."<br />" ;?>
					
						
                   
                    <input type="checkbox" name="checker" onclick="checkboxValidation()">No, I want it delivered to a different address.
					
                   
					
                </div>
				
		    </form>  
			
		</div>
		
		 <div class = "fixedcontainer" id="newAdDiv"> <!--Container that appears only if checkbox is checked -->
				
					<form name = "NewAddressForm" method = "post">
                        <p>Delivery Address</p>
                            <textarea class="textArea" name = "altdelivery"></textarea><br>
                        <p>LandMark</p>
                            <textarea class="textArea" name = "landmark"></textarea><br>

							<input type = "submit" value = "Submit" id = "invisible">
						
					</form>
                </div>
				
					<br /><br />
					
		<div class = "fixedcontainer" id = "pay">
		
			<h2>ORDER PAYMENT DETAILS</h2>
			
			<label>Special Note</label><br /><br />
			<textarea class="textArea" placeholder="Please use English and omit using emojis....."></textarea><br /><br />
			
			
			  <input type="radio" checked="checked" name="cardcash" value="Yes" id="yes" class="static_class" />
	          <label for="yes" >Pay by Card</label>
	          <input type="radio" checked="checked" name="cardcash" value="No" id="no" class="static_class"/>
	          <label for="no">Pay by cash</label><br /><br />


		</div>
			
	<div id = "extra">
			
		<div class = "fixedcontainer" id = "cash">
			
			<form name = "paymentform" method = "post" action = "submitDetails.php" onsubmit = "return validation()">
			
				<h2 style = "color : white ;" >Enter your card details <i class="fa fa-credit-card" aria-hidden="true"></i></h2><br />
						
				<label for = "fname" >Accepted Cards</label>
				 
				<div class="icon-container">

				  <i class="fa fa-cc-visa" style="color:navy;" id="visaicon"></i>
				  
				  <i class="fa fa-cc-mastercard" style="color:orangered;" id="mastericon"></i>
				</div>
				
				<h3>SELECT TYPE OF PAYEMNT</h3>
				
				<input type = "radio" name = "card" value = "credit">Credit card</input>
				<input type = "radio" name = "card" value = "debit">Debit card</input><br /><br />
							
				<label>Name of CardHolder </label><br /><br />
				<input type = "text" name = "name" placeholder = "Hannah Baker" ><br /><br />
				
				<label>Phone number of CardHolder </label><br /><br />
				<input type = "text" name = "phone" placeholder = "Enter the phone number used as ur id" ><br /><br />

				<label>Card number</label><br /><br />
				<input type = "text" name = "number" placeholder = "1111-2222-3333-4444" onblur = "creditcolour()"><br /><br />


				<label >Exp Month</label><br /><br />
				<input type="text"  name="expmonth" placeholder = "2"><br /><br />
							 
				<label >Exp Year</label><br /><br />
				<input type="text"  name="expyear" placeholder = "2019"><br /><br />

				<label>CVV</label><br /><br />
				<input type = "text" name = "cvv" placeholder = "2345"><br /><br />
							
				<a href="invoice.php"><input type = "submit" name = "Submit" value = "Submit and Place Order" id = "btn" onclick = "submitBothNValidate()" ></a>
			
			</form>
		
		</div>
	</div>
	
	<div class = "fixedcontainer "id = "confirmpay">
	
	<form name = "checkform" method = "post" action = "invoice.php">
	
		<input type = "checkbox" id="chkAgree" onclick = "goFurther()">I have read & agreed to the <a href = "#">Terms and conditions</a><br /><br />
		
		<button name = "place" class = "placebtn" id = "btnsubmit" value="Submit" ><a href = "invoice.php">Place order</a></button>
	
	</form>
	
	</div>
	
	<br /><br />
	
	
	
	</div>
	
	 <script src="http://code.jquery.com/jquery.js"></script> <!-- script to control radio button div-->
    <script type="text/javascript">
      $(function(){
        $(".static_class").click(function(){
          if($(this).val() === "Yes")
            $("#extra").show("fast");
          else
            $("#extra").hide("fast");
        });
      });
    </script>

	<script type="text/javascript">
      $(function(){
        $(".static_class").click(function(){
          if($(this).val() === "No")
            $("#confirmpay").show("fast");
          else
            $("#confirmpay").hide("fast");
        });
      });
    </script>


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