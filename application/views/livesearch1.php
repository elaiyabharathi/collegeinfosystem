<html>
<head>
  <style>
  .bad{
    margin-left: 18%;
  }
  a{
    text-decoration: none;
  }
  href{
    text-decoration: none;
  }
  </style>
<script>
function pullresult(str)
{
  document.getElementById('box1').value=str;
 showresult(str);
}
function showresult1(str)
{

if (str.length==0)
  {
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
  
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch?q="+str,true);
xmlhttp.send();
}
</script>
<script src="/igniter/assets/js/staff.js"></script>
<script src="/igniter/assets/js/direct.js"></script>
</head>
<body>
  <div>
  <?php $this->load->view('navbar');?>
 </div>
  <div>
    <?php $this->load->view('sidebar');?>
 </div>
<div class="bad">
<div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:10px;" align="center">  
<?php echo form_open('addclubmem');?> <br><br>  
<form action="" method="post">
  <div class="row">
            <div class="col-md-4">
<select name="drop1" id="drop1" class="form-control" style="width:345px" id="drop1" required onchange="post_check()">
  <option selected disabled="">Choose the Position</option>
  <option value="president"><strong>President</strong></option>
  <option value="vice_president"><strong>Vice President</strong></option>
  <option value="directors"><strong>Directors</strong></option>
</select>
<div id="postname">
  </div>
  <div id="directmembers">
  </div>
<div id="livesearch"></div>
</div>
<div class="col-md-4">
  <div class="pull-left">
  <input type="submit" value="Add" class="btn btn-success"/>
  </div>
</div>
</div>
</form>
</div>

</div>

</body>
</html>