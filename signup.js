// JavaScript Document

function validatePassword(){
	
	var password = document.getElementById("pass").value;
	var confirmPassword = document.getElementById("conpass").value;
	
	if(password != confirmPassword ){
		window.alert("Password Not Matched");  
		return false;
	}	
}