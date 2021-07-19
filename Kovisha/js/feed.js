function validation()	
{ 
var Name = document.forms["feedback"]["name"];	
var phone = document.forms["feedback"]["phone"]; 
var email1 = document.forms["feedback"]["mail"]; 
var email2 = document.forms["feedback"]["remail"]; 
 var date = document.forms["feedback"]["date"]; 
var feedbackText = document.forms["feedback"]["comment"]; 

if (Name.value == "")	
{ 
window.alert("Please enter your First name."); 
name.focus(); 
return false; 
} 

if (phone.value == "")	
{ 
window.alert("Please enter your telephone number."); 
phone.focus(); 
return false; 
}  


if (email1.value == "")	
{ 
window.alert("Please enter an  e-mail address."); 
mail.focus(); 
return false; 
} 

if (email1.value.indexOf("@", 0) < 0)	
{ 
window.alert("Please enter a valid e-mail address."); 
mail.focus(); 
return false; 
} 

if (email1.value.indexOf(".", 0) < 0)	
{ 
window.alert("Please enter a valid e-mail address."); 
mail.focus(); 
return false; 
} 

if (email2.value == "")	
{ 
window.alert("Please enter an e-mail address."); 
remail.focus(); 
return false; 
} 

if (email2.value.indexOf("@", 0) < 0)	
{ 
window.alert("Please enter a valid e-mail address."); 
remail.focus(); 
return false; 
} 

if (email2.value.indexOf(".", 0) < 0)	
{ 
window.alert("Please enter a valid e-mail address."); 
remail.focus(); 
return false; 
} 

if(email1.value != email2.value)
{
	window.alert("email mismatch! Please re enter email");
	return false;
}

if(date.value == "")
{
	window.alert("Please enter the date");
	date.focus();
	return false;
	
}


if(feedbackText.value == "")
{
	window.alert("Enter your feedback");
	comment.focus();
	return false;
}

}



function allLetter()   /* Validation to input only alphabets for firstname*/
  { 
  var Name =  document.forms["feedback"]["name"].value;
  var letters = /^[A-Za-z]+$/;
  
  if(Name.match(letters))
  {
		return true;
  }
  else
  {
  alert('Username must have alphabet characters only');
  
  return false;
  }
  
  
  }
  
  
  // function phonenumber()
// {
	// var Numbers = document.forms["feedback"]["phone"].value;
	
  // var phoneno = /^\d{10}$/;
  // if(Numbers.match(phoneno))
        // {
      // return true;
        // }
      // else
        // {
        // alert("Please enter a valid phone number");
        // return false;
        // }
// }
