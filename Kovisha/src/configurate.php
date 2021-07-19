<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "onlinefoodorder";


$con = new mysqli( $servername , $username  , $password , $databasename );

if($con -> connect_error)
{
	die("Connection failed : " . $con ->connect_error);
	
}
else
{
	echo "Connected successfully";
}


?>