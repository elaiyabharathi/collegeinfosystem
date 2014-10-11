var loaded = false;
$(document).ready(function () {
    $('form.ajax-form').on('submit', function () {
        var obj = $(this), // (*) references the current object/form each time
            url = obj.attr('action'),
            method = obj.attr('method'),
            data = {};

        obj.find('[name]').each(function (index, value) {
            // console.log(value);
            var obj = $(this),
                name = obj.attr('name'),
                value = obj.val();

            data[name] = value;
        });
    if(!loaded){
        $.ajax({
            // see the (*)	
            url: url,
            type: method,
	    cache: false,
            data: data,
            success: function (response) {
                var xhr;
		loaded=true;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older  
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "book_name=";
                xhr.open("GET", "List1", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            //alert(xhr.responseText);        
                            document.getElementById("eventSidebar").innerHTML = xhr.responseText;
			      $(function() {
   $( ".accordion" ).accordion({ heightStyle: "content", active: 1 })
   });
                        } else {
                            alert('There was a problem with the request.');
                        }
                    }
                }
                //console.log(response);
                // $("#feedback").html(data);
            }
        });
    }
        // console.log('Trigger');
        return false; //disable refresh
    });
$('form.ajax-form2').on('submit', function () {
        var obj = $(this), // (*) references the current object/form each time
            url = obj.attr('action'),
            method = obj.attr('method'),
            data = {};

        obj.find('[name]').each(function (index, value) {
            // console.log(value);
            var obj = $(this),
                name = obj.attr('name'),
                value = obj.val();

            data[name] = value;
        });

        $.ajax({
            // see the (*)	
            url: url,
            type: method,
            data: data,
            success: function (response) {
                var xhr;
		var date = document.getElementById("datepicker3").value;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older  
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "date=" + date;
                xhr.open("POST", "dateFilter", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            //alert(xhr.responseText);        
                            document.getElementById("eventSidebar").innerHTML = xhr.responseText;
			     $(function() {
   $( ".accordion" ).accordion({ heightStyle: "content", active: 1 })
   });
                        } else {
                            xhr.open("POST", "event/dateFilter", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            //alert(xhr.responseText);        
                            document.getElementById("eventSidebar").innerHTML = xhr.responseText;
			     $(function() {
   $( ".accordion" ).accordion({ heightStyle: "content", active: 1 })
   });
                        } else {
                            alert('There was a problem with the request.');
                        }
                    }
                }
                        }
                    }
                }
                //console.log(response);
                // $("#feedback").html(data);
            }
        });

        // console.log('Trigger');
        return false; //disable refresh
    });


    
});

function sortchange(sortv){
                var xhr;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older  
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "book_name=";
		if(sortv == 0)
                xhr.open("POST", "List1", true);
		if(sortv == 1)
                xhr.open("POST", "List2", true);
		if(sortv == 2)
                xhr.open("POST", "List3", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(data);
                xhr.onreadystatechange = display_data;

                function display_data() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            //alert(xhr.responseText);        
                            document.getElementById("eventSidebar").innerHTML = xhr.responseText;
			     $(function() {
   $( ".accordion" ).accordion({ heightStyle: "content", active: 1 })
   });
                        } else {
                            alert('There was a problem with the request.');
                        }
                    }
                }
                
	}

function loadForm(){
                var xhr;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older  
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "book_name=";
		xhr.open("POST", "Form", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send(data);
                    xhr.onreadystatechange = display_data;

                    function display_data() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                //alert(xhr.responseText);        
                                document.getElementById("eventSidebar").innerHTML = xhr.responseText;
                            } else {
                                alert('There was a problem with the request.');
                            }
                        }
                    }
	}

function dateFilter(method,date){
                var xhr;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older  
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "date=" + date;
		xhr.open("GET", method, true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send(data);
                    xhr.onreadystatechange = display_data;

                    function display_data() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                //alert(xhr.responseText);        
                                document.getElementById("eventSidebar").innerHTML = xhr.responseText;
                            } else {
                                alert('There was a problem with the request.');
                            }
                        }
                    }
	}
    function President(){
                var xhr;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older  
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "date=" ;
        xhr.open("GET", "presadd", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send(data);
                    xhr.onreadystatechange = display_data;

                    function display_data() {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                //alert(xhr.responseText);        
                                document.getElementById("eventSidebar").innerHTML = xhr.responseText;
                            } else {
                                alert('There was a problem with the request.');
                            }
                        }
                    }
    }
    function DeleteConfirm(form){
      var r=confirm("Are you sure you want to delete this event ?");
      if(r==true)
     form.submit(); 
     return r;
    }
