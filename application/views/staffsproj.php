
<script src="/igniter/assets/js/ajax.js"></script>
<link rel="stylesheet" href="/igniter/assets/css/jquery.timepicker.css">
<script src="/igniter/assets/js/jquery.timepicker.js"></script>
<script src="/igniter/assets/js/newevent.js"></script>
<script src="/igniter/assets/js/eventLocation.js"></script>
<script src="/igniter/assets/js/ajax.js"></script>
<script src="/igniter/assets/js/staff.js"></script>
<style>
	.link{cursor:pointer}
</style>
<br><br>
<div class="col-md-9 container">
<div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:10px;">
<div align="center">

<?php
date_default_timezone_set('Asia/Calcutta');
$db    = new Mongo();
$query = $db->kdb->projectwaiting->find();
$query =$this->mongo_db->get_where('projectwaiting',array('sid'=>$_SESSION['staffid'],'status'=>"accepted"));
?>
<!--<table class = "table table-striped table-hover " style="width:100%">
	<tr class= "success ">
		<td><b>Project Name</td></b>
		<td><b>Student ID</td></b>
	</tr>

<?php
/*
foreach ($query as $current) {
    echo "<tr><td>" .$current['pname']. '</td>';
	foreach($current['regno'] as $currarr)
	echo  '<b>'.$currarr . "</b>";
	//echo "<td>" . $current['regno']. '</td>';}
  */ 
?>
</table>-->
<table class = "table" style="width:100%">
<?php
foreach ($query as $current) {
if($current['status']=="accepted")
{	
    echo '<tr title="' . $current['dept'] . '">';
    echo '<td style="color:GREEN"><u><b>' .  strtoupper($current['pname']) . '</b></u></td></tr>';
	echo "<tr><td><b>by:</b>" ;
	foreach($current['members'] as $currarr)
	{
	$querystud = $this->mongo_db->get_where('student',array('_id' => $currarr));
	foreach($querystud as $curr)
	{
	echo  '<b>'.$curr['name']. "   </b>";
	}
	}
	echo "</td></tr><tr><td>" . $current['description'] . "</td><td></td></tr>";
 }}  
?>
</table>