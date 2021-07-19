<?php

	require 'config.php';
	session_start();

	if(isset($_POST['upload']))
	{
		//path to store the uploaded files
		$target="uploadUSER/". basename($_FILES['image']['name']) ;
		
		// get the image details
		$image= $_FILES['image']['name'];
		$phone=$_SESSION['Phone'];
		// $phone=$_SESSION['firstname'];
		
		$sql="INSERT INTO images(ID,Img_ID,Name) 
			   VALUE ('','$phone','$image')";
		
		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			alert('Record inserted successfully')
			</script>";
			header("Location:userprofiles.php");
		}

		else
		{
			echo "<script>
			alert('ERROR')
			</script>";
		}
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target ))
		{
			$msg="Image update success";
		}
		
		else
		{
			$msg="Error";
		}
		
	}



?>



<!DOCTYPE html>
<html>

	<head>
		<title> Westeros|User Profile </title>
		<meta  charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel = "stylesheet" href ="styles/headerFile.css">
		<link rel = "stylesheet" href ="styles/user.css">
		<link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">
		<script src = "JS/ViewRevenue.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script src="script/menu.js"></script>
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
		
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
						<a href="uerprofiles.php"><img src="images/userxx.png"></a>
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
                    <li><a href="../Agil/home.html" class="active">Home</a></li>
                    <li><a href="../Shahdy/myFinal/mm.php">Our Menu</a></li>
                    <li><a href="../Shahdy/myFinal/aboutus.html">Why Westeros</a></li>
                    <li><a href="../Kovisha/src/feed.html">Contact Us</a></li>
					<li style="float:right"><a href="../Shahdy/myFinal/promo.php"> Promotions</a></li>
					<li style="float:right"><a href="../Agil/userOrder.php?phone=$phone"> Orders</a></li>
                    
                </ul>
            </div>
        </div>
		
		<br /><br />
		
		<body>
		
		<div class = "big container">
		
		<div class = "leftdiv">
		<br>
		
		<?php echo "<h1 style = 'text-align : center'> ". "Hello" . " " .  $_SESSION['firstname'] ."</h1>";
		
		
		// <!--************************Img Insertion********************-->
		
			// $fname = $_SESSION['firstname'];
			$phone=$_SESSION['Phone'];
			
			$sql = "SELECT * FROM images WHERE Img_ID = '$phone'";
			$result = $conn->query($sql);
			
			if( $result -> num_rows > 0 )
				{
					
					
					while($row=$result->fetch_assoc())
				
					{	
						echo "<img src='uploadUSER/".$row['Name']."' width = '200px' height = '200px' class = 'center'>";
						
						// <img src = "../images/userprofile.jpg" width = "200px" height = "200px" class = "center"><br />
					}
				}	
		?>

						<!--************************Img Insertion********************-->
		<center>
			<form class="Adminform" method="post" action="userprofiles.php" enctype="multipart/form-data">
				
				<input type="hidden" name="size" value="1000000" />  
				
				<div>
					<input type="file" name ="image" >
				</div>
				<input type="submit" name="upload" value="insert"> </input>
			</form>
		</center>
		
		<!--<input type = "file" name = "fileupload" class= "center"><br /><br />-->
		
			<div id = "user">
			
			<h2>Your Details</h2><br />
		
			
		
		</div>
		
		<div class="containerCenter">
		<div class = "adjust">
				 
				<?php 
					
					$phone=$_SESSION['Phone'];
		
					#beginning of php code to check if all the user details are retrieved properly
						$sql = "SELECT * FROM customer_detail WHERE Phone ='$phone'"; 
				
						$result = $conn->query($sql); 
			
					#checking if the rows are selected 
					#result array containing rows and if that row is greater than 0; 
					
				 if($result -> num_rows > 0) 
				 { 
						while($row = $result -> fetch_assoc()) 
						{ 
							$id = $row['ID']; 
							
							 echo "<label> " . "First Name :  " ." " .  $_SESSION['firstname'].  "</label>" ."<br /><br />
									<label>" . "Last Name : "  .  $_SESSION['lastname'] . "</label>" ."<br /><br />
									<label>" . "Phone Number :  " .  $_SESSION['Phone'] . "</label>" ."<br /><br />
									<label>" . "Address :  " .$_SESSION['Address'] . "</label>"."<br /><br />
									<label>" . "Email :  " .  $_SESSION['Email']."</label>" ."<br /><br />
									<button type = 'submit' class = 'btn'><a href = 'EditUserDetails.php?id=$id'>Edit User Details</a></button>
									<button type = 'submit' class = 'btn1'><a href = '../Kovisha/src/EditDetails.php'>Edit Payment Details</a></button> ";
							
						
						   #echo "<tr> 
								# <td>" .$row['firstName']. "</td> 
								 #<td>" .$row['lastName']. "</td> 
								 # <td>" .$row['Address']. "</td> 
								 # <td>" .$row['Email']. "</td> 
								  #<td>" .$row['feedBack']. "</td>    
								  #<td>" ."<button type = 'submit' ><a href = 'EditRecord.php?phone=$phone'>Edit Payment Details</a></button>"."</td> -->
								# </tr>"; 
					   
				
						} 
				  
				 }
				
				 else 
				  { 
					  echo "0 results"; 
				 } 
				 
				 
				 
				 
				 $conn -> close();
			
			
			?>
			
			 
			
			
		</div>
		</div>
		
		</div>
		

		</div>
		
		</body>
		<br><br>
		
		<footer>
		<body>
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
		
	</body>	
</html>

</html>