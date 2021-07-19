function validation()
{
	var FName = document.forms["customerForm"]["fname"];	
	var LName = document.forms["customerForm"]["lname"];
	var Num =  document.forms["customerForm"]["phone"];
	var mail = document.forms["customerForm"]["email"];
	var address = document.forms["customerForm"]["address"];
	
	
	if (FName.value == "")	
		{ 
		window.alert("Please enter the first Name."); 
		fname.focus(); 
		return false; 
		} 
		
	var fletters = /^[A-Za-z]+$/;

	if(!FName.value.match(fletters))
	{
		alert('Please input valid  Name');
		fname.focus();
		return false;
	}
	
	if (LName.value == "")	
		{ 
		window.alert("Please enter the Last Name."); 
		lname.focus(); 
		return false; 
		} 
		
	var lletters = /^[A-Za-z]+$/;

	if(!Name.value.match(lletters))
	{
		alert('Please input valid  Name');
		lname.focus();
		return false;
	}
		
	if (Num.value == "")	
		{ 
		window.alert("Please enter your Contact Number."); 
		phone.focus(); 
		return false; 
		} 
		
	var numbers = /^[0-9]+$/;

	if(!Num.value.match(numbers))
	{
		window.alert('Enter Valid Contact Number');
		phone.focus();
		return false;
	}
	
	if (mail.value == "")	
		{ 
		window.alert("Please enter an  e-mail address."); 
		email.focus(); 
		return false; 
		} 

		if (mail.value.indexOf("@", 0) < 0)	
		{ 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
		} 

		if (mail.value.indexOf(".", 0) < 0)	
		{ 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
		} 
		
		if (address.value == "")	
		{ 
		window.alert("Please enter the first Address."); 
		address.focus(); 
		return false; 
		} 
		
		
	return true;
		
}
