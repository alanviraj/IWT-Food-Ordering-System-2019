 
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
                        <img src="images/user.png">
                    </div>
                    <div class="buttonSection">
                        <button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Login/Sign Up</button>
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="mm.php">Our Menu</a></li>
                    <li><a href="aboutus.html">Why Westeros</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li style="float:right"><a href="promo.php"> Promotions</a></li>
                </ul>
            </div>
        </div><br/>

<?php

	require 'config.php' ;

		echo "<form method = \"get\" action = \"search.php\" style=\"float:right\">
						<div>
							<select name=\"searchBy\">
								<option value=1 default> Search by Name </option>
								<option disabled> Search by Category ; </option>
								<option value=2> Chinese </option>
								<option value=3> Indian </option>
								<option value=4> Western </option>
								<option value=5> Italian </option>
							</select>
							<input type=\"text\" placeholder=\"Search Menu\" name=\"search\" id=\"searchbar\">
							<button type=\"submit\" value =\"Go\">Go</button>
						</div>
		</form>
		
		<br/><br/><br/><br/><br/><br/>
		
		<div class = \"main\">
				
		<div class=\"mainX\"> " ;
			



	$selection = $_GET['searchBy'] ;
	$searchKey = $_GET['search'] ;

	if( $selection == 1 )
	{
		$sql = "SELECT * FROM food WHERE (foodName like '%$searchKey%') " ;
	}

	else if( $selection == 2 )
	{
		$sql = "SELECT * FROM food WHERE (foodName like '%$searchKey%') and (category = 'chinese') " ;
	}

	else if( $selection == 3 )
	{
		$sql = "SELECT * FROM food WHERE (foodName like '%$searchKey%') and (category = 'indian') " ;
	}

	else if( $selection == 4 )
	{
		$sql = "SELECT * FROM food WHERE (foodName like '%$searchKey%') and (category = 'westeros') " ;
	}

	else if( $selection == 5 )
	{
		$sql = "SELECT * FROM food WHERE (foodName like '%$searchKey%') and (category = 'italian') " ;
	}

	else
	{
		echo "error" ;
	}

	$result = mysqli_query($conn , $sql );

	if( $result -> num_rows > 0 )
	{
		while( $row = $result -> fetch_assoc() )
		{
			$id = $row['foodCode'] ;
			$image = $row['image'] ;
			$description = $row['description'] ;
			$name = $row["foodName"] ;
			$price = $row["unitPrice"] ;

			echo " <div class =\"column\">
				<div class=\"container\" >  
					<div>
						 <form method=\"post\" action=\"mm.php?action=add&foodCode=$id\">  
							<div class=\"card\">
								<div><br>
									<div class=\"OLYcontainer\" >
										<center><img src=\"../Admin/upload/".$image."\" class=\"OLYimage\"></center>
										<div class=\"overlay\">
											<div class=\"OLYtext\">
													<p> " . $description . "<p>
											</div>
										</div>
									</div>
									<h4>" . $name . "</h4>  
									<p class=\"price\"> " . $price . "/=</p>  
									<input type=\"text\" name=\"quantity\" class=\"form-control\" value=\"1\" />  
									<input type=\"hidden\" name=\"hidden_name\" value=\"" . $name . "\" />  
									<input type=\"hidden\" name=\"hidden_price\" value=\"" . $price . "\" />  
									<input type=\"submit\" name=\"add_to_cart\" style=\"margin-top:5px;\" class=\"btn btn-success\" value=\"Add to Cart\" />
									<br><br>
								</div> 
							</div>
						 </form>
					</div>
				</div>
			</div>" ;
		}
	}

?>

        
        
	</body>	
</html>