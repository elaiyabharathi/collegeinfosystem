<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>accordion demo</title>
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
</form><br>
<div id="accordion">

<div class="row">

<thead>
  <div class="col-md-4 " style="color:green">
Project Name
  </div>
  <div class="col-md-4"style="color:green">
    Staff Name
  </div>
  <div class="col-md-4" style="color:green">
    Status
  </div>  </thead>
  
</div>
<div class="pane"><small>Click on a project to view its description</small></div>
<?php
$db    = new Mongo();
$query = $db->kdb->projectwaiting->find();
$query =$this->mongo_db->get_where('projectwaiting',array('regno'=>$_SESSION['regno']));
foreach ($query as $current) {
 echo ' <div class="row"><thead>  <div class="col-md-4"> '.$current['pname'].'</div><div class="col-md-4">'. $current['sname'].'</div><div class="col-md-4" >'.$current['status'].'  </div>  </thead> </div>';
    $title=$current['description'];
 echo '<div class="pane">';
    echo $title;
    echo '</div>';
  }
   
?>
</div>
</div>
</div> 
<script>
$( "#accordion" ).accordion( { heightStyle: "content", active: 0 });
</script>
<?php

// Connect to Mongo and set DB and Collection
$mongo = new Mongo();
$db = $mongo->myfiles;

// GridFS
$grid = $db->getGridFS();

// The file's location in the File System
$path = "";

$filename = "1.jpg";

// Note metadata field & filename field
$storedfile = $grid->storeFile($path . $filename,
                 array("metadata" => array("filename" => $filename),
                 "filename" => $filename));

// Return newly stored file's Document ID
echo $storedfile;

?>
 
</body>
</html>