<?php
	
	
	//first start session environment
 
	session_start(); 
	
	// store data in session variable through user
 
	$_SESSION['user']= $_POST['un'];
 
    $_SESSION['number']= $_POST['num'];  
	
	$_SESSION['Email']= $_POST['mail'];  

	$_SESSION['Address']= $_POST['address']; 
	
	$_SESSION['Order']= $_POST['order']; 
	
	$_SESSION['Type']= $_POST['card'];  


?>

<html>
 
<body>
 
	<form method="post">
 
		Enter your user name <input type="text" name="un"/><br />
 
		Enter your phone number <input type="text" name="num"/><br/>
		
		Enter your Email address <input type="text" name="mail"/><br/>
		
		Enter your Delivery address <input type="text" name="address"/><br/>
		
		Enter the type of order <input type="text" name="order"/><br/>
 
		
		Enter the type of card <input type="text" name="card"/><br/>
 
		<input type="submit" value="Store in session variable"/>
 
	</form>
 
 </body>
 
 <?php

echo "Welcome ".$_SESSION['user']."<br/>";
	
echo "Your profile is ".$_SESSION['profile'];  
 
?> 
 
 
 
</html>