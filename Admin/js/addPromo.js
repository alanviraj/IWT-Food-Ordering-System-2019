function validation()
{
	var PID = document.forms["promoform"]["PID"];	
	var PName = document.forms["promoform"]["PromoName"];
	var PDis =  document.forms["promoform"]["Promodisc"];
	var Pvalidity = document.forms["promoform"]["Promvalidity"];
	var Pdate = document.forms["promoform"]["Promodate"];
	
	
	if (PID.value == "")	
		{ 
		window.alert("Please enter the Promo code."); 
		PID.focus(); 
		return false; 
		} 
		
	
	if (PName.value == "")	
		{ 
		window.alert("Please enter the Promo Name."); 
		PromoName.focus(); 
		return false; 
		} 
		
		
	if (PDis.value == "")	
		{ 
		window.alert("Please enter the discount amount."); 
		Promodisc.focus(); 
		return false; 
		} 
		
	
	if (Pvalidity.value == "")	
		{ 
		window.alert("Please enter Promo validity."); 
		Promvalidity.focus(); 
		return false; 
		} 

		
		
		if (Pdate.value == "")	
		{ 
		window.alert("Please enter Promo Added Date."); 
		Promodate.focus(); 
		return false; 
		} 
		
		
	return true;
		
}