function direct()  
{  
	var number  = document.getElementById("no").value; 
	direct_suggest(number);
} 

function direct_suggest(number)  
{
	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	
	xhr.open("POST", "direct", true);
	
	var data="number=" +number;
	document.getElementById("directmembers").innerHTML = "";
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
	xhr.send(data);  
	xhr.onreadystatechange = display_data;  
	function display_data() {  
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) { 
				document.getElementById("directmembers").innerHTML = xhr.responseText;
				
			} else {  
				alert('There was a problem with the request.');  
			}  
		}  
	}  
} 