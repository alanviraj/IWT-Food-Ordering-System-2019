<!-- <html> -->
	<!-- <head> -->
		<!-- <title>Westeros|Feedback</title> -->
		<!-- <link rel = "stylesheet" href  = "../css/feed.css"> -->
	<!-- </head> -->
	
	<html>

	<head>
		<title> Westeros|Feedback</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="../css/footerFile.css" rel="stylesheet" type="text/css" media="all"> 
        <link rel = "stylesheet" href ="../css/headerFile.css" >
		
        
		<link rel = "stylesheet" href = "../css/feed.css" >
		
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
		<script src = "../js/feed.js"></script>
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
                        <form method="post" action="logout.php"> 
							<input name="logout" class="headerButton" type="submit" value="Log out"/>
						</form> 
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="../../Agil/home.html" >Home</a></li>
                    <li><a href="../../Shahdy/myfinal/mm.php">Our Menu</a></li>
                    <li><a href="../../Shahdy/myfinal/aboutus.html">Why Westeros</a></li>
                    <li><a href="#" class="active">Contact us </a></li>
                    <li style="float:right"><a href="../../Shahdy/myfinal/promo.php"> Promotions</a></li>
                </ul>
            </div>
        </div>
		
		<br /><br />
	
	<body>

	<div style = "width : 100%" id = "holder" >
	<h1 style = "text-align : center ">Your Feedback!</h1><br />

	
	
	<h3 style = "text-align : center ">We are happy to take your feedback into consideration</h3><br /><br/>
	
	
	<div class  = "container">
	
		<div id = "form">

		<form method = "post" action = "submitfeedback.php" name = "feedback" onsubmit = "return validation()">

		<div id = "left">
		
		<label>Name</label><br /><br />
		<input type = "text" name = "name" placeholder = "Hannah Baker" onblur = "allLetter()"><br /><br /><br /><br />
		
		<label>Phone</label><br /><br />
		<input type = "text" name = "phone" placeholder = " 0771234567 " onblur = "phonenumber()"><br /><br /><br /><br />
		
		<label>Email</label><br /><br />
		<input type = "text" name = "mail" placeholder = " hannahBaker@gmail.com "><br /><br /><br /><br />
		
		<label>Re-enter Email</label><br /><br />
		<input type = "text" name = "remail" placeholder = " hannahBaker@gmail.com"><br /><br/><br />
		
		</div>
		
		<div id = "right">
		
		<label>Date</label>
		<input type = "text" name = "Date" placeholder = " dd-mm-yy" name = "date"><br /><br /><br />
		
		<label>What type of order?</label>
		<select name = "order">
			<option>Home delivery</option>
			<option>Take Away</option>
			<option>Dine In</option>
		</select><br /><br /><br />
	
		<label>What would you like to tell us about?</label>
		<select name = "about">
			<option>General Inquiry</option>
			<option>Food Quality and Taste</option>
			<option>Online Ordering experience</option>
			<option>Speed of service</option>
			<option>Restaurant Experience</option>
			<option>Others</option>
		
		</select><br/><br /><br />
		
		<label>Comments</label><br />
		<textarea rows = "10" cols = "50" placeholder = "Enter your messsage" name = "comment"></textarea>
		
		<p><input type = "submit" value = "Submit" name = "Submit " id = "btn"  ></p><br /><br />
		
		
		</div>
		

	</form>

		</div>
		
	</div>
</div>
<br><br>
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