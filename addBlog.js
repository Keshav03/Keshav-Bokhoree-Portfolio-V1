// JavaScript Document

function clearForm(){
	
if(window.confirm("Confirm!")){
 document.getElementById("title").value = "";
document.getElementById("desc").value = "";
}
}

function preventDefault(){
	
if(document.myForm.title.value == "" && document.myForm.desc.value == ""){
	
	window.alert("Field(s) Empty!");
	document.getElementById("title").style.backgroundColor = "#ffb0ad";
	document.getElementById("desc").style.backgroundColor = "#ffb0ad";
	return false;
	
}
	
if(document.myForm.title.value == ""){
	
	window.alert("Title Field Empty!");
	document.getElementById("title").style.backgroundColor = "#ffb0ad";
	return false;
}	

if(document.myForm.desc.value == ""){
	
	window.alert("Description Field Empty!");
	document.getElementById("desc").style.backgroundColor = "#ffb0ad";
	return false;
}

}

