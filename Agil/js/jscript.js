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
//------------------------------------------------------------------//
// Set the date we're counting down to
var countDownDate = new Date("Oct 5, 2019 11:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo1").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
   document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  document.getElementById("demo3").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  document.getElementById("demo4").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo1").innerHTML = "EXPIRED";
	document.getElementById("demo2").innerHTML = "EXPIRED";
	document.getElementById("demo3").innerHTML = "EXPIRED";
	document.getElementById("demo4").innerHTML = "EXPIRED";
  }
}, 1000);
