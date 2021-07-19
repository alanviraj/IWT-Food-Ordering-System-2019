<!DOCTYPE html>
<html>
<head>
    <title>Kids Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../styles/Main.css" rel="stylesheet" type="text/css" media="all">
    <link href="../styles/Header.css" rel="stylesheet" type="text/css" media="all">
    <link href="../styles/Footer.css" rel="stylesheet" type="text/css" media="all">
    <link href="../styles/Side.css" rel="stylesheet" type="text/css" media="all">
	<link href="../styles/workArea.css" rel="stylesheet" type="text/css" media="all">
    <script src="https://kit.fontawesome.com/48aedca16c.js"></script>
<!-- JAVASCRIPTS -->
    <script src="../scripts/jquery.min.js"></script> 
</head>
<body>
<!-- Header -->
    <div class="row1">
      <header id="header" class="clear"> 
        <div id="logo" class="fl_left">
			<img src="../images/logo.png" id="img">
			<h1><a href="../index.php">Kids Store</a></h1>
        </div>
		<div id="searchBar">
			<form method = "get" action = "searchItem.php">
				<div id="searchText">
        <input type="text" placeholder="Search.." name="search" >
				</div>
				<div id="searchButton">
				<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<br>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
            <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>  Offers</a></li>
            <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  News</a></li>
            <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i>  About us</a></li>
            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  Contact us</a></li>
            <li><a class="drop" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
Account</a>
              <ul>
                <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>  Logout</a></li>
              </ul>
			</li>
              <li><a href="#">Cart <i class="fas fa-shopping-cart"></i></a></li>
          </ul>
        </nav>
      </header>
    </div>
<!-- Header -->
    
<div class="sidenav">
	
	<p>Sort By</p>
	
  <a href="indexSort.php?id=6">Lowest Price</a>
  <a href="indexSort.php?id=7">Highest Price</a>
  <a href="indexSort.php?id=8">Latest Addition</a>

	
	<br><br>
	
	<p>Categories</p>
	
	<a href="indexCategory.php?id=1">Toys and Games</a>
	<a href="indexCategory.php?id=2">Baby Gears</a>
	<a href="indexCategory.php?id=3">Baby Furniture</a>
	<a href="indexCategory.php?id=4">Boys</a>
  <a href="indexCategory.php?id=5">Girls</a>

		
</div>

<div class="workArea">
<?php
session_start();
require 'config.php' ;

	$categoryID = $_GET['id'];

				if ($categoryID == 6)
				{
					$sql = "SELECT * FROM items order by unit_price asc " ;
				}

				else if ($categoryID == 7)
				{
					$sql = "SELECT * FROM items order by unit_price desc" ;
				}

				else if ($categoryID == 8)
				{
					$sql = "SELECT * FROM items order by item_id desc " ;
				}



                    $result = $conn -> query($sql) ;

                    

                    if( $result -> num_rows > 0 )
                    {
                        // echo "<table class = \"table\">
                        //          <tr>" ;

                        while ( $row = $result -> fetch_assoc() )
                        {
                            
                            // $count = $count + 1 ;
                            
                            $id = $row["item_id"] ;

                            echo "
                                    <form method = \"get\" action = \"phpFiles/addToCart.php\">
                                    <div class='productColumn'>
                                                    <div class='columnTop'>
                                                        <div class='columnContent'>
                                                            <img src='../upload/" . $row["image"] ."' alt='" . $row["item_name"] . "' >
                                                        </div>
                                                        <div class ='columnButton'>
                                                            <p><a href=\"phpFiles/addToCart.php\"><button type = \"submit\"><i class='fa fa-cart-plus' aria-hidden='true'></i> Add to Cart</button></a></p>
                                                            <input type = \"number\" name=\"quantity\" >
                                                            <input type = \"hidden\" value=\"$id\" name=\"hid\">

                                                            
                                                        </div>
                                                    </div>
                                                    <div class='columnDetails'>
                                                        <h6>".$row["item_name"]."</h6>
                                                        <h1>".$row["item_id"]."</h1>
                                                        <p class='price'>$".$row["unit_price"]."</p>
                                                    </div>    
                                    </div>
                                    </form>
                                ";
                    
                  }
                }
?>

</div>

<hr id ="footerSeperator">
    
<!-- Footer -->
    <div class="row5">
      <footer id="footer" class="clear"> 
        <div class="one_quarter first">
          <h6 class="title">Locater</h6>
          <address class="btmspace-15">
          Kids Zone<br>
          No-1/1, Peradeniya Road,<br>
          Kandy,<br>
          Zip-Code : 20000
          </address>
          <ul class="nospace">
            <li class="btmspace-10"><span class="fa fa-phone"></span> +94 (081) 123 4567</li>
            <li><span class="fa fa-envelope-o"></span> kidszoneonline@gmail.com </li>
          </ul>
        </div>
        <div class="one_quarter">
          <h6 class="title">Quick Links</h6>
          <ul class="nospace linklist">
            <li><a href="#">Home Page</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">About Us</a></li>
			<li><a href="#">Offers</a></li>
			<li><a href="#">News</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="one_quarter">
          <h6 class="title">About Us</h6>
          <article>
            <h4 class="nospace">Kids Zone Online</h4>
            <time class="smallfont">Established: 27<sup>th</sup> August 2019</time>
            <p>Kids Zone is Established purely in the aim of bringing your desired kids' accessory to your doorstep with a click of a button.</p>
          </article>
        </div>
        <div class="one_quarter">
          <h6 class="title">Grab Our Newsletter</h6>
          <form method="post" action="#">
            <fieldset>
              <legend>Newsletter:</legend>
              <input class="btmspace-15" type="text" value="" placeholder="Name">
              <input class="btmspace-15" type="text" value="" placeholder="Email">
              <button type="submit" value="submit">Submit</button>
            </fieldset>
          </form>
        </div>

      </footer>
    </div>

    <div class="wrapper row6">
      <div id="copyright" class="clear"> 
		<center>
			<p>Copyright 2019 - All Rights Reserved</p>
		</center>
      </div>
    </div>

    <a id="backtotop" href="#top">Top<i class="fa fa-chevron-up"></i></a>
<!-- Footer -->
</body>
</html>