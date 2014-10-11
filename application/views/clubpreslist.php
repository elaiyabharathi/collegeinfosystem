	<script src="/igniter/assets/js/ajax.js"></script>
<link rel="stylesheet" href="/igniter/assets/css/jquery.timepicker.css">
<script src="/igniter/assets/js/jquery.timepicker.js"></script>
<style>
	.link{cursor:pointer}
</style>
<br><br>
<div class="col-md-9 container">
<div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:10px;">
	<div id="eventSidebar">
<form>
<input type="button" class="btn btn-lg btn-default btn-sm pull-right" title="Change President" value="-" onClick="President()"></input>
</form>
<div align="center">

<?php
$query =$this->mongo_db->get_where('clubmem',array('clubid'=>$_SESSION['clubid']));
?>
<table class = "table" style="width:50%">
	<tr>
		<td class="pull-left">President&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td>
		<td class="pull-left"  align="center" style="font-weight:bolder" ><?php 
		if(isset($query[0]['president']))
		{
		$query1=$this->mongo_db->get_where('student',array('regno'=>$query[0]['president']));
		if(isset($query1[0]['regno']))
		{
			echo '<a href="'.site_url('welcome/student/'.$query1[0]['regno']).'">';
			echo $query1[0]['name'];
			echo '</a>';
		}}else {echo " ";}?></td>
	</tr>
	<tr>
	<td class="pull-left">Vice&nbsp&nbspPresident&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td>
	<td class="pull-left" style="font-weight:bolder"><?php 
		if(isset($query[0]['vice_president']))
		{
		$query1=$this->mongo_db->get_where('student',array('regno'=>$query[0]['vice_president']));
		
		if(isset($query1[0]['regno']))
		{
			echo '<a href="'.site_url('welcome/student/'.$query1[0]['regno']).'">';
			echo $query1[0]['name'];
			echo '</a>';
		}}else {echo " ";}?></td>
	</tr>
	<tr>
		<td class="pull-left">Directors&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td>
		<td class="pull-left" style="font-weight:bolder"><?php for($i=0;;$i++)
	{

		if(isset($query[0]['directors']))
		{
		if(!isset($query[0]['directors'][$i]))
		{
			break;
		}
		else
		{
			$query1=$this->mongo_db->get_where('student',array('regno'=>$query[0]['directors'][$i]));
			if(isset($query1[0]['regno']))
			{
			echo '<a href="'.site_url('welcome/student/'.$query1[0]['regno']).'">';
			echo $query1[0]['name'];
			echo '</a>';
		}
		}
	} 
		echo '<br>';
	}
	
	?></td>
	</tr>
	
</table>
</div>