function dept_check()  
{ 
	var dept  = document.getElementById("dept").value; 
	if(dept=="Other")	
	  new_staff();
	else
	  dept_suggest(dept);
} 
function new_staff(){
	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	xhr.open("GET", "new_staff", true);
	var data="dept=" + dept;
	document.getElementById("staffname").innerHTML = "";
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
	xhr.send(data);  
	xhr.onreadystatechange = display_data;  
	function display_data() {  
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) { 
				document.getElementById("staffname").innerHTML = xhr.responseText;
				
			} else {  
				alert('There was a problem with the request.');  
			}  
		}  
	}  
  
}
function dept_suggest(dept)  
{  
	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	
	xhr.open("GET", "staffs", true);
	
	var data="dept=" + dept;
	document.getElementById("staffname").innerHTML = "";
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
	xhr.send(data);  
	xhr.onreadystatechange = display_data;  
	function display_data() {  
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) { 
				document.getElementById("staffname").innerHTML = xhr.responseText;
				
			} else {  
				alert('There was a problem with the request.');  
			}  
		}  
	}  
}  
function post_check()  
{ 
	var dept  = document.getElementById("drop1").value; 
	post_suggest(dept);
} 
function post_suggest(drop1)  
{  
	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	
	xhr.open("POST", "posts", true);
	
	var data="post=" + drop1;
	document.getElementById("postname").innerHTML = "";
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
	xhr.send(data);  
	xhr.onreadystatechange = display_data;  
	function display_data() {  
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) { 
				document.getElementById("postname").innerHTML = xhr.responseText;
				
			} else {  
				alert('There was a problem with the request.');  
			}  
		}  
	}  
}  
function live_check()  
{ 
	var str  = document.getElementById("box1").value; 
	dept_suggest(dept);
} 
function dept_suggest(dept)  
{  
	var xhr;  
	if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
		xhr = new XMLHttpRequest();  
	} else if (window.ActiveXObject) { // IE 8 and older  
		xhr = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	
	xhr.open("POST", "staffs", true);
	
	var data="dept=" + dept;
	document.getElementById("staffname").innerHTML = "";
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
	xhr.send(data);  
	xhr.onreadystatechange = display_data;  
	function display_data() {  
		if (xhr.readyState == 4) {  
			if (xhr.status == 200) { 
				document.getElementById("staffname").innerHTML = xhr.responseText;
				
			} else {  
				alert('There was a problem with the request.');  
			}  
		}  
	}  
}  




