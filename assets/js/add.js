$(document).ready(function(){
    var increment=1;
  $("#addButton").click(function(){
        
      if(increment > 10)
      {
        alert("maximum 10 members only in a project");
        return false;
      }
        var maincontent="<input type ='textbox' class='form-control'  style='width:400px;'name='textbox"+increment+"' id='textbox"+increment+"' placeholder='Your partner "+increment+"'/><br>";
        //var fun="<div id='TextBoxDiv"+increment+"'>"+maincontent+"</div>";    
      var newTextBoxDiv = $(document.createElement('div')).attr('id', 'TextBoxDiv' +increment);
      newTextBoxDiv.after('').html(maincontent);      
     $(newTextBoxDiv).appendTo("#TextBoxesGroup");
        increment++;
  });       
});