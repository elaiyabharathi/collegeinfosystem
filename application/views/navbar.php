<html>
<head>
<title>College Info System</title>
        <link rel="shortcut icon" href="/igniter/favicon.ico">
<link rel="stylesheet" href="/igniter/assets/css/jquery-ui.css">
<script src="/igniter/assets/js/jquery-1.9.1.js"></script>
<script src="/igniter/assets/js/jquery-ui.js"></script>
<script src="/igniter/assets/js/ajax.js"></script>

<style type="text/css">
#overlay{
  z-index: 1000;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  margin-top: 10px;
/*  background: blue;*/
  opacity:100;
  -moz-opacity:100;
  filter:alpha(opacity=100);
  visibility: hidden;
}
</style>
<link type="text/css" rel="stylesheet" href="/igniter/assets/css/bootstrap.css"/>

<script type="text/javascript" src="/igniter/assets/js/bootstrap.min.js"></script>
<style>
.eventDay{
background:#00AA00;

}

</style>
<script>

date=["01-20-2014"]; 
<?php 
date_default_timezone_set('Asia/Calcutta');
$db    = new MongoClient();
$query = $db->kdb->event->find();
$query->sort(array(
    'startDate' => 1
));
$array ='[';
$count=0;
foreach ($query as $current) {
if($count>0)
$array = $array.',';
$array = $array.'['.date('m', $current['startDate']->sec).','.date('d', $current['startDate']->sec).']';
$count=$count+1;
}
$array=$array.']';
?>

natDays = <?php echo $array;?>;

function changed(){
document.getElementById('btn').click();
}
 
function focusd(){
$("#datepicker3").datepicker({  minDate: 0,
        maxDate: '+2M',
        beforeShowDay: function(date) {
           for (i = 0; i < natDays.length; i++) {
      if (date.getMonth() == natDays[i][0] - 1
          && date.getDate() == natDays[i][1]) {
        return [true, 'eventDay','Event'];
      }
    }
            return [false, '','No Events'];
        }
        }).focus();
return false;
}
</script>
<script type="text/javascript">
function showoverlay()
{
  var o=document.getElementById('overlay');
  o.style.visibility='visible';
  function hideoverlay()
  {
    var o=document.getElementById('overlay');
    o.style.visibility='hidden';
  }
}
</script>
<script type="text/javascript">
function pullresult(str)
{
  document.getElementById('search').value=str;
 showresult1(str);
}
function makeblank(){
  document.getElementById("overlay").innerHTML="";
}
function showresult1(str)
{
 //alert(str);

if (str.length==0)
  {
  document.getElementById("overlay").innerHTML="";
  document.getElementById("overlay").style.border="0px";
  return;
  }
  showoverlay();
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
    document.getElementById("overlay").innerHTML=xmlhttp.responseText;
    document.getElementById("overlay").style.border="1px solid #A5ACB2";
    }
  }
var person=document.getElementById("person").value;
xmlhttp.open("GET","<?php echo site_url('welcome/find');?>?q="+str+"&w="+person,true);
xmlhttp.send();
}
</script>
</head>
<body>
<div class="row">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
  <div class="col-md-4">
    <div class="container">
          <div class="navbar-header">
             <table><tr><td><a  class="navbar-brand" href="back"><img src="/igniter/assets/images/ceg.png" width="80" height = "80"></img></a>
             </td><td><a class="navbar-brand" href="<?php echo site_url('welcome/home') ?>"><h2>College Info System</h2></a></td></tr></table>
          
        </div>
      </div>
  </div>
  <div class="col-md-5" style="margin-top:2%" >
    <table><tr><td>
      
           <input type="text" placeholder="Search everything!!  " id="search" class="form-control" style="width:300px" onblur="makeblank1()" onkeyup="showresult1(this.value)"/>
    </td>
     <td>
         
   <div class="btn-group bootstrap-select">
         <select class="form-control filter-option pull-left" id="person">
    <option value="all">All</option>
    <option value="student">Student</option>
    <option value="staff">Staff</option>
    
    </select>
  </div>
</td> 
</tr><tr><td>
  <div id="overlay" style="margin-top:8%;width:300px;margin-left:1em">
         </div>
       </td></tr>
  </table>
