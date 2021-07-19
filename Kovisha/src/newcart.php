<?php
	session_start(); 
	require 'config.php';
	
	if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["foodCode"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["foodCode"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="mm.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["foodCode"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["foodCode"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  

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
		<link rel = "stylesheet" href = "../css/table.css" >
		
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
                        <a href="../../Joachim/userprofiles.php"><img src="../images/user.png"></a>
                    </div>
                    <div class="buttonSection">
                        <button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Logout</button>
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="../../Agil/home.html" class="active">Home</a></li>
                    <li><a href="../../Shahdy/myfinal/mm.php">Our Menu</a></li>
                    <li><a href="../../Shahdy/myfinal/aboutus.html">Why Westeros</a></li>
                    <li><a href="feed.html">Contact us</a></li>
                    <li style="float:right"><a href="../../Shahdy/myfinal/promo.php"> Promotions</a></li>
                </ul>
            </div>
        </div>
		
		<br /><br />
		
	<body>

			<!--<div> <!--Controlls the entire page -->
				
				<!--<div class = "containerl" > <!-- Controlling tbe left portion-->
					
					<!--<h2 style="color:white;">Your Basket  <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></h2><hr>
					
					<table  id = "customer" style = "color : white ;">
					
					
						<tr>
							<th>Item</th>
							<th>Price (Rs)</th>
							<th>Quantity</th>
							<th>SubTotal(Rs)</th>
						</tr>
						
					
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
				</table>-->

						<div style="clear:both"></div>  
						<br />  
						
						<center>
							<div  class="table-responsive" >  
								<div class="MenuTable">  
									<h1 style = " font-family:"Trebuchet MS", Helvetica, sans-serif;">Your Basket<i class="fa fa-cart-arrow-down" aria-hidden="true"></i></h1>  
									<table class="table table-bordered">  
										<tr>  
											<th width="40%">Item Name</th>  
											<th width="10%">Quantity</th>  
											<th width="20%">Price</th>  
											<th width="15%">Total</th>  
											<th width="5%">Action</th>  
										</tr>  
										
										<?php   
											if(!empty($_SESSION["shopping_cart"]))  
											{  
												$total = 0;  
												
												foreach($_SESSION["shopping_cart"] as $keys => $values)  
												{  
													// $Iname= $values["item_name"];
													// $Iqty= $values["item_quantity"];
													// $Iprice= $values["item_price"];
													
													
													
													// $sql="INSERT INTO temporder('ID','i_name','i_qty','i_price') 
														// VALUE ('','$Iname','$Iqty','$Iprice')";
													
													// mysqli_query($conn,$sql);if(mysqli_query($conn,$sql))
													// {
														// echo "<script>
														// alert('Record inserted successfully')
														// </script>";
														
													// }

													// else
													// {
														// echo "<script>
														// alert('ERROR')
														// </script>";
													// }	  
										?>  
										
													<tr>  
													<td><?php echo  $values["item_name"]; ?></td>  
													<td><?php echo  $values["item_quantity"]; ?></td>  
													<td> <?php echo  $values["item_price"]; ?>LKR</td>  
													<td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>LKR</td>  
													<td><a href="mm.php?action=delete&foodCode=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class='fa fa-trash' aria-hidden='true'>Remove</i></span></a></td>  
													</tr>  
										<?php  
													
													$total = $total + ($values["item_quantity"] * $values["item_price"]); 
													$_SESSION['tot'] = $total;
													
												}  
										?>  
												<tr>  
													<td colspan="3" align="right">Total</td>  
													<td align="right"><?php echo number_format($total, 2); ?>LKR</td>  
													<td></td>  
												</tr>  
												<?php  
											}  
										?> 
					
						
				</table>		
			
					
				<br />
					
				
					
						
										
									<!--$sql="SELECT sum(subTotal) as total FROM cart";

									$result = mysqli_query($con ,$sql);

									while ($row = mysqli_fetch_assoc($result))
									{
									   $total = $row['total'];
									  # $_SESSION['subtot']= $total;
									   #echo "<p>  Subtotal :  " . " " . $row['total'] . " " . "LKR" . "</p>" ;
									}
									
									
                                   #Shoudnt have more than one close connections .It leads to mysqli_fetch error
									#mysqli_close($con);-->
					

					<!--<div class = "final_balance">
					
				    <p>Subtotal :    echo $total . " " . "LKR"; ?>  </p>
					
					<p>Discounted Amount : echo $discountAmount . " " . "LKR"; ?> </p>
					
					<p>Service Charge :  
										
											 $service = $total * (5 / 100);
											echo $total * ( 5 / 100 ) . " " . "LKR" ;
											
											?></p>
					
					<p>Total Amount :   echo $total - $service - $discountAmount . " " . "LKR" ;?> </p>
					
					
					
				</div>-->
					
					
					
					<br /><br /><br /><br /><br /><br /><br /><br /><br />
					
					
					
				<!--</div> <!-- End of left container-->
				
			
				
					<!--<div class = "containerr">
					
					<h2 style="color:white;">Order Summary</h2>

					<Button name = "Coupon" class = "couponbtn" onclick="openForm()">Enter your coupon Code <i class="fa fa-gift" aria-hidden="true"></i></button><br />
					
					<hr>
					
					<div id = "summary">
					
							<p>Subtotal :  echo  $total . " " . "LKR"; ?> </p><hr>
							<p>Discounted Amount :  echo $discountAmount . " " . "LKR"; ?></p><hr>
							<p>Service Charge (5%): echo  $service . " " . "LKR" ;?></p><hr>
							<p>Net Total :  echo $total - $service . " " . "LKR" ; ?> </p><br /><hr>
							<p></p>
					</div>
					
					<Button name = "continue2" id = "btnorder" ><a href = "finalpayment.php"><i class="fa fa-arrow-right" aria-hidden="true">Continue Order</i></a></button>
					<br /><br /><br /><br />
					
					
					
					
					</div> --><!-- End of right container-->
					
					<br />
					
					<!--<div class = "containerd">
					
					<div id = "delivery">
					
					<h2 style="color:white;">DECIDE YOUR DELIVERY!</h2>
					
					<div style = "color : white;">
					
					<form name = "delivery">
					
					<input type = "radio" name = "Delivery">Home Delivery<br /><br />
					<input type = "radio" name = "Delivery">Take Away<br /><br />
					<input type = "radio" name = "Delivery">Dine in<br /><br />
					
					</form>
					</div>
					
					</div>
					
					
					</div>--><!--End of lower container -->
					
					
		<div class="form-popup" id="myForm" action = "post"> <!--controlling promo form beginning -->
		
			<form  name = "coupon" method = "post" action = "newcart.php" class="form-container">

				<p style = "color : white ;">Enter the coupon code provided to you </p><br />
				
				<input type = 'text' name = 'coupon' id = 'couponIDD'>
				
				
				<button type="submit" class="btn" >Submit</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Close</button>

				
				</form>
			
		</div><!--closing the form pop up div -->
				
				
			
				
					<?php
						
				 $sql = "SELECT * FROM promo"; 
				  
				  $userEntry = $_POST['coupon'];
				
					$result = mysqli_query($conn ,$sql);

									
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
								# echo "Promocode valid" ;
								$discount = $row['discountPercent'];
								$discountAmount = $total * $discount / 100 ;
								$_SESSION['discount'] = $discountAmount;
								#echo $discountAmount ;
							
								
							 }
							 
							# if($userEntry == 'P01')
							#{#
							#	$DinediscountAmount = 3000;
							#	$dineTotal = $total + $DinediscountAmount;
								
							#}#
							
							#else
							# {#
								# echo   "Promocode INvalid";
							# }
				
				 } 
				  
				  mysqli_close($conn);
				  
				
				
			
				?>
				
				
				</div>
				
					<div class = "final_balance">
					
				    <p>Subtotal :   <?php  echo $total . " " . "LKR"; ?>  </p>
					
					<p>Discounted Amount :  <?php echo $discountAmount . " " . "LKR"; ?> </p>
					
					<p>Service Charge : <?php 
										
											 $service = $total * (5 / 100);
											echo $total * ( 5 / 100 ) . " " . "LKR" ;
											$_SESSION['service'] =  $service;
											
											?></p>
					
					<p>Total Amount : <?php   echo( $total + $service) - $discountAmount . " " . "LKR" ;?> </p>
					
					<!--<p>Dine total : <?php   echo $dineTotal   . " " . "LKR" ;?> </p>-->
					
					<?php $netTot = ( $total + $service) - $discountAmount;
					  $_SESSION['netTotal'] = $netTot;?>
					
					<div id = "shop">
					<button name = "Continue1"id= "btnshop" ><i class="fa fa-arrow-left" aria-hidden="true"></i><a href = "../../Shahdy/myfinal/mm.php">Continue Shopping</a></button>
					<button name = "Cancel" id = "btnclose" ><i class="fa fa-times" aria-hidden="true"></i> <a href="../../Agil/home.html"> Cancel Order</a></button><br />
					
					</div>
					
				</div>
				
				
				
				
				
				
				
				
				
				
				
				<div class = "containerr">
					
					<h2 style="color:white;">Order Summary</h2>

					<Button name = "Coupon" class = "couponbtn" onclick="openForm()">Enter your coupon Code <i class="fa fa-gift" aria-hidden="true"></i></button><br />
					
					<hr>
					
					<div id = "summary">
					
							<p>Subtotal : <?php echo  $total . " " . "LKR"; ?> </p><hr>
							<p>Discounted Amount : <?php echo $discountAmount . " " . "LKR"; ?></p><hr>
							<p>Service Charge (5%): <?php echo  $service . " " . "LKR" ;?></p><hr>
							<p>Net Total : <?php echo ($total + $service) - $discountAmount . " " . "LKR" ; ?> </p><br /><hr>
							<p></p>
					</div>
					
					
					
					<Button name = "continue2" id = "btnorder" ><i class="fa fa-arrow-right" aria-hidden="true"></i><a href = "insertorderDetails.php"> Continue Order</a></button>
				
					<br /><br /><br /><br />
					
					
					                                                                                   
					
				</div><!-- End of right container--><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
			
				<div class = "radiocontainer"  style = "color : white;">
				
					<h2 style="color:white;">DECIDE YOUR DELIVERY!</h2>
					

					
					<form name = "delivery">
					
						<input type = "radio" name = "Delivery">Home Delivery<br /><br />
						<input type = "radio" name = "Delivery">Take Away<br /><br />
						<input type = "radio" name = "Delivery">Dine in<br /><br />
					
					</form>
					
				</div>


	<br /><br /><br /><br >	<br /><br /><br /><br >
	<br /><br /><br /><br >
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