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