</div>
  <div class="col-sm-3" style="margin-top:2%">
     <div class="btn-group pull-right" style="margin-top:2.5%">
                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <img src="/igniter/assets/images/setting.png" width="20" height = "20">
                <!--<span class="caret"></span>-->
                </a>
      <?php 
        #var href; if($class == 'event') href='../welcome/reupdate'; else href='reupdate';
        $t=''; 
        $class=$this->router->class;
        $method=$this->router->method;
        if($method=='index')
          {$t='welcome/logout';$m='welcome/reupdate';$c='welcome/passwd';$g='welcome/gallery'; }
              else{ 
                $t=site_url('welcome/logout'); $c=site_url('welcome/passwd');
                $m=site_url('welcome/reupdate');}?>
                      <ul class="dropdown-menu">
                      <li><a href="<?php echo $c;?>">Change Password</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo $m;?>">Edit Profile</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo $t;?>">Logout</a></li>
                      <li class="divider"></li>
                      <!--<li><a href="<?php/* if($_SESSION['type']=='club')
                                {
                                  echo '"'.$g.'">gallery upload';
                                } */?></a></li>-->
                </ul>
                </div>
<div style="color:white;margin-top:3%" class="pull-right">
                       <?php
                  if(isset($_SESSION['fname']))
                  {
                  echo $_SESSION['fname'];
                  }          
                  ?>
        
            </div>
  <div class="pull-right" style="padding:10px">
<?PHP
  if($this->router->class=='event' && $this->router->method=='Full')
  {
echo form_open( 'event/dateFilter',array( 'class'=>'ajax-form2'));?>
<form>
<input type="text" id="datepicker3" name="datepicker3" onChange="changed()" style="color:gray;width:0;">
<button type="button"  class="btn" onclick="return focusd()"><span class="glyphicon glyphicon-calendar" ></span></button>
<button type="submit"  class="btn hidden" id="btn" hidden></button>
</form>
<?php } 
else { 
echo form_open( 'event/Full') ?>
<form>
<input type="text" id="datepicker3" name="datepicker3" onChange="changed()" style="color:gray;width:0;">
<button type="submit"  class="btn"><span class="glyphicon glyphicon-calendar" ></span></button>
</form>
<?php } ?>
</div>
 </div>
</div>

<!--<div class="container">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
      <div class="container">
        <div class="navbar-header"> 
            <table>
              <tr>
                <td>
              <a class="navbar-brand" href="#"><h2>College Info System</h2></a>
            <div class="container">
            <table align="RIGHT">
              <br/>
              <br/>
              <tr>
                <td>

                                
<div class="pull-right" style="padding:10px">
<?PHP
  if($this->router->class=='event')
  {
echo form_open( 'event/dateFilter',array( 'class'=>'ajax-form2'));?>
<form>
<input type="text" id="datepicker3" name="datepicker3" onChange="changed()" style="color:gray;width:0;">
<button type="button"  class="btn" onclick="return focusd()"><span class="glyphicon glyphicon-calendar" ></span></button>
<button type="submit"  class="btn hidden" id="btn" hidden></button>
</form>
<?php } 
else { 
echo form_open( 'event/Full') ?>
<form>
<input type="text" id="datepicker3" name="datepicker3" onChange="changed()" style="color:gray;width:0;">
<button type="submit"  class="btn"><span class="glyphicon glyphicon-calendar" ></span></button>
</form>
<?php } ?>
</div>
</td>

<td><div style="color:white">
     


                  <?php
                  if(isset($_SESSION['fname']))
                  {
                  echo $_SESSION['fname'];echo " ";echo $_SESSION['lname'];
                  }
                  else
                  echo 'Welcome';
                  ?>
            
                </td></div>
                <td>                
                  <div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <img src="/igniter/assets/images/setting.png" width="20" height = "20">
                <!--<span class="caret"></span>-->
                </a>
<!--      <?php 
        #var href; if($class == 'event') href='../welcome/reupdate'; else href='reupdate';
        $t= site_url('welcome/logout');
        $m= site_url('welcome/reupdate');
        $c= site_url('welcome/passwd');
        ?>
                      <ul class="dropdown-menu">
                      <li><a href="<?php echo $c;?>">Change Password</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo $m;?>">Edit Profile</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo $t;?>">Logout</a></li>
                      
                </ul>
                </div>
              </div>
                </td></tr>
            </table>
            </div> 
          </div>
        </td></tr>
        </table>
        </div>
      </div>
</div>-->
<br><br><br><br><br><br>
<div class="row" style="width:100%">
