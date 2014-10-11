<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <script src="/igniter/assets/js/ajax.js"></script>
<link rel="stylesheet" href="/igniter/assets/css/jquery.timepicker.css">
<script src="/igniter/assets/js/jquery.timepicker.js"></script>
<script src="/igniter/assets/js/newevent.js"></script>
<script src="/igniter/assets/js/eventLocation.js"></script>
<script src="/igniter/assets/js/ajax.js"></script>
<script src="/igniter/assets/js/staff.js"></script>
<link rel="shortcut icon" href="/igniter/favicon.ico">

  <link rel="stylesheet" href="/igniter/assets/css/jquery-ui.css">
  <script src="/igniter/assets/js/jquery-1.9.1.js"></script>
  <script src="/igniter/assets/js/jquery-ui.js"></script>
</head>
<body>
 <div class="col-md-9 container">
  <div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:10px;">

    <?PHP echo form_open( 'event/projectadd');?>
<form>
<input type="submit" class="btn btn-lg btn-success btn-sm pull-right" title="New Project" value="+" onClick="FormFull"></input>
</form>
<h1><small>Projects</small></h1>
<div id="accordion">

<?php
$db    = new MongoClient();
//$query = $db->kdb->projectwaiting->find();
$sid=$this->mongo_db->get_where('student',array('regno'=>$_SESSION['regno']));
$ssid=$sid[0]['_id'];
//echo $ssid;
$q=$this->mongo_db->get('projectwaiting');
//$q = $db->kdb->projectwaiting->find();
$f=0;
$query;
foreach($q as $qa)
{
foreach($qa['members'] as $id)
{
 //echo $id.'<br>';
if($id==$ssid)
{
 
//echo $id.'<br>';
//echo $qa['pname'];
$query=$qa;
//echo $query['tags'][1];
//$query =$this->mongo_db->get_where('projectwaiting',array('regno'=>$_SESSION['regno']));
$tags="";
$current=$query;
$count=0;
foreach($current['tags'] as $tag){
if($count>0)
$tags=$tags.", ";
$tags=$tags.$tag;
$count=$count+1;
}
 echo ' <div class="row">  <div class="col-md-10"> '.$current['pname'].'</div>'. '<div class="col-md-2"> '.$current['area'].'</div> </div>';
    $pane="<tr><td style='width:150px'><b>Staff Name </b></td><td>". $current['sname']."</td></tr><tr><td><b>Project Status </b></td><td>".$current['status']."</td></tr><tr><td><b>Tags </b></td><td>".$tags."</td></tr><tr><td><b>Description </b></td><td>".$current['description'].'</td></tr>';
 echo '<div class="pane"><table>';
    echo $pane;
    echo '</table></div>';
  
}}}   
?>
</div><br><small>&nbsp*Click on a project to view its details.</small>
</div>
</div> 

<script>
$( "#accordion" ).accordion( { heightStyle: "content", active: 0 });
</script>
 
</body>
</html>