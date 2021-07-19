function validation()
{
	var FID = document.forms["foodform"]["ID"];	
	var FName = document.forms["foodform"]["FoodName"];
	var Amount =  document.forms["foodform"]["Price"];
	var descrp = document.forms["foodform"]["Description"];
	
	
	
	if (FID.value == "")	
		{ 
		window.alert("Please enter the Food ID."); 
		ID.focus(); 
		return false; 
		} 
		
	
	if (FName.value == "")	
		{ 
		window.alert("Please enter the Food Name."); 
		FoodName.focus(); 
		return false; 
		} 
		
		
	if (Amount.value == "")	
		{ 
		window.alert("Please enter the food price."); 
		Price.focus(); 
		return false; 
		} 
		
	
	if (descrp.value == "")	
		{ 
		window.alert("Please enter Food description."); 
		Description.focus(); 
		return false; 
		} 
		
		
	return true;
		
}