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
                     echo '<script>window.location="mm.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 
 
 <!DOCTYPE html>  

<html>
	<head>
		<title> View Menu </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">
		<link rel = "stylesheet" href = "styles/menu.css">
        <link rel = "stylesheet" href ="styles/headerFile.css" >
        <link rel = "stylesheet" href ="styles/card.css" >
        <link rel = "stylesheet" href ="styles/MenuTable.css" >
        
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
                        <a href="../../Joachim/userprofiles.php"><img src="images/user.png"></a>
                    </div>
                    <div class="buttonSection">
                        <form method="post" action="logout.php"> 
							<input name="logout" class="headerButton" type="submit" value="Log out"/>
						</form>
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="../../Agil/home.html" >Home</a></li>
                    <li><a href="mm.php" class="active">Our Menu</a></li>
                    <li><a href="aboutus.html">Why Westeros</a></li>
                    <li><a href="../../Kovisha/src/feed.html">Contact Us</a></li>
                    <li style="float:right"><a href="promo.php"> Promotions</a></li>
                </ul>
            </div>
        </div><br/>
		
		<form method = "get" action = "search.php" style="float:right">
						<div>
							<select name="searchBy" >
								<option value="1" default> Search by Name </option>
								<option disabled> Search by Category ; </option>
								<option value="2"> Chinese </option>
								<option value="3"> Indian </option>
								<option value="4"> Westeros </option>
								<option value="5"> Italian </option>
							</select>
							<input type="text" placeholder="Search Menu" name="search">
							<button type="submit" value = "Go">Go</button>
						</div>
		</form>
		<br/><br/><br/><br/><br/><br/>
		<div class = "main">
				
		<div class="mainX">
			<div class ="row">
									<p style = "color : black;">CHINESE</p>
							 
						<?php  
							$query = "SELECT * FROM food WHERE category = 'Chinese'";  
							// $query = "SELECT * FROM food";  

							$result = mysqli_query($conn, $query);  
							
							if(mysqli_num_rows($result) > 0)  
							{  
								while($row = mysqli_fetch_array($result))  
								{
						?>  		
									<div class ="column">
										<div class="container" >  
											<div>
												 <form method="post" action="mm.php?action=add&foodCode=<?php echo $row["foodCode"]; ?>">  
													<div class="card">
														<div><br>
															<div class="OLYcontainer" >
																<center><img src="../../Admin/upload/<?php echo $row['image'];?>" class="OLYimage"></center>
																<div class="overlay">
																	<div class="OLYtext">
																			<p> <?php echo $row["description"]; ?><p>
																	</div>
																</div>
															</div>
															<h4><?php echo $row["foodName"]; ?></h4>  
															<p class="price"><?php echo $row["unitPrice"]; ?>/=</p>  
															<input type="text" name="quantity" class="form-control" value="1" />  
															<input type="hidden" name="hidden_name" value="<?php echo $row["foodName"]; ?>" />  
															<input type="hidden" name="hidden_price" value="<?php echo $row["unitPrice"]; ?>" />  
															<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
															<br><br>
														</div> 
													</div>
												 </form>
											</div>
										</div>
									</div>
										
						<?php  
								}  
							}  
						?>  
			</div>
			
			<div class ="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	 
									<p style = "color : black;">INDIAN</p>
						<?php  
							$query = "SELECT * FROM food WHERE category = 'indian'";  
							// $query = "SELECT * FROM food";  

							$result = mysqli_query($conn, $query);  
							
							if(mysqli_num_rows($result) > 0)  
							{  
								while($row = mysqli_fetch_array($result))  
								{
						?>  		
									<div class ="column">
										<div class="container" >  
											<div>
												 <form method="post" action="mm.php?action=add&foodCode=<?php echo $row["foodCode"]; ?>">  
													<div class="card">
														<div><br>
															<div class="OLYcontainer" >
																<center><img src="../../Admin/upload/<?php echo $row['image'];?>" class="OLYimage"></center>
																<div class="overlay">
																	<div class="OLYtext">
																			<p> <?php echo $row["description"]; ?><p>
																	</div>
																</div>
															</div>
															<h4><?php echo $row["foodName"]; ?></h4>  
															<p class="price"> <?php echo $row["unitPrice"]; ?>/=</p>  
															<input type="text" name="quantity" class="form-control" value="1" />  
															<input type="hidden" name="hidden_name" value="<?php echo $row["foodName"]; ?>" />  
															<input type="hidden" name="hidden_price" value="<?php echo $row["unitPrice"]; ?>" />  
															<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
															<br><br>
														</div> 
													</div>
												 </form>
											</div>
										</div>
									</div>
										
						<?php  
								}  
							}  
						?>  
			</div>
			
			<div class ="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	 
									<p style = "color : black;">WESTEROS</p>
						<?php  
							$query = "SELECT * FROM food WHERE category = 'Westerose'";  
							// $query = "SELECT * FROM food";  

							$result = mysqli_query($conn, $query);  
							
							if(mysqli_num_rows($result) > 0)  
							{  
								while($row = mysqli_fetch_array($result))  
								{
						?>  		
									<div class ="column">
										<div class="container" >  
											<div>
												 <form method="post" action="mm.php?action=add&foodCode=<?php echo $row["foodCode"]; ?>">  
													<div class="card">
														<div><br>
															<div class="OLYcontainer" >
																<center><img src="../../Admin/upload/<?php echo $row['image'];?>" class="OLYimage"></center>
																<div class="overlay">
																	<div class="OLYtext">
																			<p> <?php echo $row["description"]; ?><p>
																	</div>
																</div>
															</div>
															<h4><?php echo $row["foodName"]; ?></h4>  
															<p class="price"><?php echo $row["unitPrice"]; ?>/=</p>  
															<input type="text" name="quantity" class="form-control" value="1" />  
															<input type="hidden" name="hidden_name" value="<?php echo $row["foodName"]; ?>" />  
															<input type="hidden" name="hidden_price" value="<?php echo $row["unitPrice"]; ?>" />  
															<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
															<br><br>
														</div> 
													</div>
												 </form>
											</div>
										</div>
									</div>
										
						<?php  
								}  
							}  
						?>  
			</div>
			
			<div class ="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	 
									<p style = "color : black;">ITALIAN</p>
						<?php  
							$query = "SELECT * FROM food WHERE category = 'italian'";  
							// $query = "SELECT * FROM food";  

							$result = mysqli_query($conn, $query);  
							
							if(mysqli_num_rows($result) > 0)  
							{  
								while($row = mysqli_fetch_array($result))  
								{
						?>  		
									<div class ="column">
										<div class="container" >  
											<div>
												 <form method="post" action="mm.php?action=add&foodCode=<?php echo $row["foodCode"]; ?>">  
													<div class="card">
														<div><br>
															<div class="OLYcontainer" >
																<center><img src="../../Admin/upload/<?php echo $row['image'];?>" class="OLYimage"></center>
																<div class="overlay">
																	<div class="OLYtext">
																			<p> <?php echo $row["description"]; ?><p>
																	</div>
																</div>
															</div>
															<h4><?php echo $row["foodName"]; ?></h4>  
															<p class="price"><?php echo $row["unitPrice"]; ?>/=</p>  
															<input type="text" name="quantity" class="form-control" value="1" />  
															<input type="hidden" name="hidden_name" value="<?php echo $row["foodName"]; ?>" />  
															<input type="hidden" name="hidden_price" value="<?php echo $row["unitPrice"]; ?>" />  
															<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
															<br><br>
														</div> 
													</div>
												 </form>
											</div>
										</div>
									</div>
										
						<?php  
								}  
							}  
						?>  
			</div>
					
						<div style="clear:both"></div>  
						<br />  
						
						<center>
							<div class="table-responsive">  
								<div class="MenuTable">  
									<h3>Order Details</h3>  
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
													<td> <?php echo  $values["item_price"]; ?>/=</td>  
													<td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>/=</td>  
													<td><a href="mm.php?action=delete&foodCode=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
													</tr>  
										<?php  
													
													$total = $total + ($values["item_quantity"] * $values["item_price"]); 
													$_SESSION['tot'] = $total;
													
												}  
										?>  
												<tr>  
													<td colspan="3" align="right">Total</td>  
													<td align="right"><?php echo number_format($total, 2); ?>=</td>  
													<td></td>  
												</tr>  
												<?php  
											}  
										?> 

										
									</table> 
									<br><br/>
								<a href = "../../Kovisha/src/newcart.php"><button type = "submit" value = "Continue" style = "background-color :fa6102;">Continue</button></a>										
								</div> 
															
							</div>
							
						</center>
				</div>
			</div>
		</div>
		
		
		<br>
		<br>
		<br>
        
        
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
                <form method="post" action="#">
                        <input type="text" value="" placeholder="Name"><br>
                        <input type="text" value="" placeholder="Email"><br>
                        <button type="submit" value="Submit" class="footerSubmit">Submit</button>
                </form>
            </div>
        </div>
        </footer>
	
</html>