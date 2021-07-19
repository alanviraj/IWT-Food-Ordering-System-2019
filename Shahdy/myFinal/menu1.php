<html>
	<head>
		<title> View Menu </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="styles/footerFile.css" rel="stylesheet" type="text/css" media="all">
		<link rel = "stylesheet" href = "styles/menu.css" >
        <link rel = "stylesheet" href ="styles/header
		File.css" >
        
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
                    <li><a href="viewmenu.html">Our Menu</a></li>
                    <li><a href="#">Why Westeros</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li style="float:right"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Cart</a></li>
                </ul>
            </div>
        </div>
		<div class = "main">
			<div class="sideCol">
			
				<a href = "promo.html"><button class ="sideNavbutton"> Promos </button></a>
				<br /><br /><br /><br />
				
				<input id="searchBar" type ="text" placeholder ="Search Category.." onkeyup="searchFn()">
				<br /><br /><br />
				
				<div>
					<ul id= "searchMenu">
						<li><a href ="viewmenu.html" class ="sideNavbutton2"> Chinese </a></li>
						<li><a href ="viewmenu2.html" class ="sideNavbutton2"> Indian </a></li>
						<li><a href ="viewmenu3.html" class ="sideNavbutton2"> Srilankan </a></li>
						<li><a href ="viewmenu4.html" class ="sideNavbutton2"> Westeros </a></li>
						<li><a href ="viewmenu5.html" class ="sideNavbutton2"> Italian </a></li>
						<li><a href ="viewmenu6.html" class ="sideNavbutton2"> Japanese </a></li>
						<li><a href ="viewmenu7.html" class ="sideNavbutton2"> Drink Corner </a></li>
					</ul>
				</div>	
				
				
			</div>
						<h3 id = "category"><u><center>CHINESE!!</center></u></h3>
						<p style = "color : black;">Flip the image for description </p>
						
			<div class="mainX">
				<div class ="row">
					<div class ="column">
							<div class ="category">
								<div class = "flipImage" >
									<div class = "flipImage-inner" >
										<div class = "flipImage-front" >
											<img src="images/kung.jpg" height="25%" width="25%" class="images" >
										</div>				
									
										<div class = "flipImage-back">
											<p>A highly addictive stir-fried chicken with the perfect combination of salty, sweet and spicy flavour!</p>
									
										</div>
									</div>
								</div>
				            <div class="contentBottom">
								<h4><a href ="#"> Kung Pao Chicken </a> </h4>
								<p class = "price" > 200.00/=</p>
                                <div class="buttonSecion">
                                    <button class="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>	
                                    <button class="button2"><i class="fa fa-heart" aria-hidden="true"></i> Add to favourites</button>
                                </div>
							
							</div>
                        </div>
                    </div>
					
								
				</div>
			</div>
        </div>
    </div>
		
		<br>
		<br>
		<br>
        
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
	</body>	
</html>