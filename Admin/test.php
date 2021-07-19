<!--Image Upload-->
<?php  
 require 'config.php';
 
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO images(name) VALUES ('$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
<!DOCTYPE html>  
<html>  
    <head>
		<title>FOOD STORE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet"  href="styles/footerFile.css">
		<link rel="stylesheet"  href="styles/AdminBody.css">
		<link rel="stylesheet"  href="styles/adminHeaderFile.css">
		<link rel="stylesheet"  href="styles/sidepane.css">
		<link rel="stylesheet"  href="styles/AdminWorkArea.css">
		<link rel="stylesheet"  href="styles/AdminTable.css">
		<link rel="stylesheet"  href="styles/Adminforms.css">
		<link rel="stylesheet"  href="styles/Adminbutton.css">
		
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>  
	
		<body class="Adminbody">
			<header>
				<div class="headerBack">
					<div clas="headerTop">
						<div class="headerLogo">
							<img src="images/logo.png">
							<center>
								<p>Westeros Foods</p>
							</center>
						</div>

						<div class="signupLogin">
							<div class="adminImage">
								<a href="adminProfile.html"><img src="images/profile1.png"></a>
							</div>
							<div class="buttonSection">
								<button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Logout</button>
							</div>
						</div>
					</div>
			</div>
			</header>
			
			<div class = "sidepane">
				
				<h3> General</h3>
				<ul type = "none">
					<li><a href="adminHome.html">Dashboard</a></li>
					<li><a href="adminManageFoods.php">Foods</a></li>
					<li><a href="adminManageCategories.php">Categories</a></li>
				</ul>
				
				<h3> Sales</h3>
				<ul type = "none">	
					<li><a href ="AdminOrders.php">Orders</a></li>
					<li><a href="Canceled.php">Canceled</a></li>
					<li><a href="Pending.php">Pending</a></li>
					<li><a href ="ManagePromos.php">Promotions</a></li>
					<li><a href ="Customers.php">Customers</a></li>
					<li><a href="ManageReviews.php">Reviews</a></li>
				</ul>
				
				<h3> Revenue</h3>
				<ul type = "none">
					<li><a href="Adminsales.php">Income</a></li>
					<li><a href="Reports.php">Reports</a></li>
				</ul>
				
			</div>
			
			<div class ="workArea">
				<center>
					<div>
						<br/>
						<br/>
						
						<form class="Adminform" method="post" enctype="multipart/form-data">  
							 <input type="file" name="image" id="image" />  
							 <br><br>  
							 <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
						</form>	
						
					</div>
				</center>
			</div>
			
		</body>  
</html>  
 
<script>  
	$(document).ready(function()
	{  
		$('#insert').click(function()
		{  
		
			var image_name = $('#image').val();  
			
			if(image_name == '')  
			{  
				alert("Please Select Image");  
				return false;  
			}  
			
			else  
			{  
				var extension = $('#image').val().split('.').pop().toLowerCase();  
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
				{  
					alert('Invalid Image File');  
					$('#image').val('');  
					return false;  
				}  
			}  
		});  
	});  
 </script>  