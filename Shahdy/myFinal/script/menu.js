function searchFn() {

	var input, filter, ul, li, a, i;
	
	input = document.getElementById("searchBar");
	filter = input.value.toUpperCase();
	ul = document.getElementById("searchMenu");
	li = ul.getElementsByTagName("li");

	for (i = 0; i < li.length; i++) 
	{
		a = li[i].getElementsByTagName("a")[0];
		
		if (a.innerHTML.toUpperCase().indexOf(filter) > -1) 
		{
			li[i].style.display = "";
		} 
		else 
		{
			li[i].style.display = "none";
		}
	}
}

function alertUpdate(){
	
	var a = document.forms["addCategory"]["CategoryName"].value
	
	if( a == "")
	{
		alert("Please Enter a Category Name");
	}
	else
	alert("Category upadted Successfully!");
}

function alertUpdateFood(){
	
	var x = document.forms["AddFoods"]["Fname"].value ;	
	
	if( x == "")
	{
		alert("Please Enter a Food Name");
	}
	
	else
	alert("Food Item upadted Successfully!");
}

function alertUpdateCancel(){
	alert("Food Item upadte unsuccessfull!");
}

function newOrder(){
	location.replace("adminViewOrderDetails.html");
}

function category(){
	window.open("Category.html");
}

function cart(){
	window.open("basket.html");
}


/*--------------------------------------------------------------------------------------------------------------------*/





