function location_check()  
{  
	var location = document.getElementById("location").value; 
	if (location == "SnH")
		location_suggest(1);
	else if (location == "Main Building")
		location_suggest(2);
	else if (location == "Other")
		location_suggest(3);
	else
		location_suggest(99);
} 
function location_suggest(mode)  
{  
	var xhr; 
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	var data = "location=SnH"; 
	if(mode == 1) {
		xhr.open("POST", "SnH", true);
	}
	else if (mode == 2){
		xhr.open("POST", "Main", true);
	}
	else if (mode == 3){
		document.getElementById("suggestion").innerHTML = '<br><input type="text" id="uid" class="form-control" name="locationx" placeholder="Location">';
		return;
	}
	document.getElementById("suggestion").innerHTML = "";
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
	xhr.send(data);  
	xhr.onreadystatechange = display_data;  
	function display_data() {  
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) { 
				document.getElementById("suggestion").innerHTML = xhr.responseText;
				if (mode == 99)
					document.getElementById("suggestion").innerHTML = "";
			} else {  
				alert('There was a problem with the request.');  
			}  
		}  
	}  
}  

