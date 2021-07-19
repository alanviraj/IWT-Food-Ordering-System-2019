<?php
	
	require 'config.php';
	
	
	if(isset($_POST['upload']))
	{
		//path to store the uploaded files
		$target="uploadUSER/". basename($_FILES['image']['name']) ;
		
		// get the image details
		$image= $_FILES['image']['name'];
		
		
	}

?>