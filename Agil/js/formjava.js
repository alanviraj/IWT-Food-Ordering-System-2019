function validateForm(inputText){
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(inputText.value.match(mailformat))
	{
		return true;
	}
	else
	{
		alert("Invalid E-Mail");
		return false;
	}
}

function validateRegisterForm() {
	var f = document.forms["adminform"]["fname"].value;
	var l = document.forms["adminform"]["lname"].value;
	var n = document.forms["adminform"]["number"].value;
	var e = document.forms["adminform"]["email"].value;
	var a = document.forms["adminform"]["address"].value;
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
	else{
		alert("Please !");
	}
	
}
