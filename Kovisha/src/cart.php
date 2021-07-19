<?php

	require 'configurate.php';

?>

		
	<!DOCTYPE html>
<html>

	<head>
		<title> Westeros|Bill summary</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="../css/footerFile.css" rel="stylesheet" type="text/css" media="all"> 
        <link rel = "stylesheet" href ="../css/headerFile.css" >
		
		<link rel = "stylesheet" href = "../css/cart.css" >
		
		<style> body{background-color: gray;}</style>
		<script src = "../js/cart.js"></script>
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
	</head>
	
        <div class="headerBack">
            <div clas="headerTop">
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

			<div> <!--Controlls the entire page -->
				
				<div class = "containerl" > <!-- Controlling tbe left portion-->
					
					<h2 style="color:white;">Your Basket  <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></h2><hr>
					
					<table  id = "customer" style = "color : white ;">
					
					
						<tr>
							<th>Item</th>
							<th>Price (Rs)</th>
							<th>Quantity</th>
							<th>SubTotal(Rs)</th>
						</tr>
						
						<?php
						
						#retrieving from " cart table"
									
						 $sql = "SELECT * FROM cart"; 
							
						 $result = $con->query($sql); 
			
		  #checking if the rows are selected 
				#result array containing rows and if that row is greater than 0; 
				
				 if($result -> num_rows > 0) 
				 { 
						while($row = $result -> fetch_assoc()) 
						{ 
						   $No = $row['itemNo'];
				
						   
						   echo "<tr> 
								  <td>" .$row['itemNo']. "</td> 
								  <td>" .$row['price']. "</td> 
								  <td>" .$row['quantity']. "</td> 
								  <td>" .$row['subTotal']. "</td>    
								  <td>" ."<i class='fa fa-trash' aria-hidden='true'><a href = 'deleteItemDetails.php?num=$No'>Delete</a></i>"."</td> 
								 </tr>"; 
				  } 
				  
				 }
				
				 else 
				  { 
					  echo "0 results"; 
				 } 
			
			
			?>
				</table>		
						
						
					
				<br />
					
				
					
						<?php
										
									$sql="SELECT sum(subTotal) as total FROM cart";

									$result = mysqli_query($con ,$sql);

									while ($row = mysqli_fetch_assoc($result))
									{
									   $total = $row['total'];
									  # $_SESSION['subtot']= $total;
									   #echo "<p>  Subtotal :  " . " " . $row['total'] . " " . "LKR" . "</p>" ;
									}
									
									
                                   #Shoudnt have more than one close connections .It leads to mysqli_fetch error
									#mysqli_close($con);
						?>

					<!--<div class = "final_balance">
					
				    <p>Subtotal :   <?php  echo $total . " " . "LKR"; ?>  </p>
					
					<p>Discounted Amount :  <?php echo $discountAmount . " " . "LKR"; ?> </p>
					
					<p>Service Charge : <?php 
										
											 $service = $total * (5 / 100);
											echo $total * ( 5 / 100 ) . " " . "LKR" ;
											
											?></p>
					
					<p>Total Amount : <?php   echo $total - $service - $discountAmount . " " . "LKR" ;?> </p>
					
					
					
				</div>-->
					
					
					
					<br /><br /><br /><br /><br /><br /><br /><br /><br />
					
					<div id = "shop">
					<button name = "Continue1"id= "btnshop" ><i class="fa fa-arrow-left" aria-hidden="true"></i>  Continue Shopping</button><br />
					<button name = "Cancel" id = "btnclose" ><i class="fa fa-times" aria-hidden="true"></i>  Cancel Order</button><br />
					
					</div>
					
				</div> <!-- End of left container-->
				
			
				
					<!--<div class = "containerr">
					
					<h2 style="color:white;">Order Summary</h2>

					<Button name = "Coupon" class = "couponbtn" onclick="openForm()">Enter your coupon Code <i class="fa fa-gift" aria-hidden="true"></i></button><br />
					
					<hr>
					
					<div id = "summary">
					
							<p>Subtotal : <?php echo  $total . " " . "LKR"; ?> </p><hr>
							<p>Discounted Amount : <?php echo $discountAmount . " " . "LKR"; ?></p><hr>
							<p>Service Charge (5%): <?php echo  $service . " " . "LKR" ;?></p><hr>
							<p>Net Total : <?php echo $total - $service . " " . "LKR" ; ?> </p><br /><hr>
							<p></p>
					</div>
					
					<Button name = "continue2" id = "btnorder" ><a href = "finalpayment.php"><i class="fa fa-arrow-right" aria-hidden="true">Continue Order</i></a></button>
					<br /><br /><br /><br />
					
					
					
					
					</div> --><!-- End of right container-->
					
					<br />
					
					<div class = "containerd">
					
					<div id = "delivery">
					
					<h2 style="color:white;">DECIDE YOUR DELIVERY!</h2>
					
					<div id = radios  style = "color : white;">
					
					<form name = "delivery">
					
					<input type = "radio" name = "Delivery">Home Delivery<br /><br />
					<input type = "radio" name = "Delivery">Take Away<br /><br />
					<input type = "radio" name = "Delivery">Dine in<br /><br />
					
					</form>
					</div>
					
					</div>
					
					
					</div><!--End of lower container -->
					
					
		<div class="form-popup" id="myForm" action = "post"> <!--controlling promo form beginning -->
		
			<form  name = "coupon" method = "post" action = "cart.php" class="form-container">

				<p style = "color : white ;">Enter the coupon code provided to you </p><br />
				
				<input type = 'text' name = 'coupon' id = 'couponIDD'>
				
				
				<button type="submit" class="btn" >Submit</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Close</button>

				
				</form>
			
		</div><!--closing the form pop up div -->
				
				
			
				
					<?php
						
				 $sql = "SELECT * FROM promo"; 
				  
				  $userEntry = $_POST['coupon'];
				
					$result = mysqli_query($con ,$sql);

									
		  # checking if the rows are selected 
				# result array containing rows and if that row is greater than 0; 
				
				 	
						while ($row = mysqli_fetch_assoc($result))
						 { 
						   $code = $row['promoCode']; 
						  //Email this to mohamedrifan@live.com
						
						/* echo "<tr> 
								 td>" .$row['promoName']. "</td> 
								 <td>" .$row['Validity']. "</td> 
								 <td>" .$row['addedDate']. "</td> 
								 <td>" .$row['discountPercent']. "</td>  
								 </tr>"; */
					   
							if($userEntry == $code)
							 {
								 echo "Promocode valid" ;
								$discount = $row['discountPercent'];
								$discountAmount = $total * $discount / 100 ;
								echo $discountAmount ;
								
								
							 }
							
							#else
							# {#
								# echo   "Promocode INvalid";
							# }
				
				 } 
				  
				  mysqli_close($con);
				  
				
				
			
				?>
				
				
				</div>
				
				
				<div class = "containerr">
					
					<h2 style="color:white;">Order Summary</h2>

					<Button name = "Coupon" class = "couponbtn" onclick="openForm()">Enter your coupon Code <i class="fa fa-gift" aria-hidden="true"></i></button><br />
					
					<hr>
					
					<div id = "summary">
					
							<p>Subtotal : <?php echo  $total . " " . "LKR"; ?> </p><hr>
							<p>Discounted Amount : <?php echo $discountAmount . " " . "LKR"; ?></p><hr>
							<p>Service Charge (5%): <?php echo  $service . " " . "LKR" ;?></p><hr>
							<p>Net Total : <?php echo $total - $service - $discountAmount . " " . "LKR" ; ?> </p><br /><hr>
							<p></p>
					</div>
					
					<Button name = "continue2" id = "btnorder" ><a href = "finalpayment.php"><i class="fa fa-arrow-right" aria-hidden="true">Continue Order</i></a></button>
					<br /><br /><br /><br />
					
					
					
					
					</div><!-- End of right container-->
				
			
					<div class = "final_balance">
					
				    <p>Subtotal :   <?php  echo $total . " " . "LKR"; ?>  </p>
					
					<p>Discounted Amount :  <?php echo $discountAmount . " " . "LKR"; ?> </p>
					
					<p>Service Charge : <?php 
										
											 $service = $total * (5 / 100);
											echo $total * ( 5 / 100 ) . " " . "LKR" ;
											
											?></p>
					
					<p>Total Amount : <?php   echo $total - $service - $discountAmount . " " . "LKR" ;?> </p>
					
					
					
				</div>


	</body>

	<br /><br /><br /><br >

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