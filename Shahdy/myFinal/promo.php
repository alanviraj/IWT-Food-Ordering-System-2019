<!DOCTYPE html>
<html>

	<head>
		<title> View Menu </title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
         
		<link rel = "stylesheet" href = "styles/promo.css" type="text/css" media="all" >
		<link rel = "stylesheet" href = "styles/menu.css" >
        <link rel = "stylesheet" href ="styles/headerFile.css" >
		<link rel = "stylesheet" href ="styles/about.css" >
        
		<script src="script/promo.js"></script>
		<script src="https://kit.fontawesome.com/48aedca16c.js"></script>
	</head>
	<body>
        <div class="headerBack">
            <div clas="headerTop">
                <div class="headerLogo">
                    <img src="images/logo.png">
                    <p>Westeros Foods</p>
                </div>

                <div class="signupLogin">
                    <div class="userImage">
                        <a href="../../Joachim/userprofiles.php"><img src="images/user.png"></a>
                    </div>
                    <div class="buttonSection">
                        <button class="headerButton"><i class="fa fa-sign-in" aria-hidden="true"></i>  Logout</button>
                    </div>
                </div>
            </div>
            
            <div class="headerBottom">
                <ul>
                    <li><a href="../../Agil/home.html" >Home</a></li>
                    <li><a href="mm.php">Our Menu</a></li>
                    <li><a href="aboutus.html">Why Westeros</a></li>
                    <li><a href="../../Kovisha/src/feed.html">Contact Us</a></li>
                    <li style="float:right"><a href="promo.php" class="active"> Promotions</a></li>
                </ul>
            </div>
        </div>
		
		<br />
		
		<div class = "main">
			
			
			<div id = "scope">
			<div id = "promoContainer">
				<form name = "Coupon"  action = "submitCoupon.php" method = "post" onsubmit = "return validation()"   >
			
						<p id = "coupon">Purchase a Free Meal Voucher</p>
						<p id = "coupon">Coupons Are Only Available For A Free Dine In!!</p>
						<p style = "color : #fa6102;">This gift voucher will be emailed to the recipient after your order has been paid for.</p>
						<br />
						
						<fieldset><legend> Select A Coupon</legend>
						<p>Promo code : P01</p>
						<p>The amount you can gift is 3000/=</p>
						</fieldset>
						<br />
						
						<fieldset><legend>Receiver Details</legend><br />
						Name :
						<input type = "text" name = "cName" onblur = "allLetter()" >
						<br /><br />
						
						Phone :
						<input type = "text" name = "number" onblur = "phoneNumber()" >  
						<br /><br />
						
						Address :
						<textarea name="caddress" rows = "4" cols = "25"></textarea>
						<br /><br />
						
						Email :
						<input type = "text" name = "mail">
						<br /><br />
						
						Date And Time Of Dine In:
						<input type="datetime-local" name="pickupdate">
						<br /><br />
						
						</fieldset>
						<br />
						
						<fieldset><legend>Purchaser Details</legend><br />
						Name :
						<input type = "text" name = "rname" onblur = "allLetters()" >
						<br /><br />
						
						Phone :
						<input type = "text" name = "rnumber" onblur = "phoneNumbers()">
						<br /><br />
						
						Address :
						<textarea name="raddress" rows = "4" cols = "25"></textarea>
						<br /><br />
						
						Email :
						<input type = "text" name = "rmail">
						<br /><br />
						</fieldset>
						<br />
						
						<input type = "submit" value = "Submit" name = "submit" class = "changeButton" >
						<a href = "promo.html"><button class = "changeButton">Cancel Coupon</button></a>
						<br />
		
		
			</form>
			
			
		</div>
		
		
		
		<div id = "promo2">
			<form method = "post">
			<div class = "promo3">
				<p id = "coupon" >The Christmas Deal</p>
				<img src = "images/christams.jpg" class = "promoPic">
				<p id = "coupon" >50% off on all your orders</p>
				<p id = "coupon" >Valid till 30-12-2019</p>
				<button class="btn" onclick = "message()"> Grab the promo </button>
			</div></form><br/>
			
			<div class = "promo3">
				<p id = "coupon" >The Bubbleology</p>
				<img src = "images/bev.jpg" class = "promoPic">
				<p id = "coupon" >10% off on any beverages</p>
				<p id = "coupon" >Valid till 19-10-2019</p>
				<button class="btn" onclick = "message1()"> Grab the promo </button>
			</div><br/>
			
			<div class = "promo3">
				<p id = "coupon" >Ice and Fire</p>
				<img src = "images/w.jpg" class = "promoPic">
				<p id = "coupon" >20% off on Westeros Special</p>
				<p id = "coupon" >Valid till 30-01-2020</p>
				<button class="btn" onclick = "message2()"> Grab the promo </button>
			</div>
					
		</div>
		
		
		</div>	
			
		<br><br><br><br><br><br><br><br>
        </div>
		
		</body>
		<footer>
        <div class="pageFooter">
            <div class="firstQuarter">
                <h6>Locater</h6>
                <address>
                    Westros Foods<br><br>
                    No-1/1, Union Place,<br><br>
                    Colombo,<br><br>
                    Zip-Code : 20260
                </address>
                <ul>
                    <li><span class="fa fa-phone"></span> +94 (011) 123 4567</li><br>
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