
function myFunction1() {
  var p = document.getElementById("password");
 
  if (p.type === "password") {
    p.type = "text";
  } 
  else {
    p.type = "password";
  }
}

function validateLoginForm() {
  var x = document.forms["myForm"]["username"].value;
  var y = document.forms["myForm"]["password"].value;

   if (x == "" && y == "") {
	  alert("Please Fill The Form!")
	  return false;
  }
  else if (x == "") {
    alert("Please provide a valid Username(Mobile Number)!");
    return false;
  }
  else if (y == "") {
	  alert("Please provide a valid Password!")
	  return false;
  }
  else if(y.length < 6) {
	alert("Password must contain at least 6 characters including at least a number!");
	return false;
  }

}

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password" ) {
    x.type = "text";
  } 
  else {
    x.type = "password";
  } 

}
function myFunctionY() {
  var x = document.getElementById("cpassword");
 
  if (x.type === "password" ) {
    x.type = "text";
  } 
  else {
    x.type = "password";
  } 

}
function myFunctionL() {
  var k = document.getElementById("password");
  if (k.type === "password" ) {
    k.type = "text";
  } 
  else {
    k.type = "password";
  }
  
}
function validateRegisterForm() {
	var f = document.forms["Register"]["fname"].value;
	var l = document.forms["Register"]["lname"].value;
	var n = document.forms["Register"]["number"].value;
	var e = document.forms["Register"]["email"].value;
	var a = document.forms["Register"]["address"].value;
	var p = document.forms["Register"]["password"].value;
	var cp = document.forms["Register"]["cpassword"].value;
	if(f =="") {
		alert("Please provide your First Name!");
		return false;
	}
	else if(l =="") {
		alert("Please provide your Last Name!");
		return false;
	}
	else if(f == l) {
		alert("First name & the Last name should not be the same!");
		return false;
	}
	else if(n =="") {
		alert("Please provide a valid Phone-Number!");
		return false;
	}
	else if(e =="") {
		alert("Please provide your E-mail!");
		return false;
	}
	else if(a =="") {
		alert("Please provide your Home Address!");
		return false;
	}
	else if(p == "") {
		alert("Please provide a Password!")
		return false;
	}
	else if(cp == "") {
		alert("Please confirm your Password!")
		return false;
	}
	else if(p.length<6) {
		alert("Password must contain at least 6 characters including at least a number.");
		return false;
	}
	else if(cp.length<6) {
		alert("Password must contain at least 6 characters including at least a number.");
		return false;
	}
	else if(p != cp) {
		alert("Password Mis-Match!");
		return false;
	}	
	
}

function validateRegisterForm1() {
	var f = document.forms["Register1"]["fname"].value;
	var l = document.forms["Register1"]["lname"].value;
	var n = document.forms["Register1"]["number"].value;
	var e = document.forms["Register1"]["email"].value;
	var a = document.forms["Register1"]["address"].value;
	if(f =="") {
		alert("Please provide your First Name!");
		return false;
	}
	else if(l =="") {
		alert("Please provide your Last Name!");
		return false;
	}
	else if(f == l) {
		alert("First name & the Last name should not be the same!");
		return false;
	}
	else if(n =="") {
		alert("Please provide a valid Phone-Number!");
		return false;
	}
	else if(e =="") {
		alert("Please provide your E-mail!");
		return false;
	}
	else if(a =="") {
		alert("Please provide your Home Address!");
		return false;
	}
	
	
}
function validateForgotPage() {
	var m = document.forms["Forgot"]["number"].value;
	if(m =="") {
		alert("Please enter the number!");
		return false;
	}
}
function validateEditpwdPage() {
	var o = document.forms["Editpwd"]["oldpassword"].value;
	var n = document.forms["Editpwd"]["npassword"].value;
	var cn = document.forms["Editpwd"]["cnpassword"].value;
	if(o =="") {
		alert("Please enter the password you remember!");
		return false;
	}
	else if(n =="") {
		alert("Please enter a New Password!");
		return false;
	}
	else if(cn =="") {
		alert("Please confirm Your New Password!");
		return false;
	}
	else if(n.length<8) {
		alert("Password must contain at least 8 characters including at least a number.");
		return false;
	}
	else if(cn.length<8) {
		alert("Password must contain at least 8 characters including at least a number.");
		return false;
	}
	else if(n != cn) {
		alert("Password Mis-Match!");
		return false;
	}	
}
function myFunctionE() {
  var x = document.getElementById("oldpassword");
 
  if (x.type === "password" ) {
    x.type = "text";
  } 
  else {
    x.type = "password";
  } 

}

function myFunctionE1() {
  var x = document.getElementById("npassword");
 
  if (x.type === "password" ) {
    x.type = "text";
  } 
  else {
    x.type = "password";
  } 

}
function myFunctionE2() {
  var x = document.getElementById("cnpassword");
 
  if (x.type === "password" ) {
    x.type = "text";
  } 
  else {
    x.type = "password";
  } 
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
	document.getElementById("myForm").style.display = "none";
}

function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}

function validateProfileInfo() {
	var f = document.forms["edit"]["fname"].value;
	var l = document.forms["edit"]["lname"].value;
	var n = document.forms["edit"]["number"].value;
	var e = document.forms["edit"]["email"].value;
	var a = document.forms["edit"]["address"].value;
	if(f =="") {
		alert("Please provide your First Name!");
		return false;
	}
	else if(l =="") {
		alert("Please provide your Last Name!");
		return false;
	}
	else if(f == l) {
		alert("First name & the Last name should not be the same!");
		return false;
	}
	else if(n =="") {
		alert("Please provide a valid Phone-Number!");
		return false;
	}
	else if(e =="") {
		alert("Please provide your E-mail!");
		return false;
	}
	else if(a =="") {
		alert("Please provide your Home Address!");
		return false;
	}
	else if (e.value.indexOf("@", 0) < 0) { 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
	}
	else if (e.value.indexOf(".", 0) < 0) { 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
	} 
}

/* Basic validation to make sure all the mandatory fields are filled in*/


function validatePaymentInfo(){

	 var n = document.forms["payment"]["name"].value;
	 var cn = document.forms["payment"]["cnumber"].value;
	 var ed= document.forms["payment"]["edate"].value;
	 var cv = document.forms["payment"]["cvv"].value;
	 if(n =="") {
		alert("Please provide your First Name!");
		return false;
	}
	else if(cn =="") {
		alert("Please provide your Card number!");
		return false;
	}
	else if(ed =="") {
		alert("Please provide the Expiry date of your card!");
		return false;
	}
	else if(cv =="") {
		alert("Please provide the CVV value of your card!");
		return false;
	}
	
	
}

function allLetter()   /* Validation to input only alphabets for firstname*/
  { 
  var namef =  document.forms["feedback"]["name"].value;
  var letters = /^[A-Za-z]+$/;
  
  if(namef.match(letters))
  {
		return true;
  }
  else
  {
  alert('Username must have alphabet characters only');
  
  return false;
  }
  
  
  } 
  
  function cardnumber()
{
	var num = document.forms["feedback"]["number"].value ;
    var cardno = /^(?:3[47][0-9]{13})$/;
	
  if(num.value.match(cardno))
        {
      return true;
        }
      else
        {
        alert("Not a valid  credit card number!");
        return false;
        }
		
		return true;
}
