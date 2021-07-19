function validation()                                    
{ 
    var senderName = document.forms["Coupon"]["cName"];
	var senderPhone =  document.forms["Coupon"]["number"];
	var senderAddress =  document.forms["Coupon"]["caddress"];
	var senderEmail =  document.forms["Coupon"]["mail"];
	var recieverName =  document.forms["Coupon"]["rname"];
	var recieverPhone =  document.forms["Coupon"]["rnumber"];
	var recieverAddress =  document.forms["Coupon"]["raddress"];
	var recieverEmail =  document.forms["Coupon"]["rmail"];
	var date = document.forms["Coupon"]["pickupdate"];
	var amt = document.forms["Coupon"]["amount"];
   
    if (senderName.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name1.focus(); 
        return false; 
    } 
   
    if (senderAddress.value == "")                               
    { 
        window.alert("Please enter your address."); 
        add1.focus(); 
        return false; 
    } 
       
    if ( senderEmail.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (senderEmail.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (senderEmail.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (senderPhone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone1.focus(); 
        return false; 
    } 
	
	 if (recieverName.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name1.focus(); 
        return false; 
    } 
   
    if (recieverAddress.value == "")                               
    { 
        window.alert("Please enter your address."); 
        add1.focus(); 
        return false; 
    } 
       
    if ( recieverEmail.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (recieverEmail.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (recieverEmail.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (recieverPhone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone1.focus(); 
        return false; 
    } 
	
	if(date.value == "" )
	{
		window.alert("Please select a date and time."); 
        date.focus(); 
        return false; 
	}
	
	if(amt.value == "")
	{
		window.alert("Please select an amount."); 
        date.focus(); 
        return false; 
	}
   return true;
}

function allLetter()
{
	var name = document.forms["Coupon"]["cName"].value;
	var letter = /^[A-Za-z]+$/;
	
	if(name.match( letter))
	{
		return true;
	}
	
	else{
		window.alert("Please enter a valid name");
		return false;
	}
}

function allLetters()
{
	var name = document.forms["Coupon"]["rname"].value;
	var letter = /^[A-Za-z]+$/;
	
	if(name.match(letter))
	{
		return true;
	}
	
	else{
		window.alert("Please enter a valid name");
		return false;
	}
}

function phoneNumber(){
	
	var phone = document.forms["Coupon"]["number"];
	var num = /^[0-9]{10}$/;
	
	if(!num.test(phone.value))
	{
		alert("please enter a valid phone number");
		return false;
	}
	
	else{
		return true;
	}
}

function phoneNumbers(){
	
	var phone = document.forms["Coupon"]["rnumber"];
	var num = /^[0-9]{10}$/;
	
	if(!num.test(phone.value))
	{
		alert("please enter a valid phone number");
		return false;
	}
	
	else{
		return true;
	}
}

/*--------------------------------------------------------------------------*/

function message()
{
	alert('Your promo code is P05. Please use the code in your bill summary page');
}

function message1()
{
	alert('Your promo code is P04. Please use the code in your bill summary page');
}

function message2()
{
	alert('Your promo code is P03. Please use the code in your bill summary page');
}

function message3()
{
	alert('Your promo code is P01. Please use the code in your bill summary page');
}










