<div class="col-md-1">
</div>
<div class="col-xs-10 container " >
<div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:20px;" >
<!--<div class="col-md-9">-->
    <div class="bs-example bs-example-tabs">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
        <li><a href="#profile" data-toggle="tab">Projects</a></li>
        
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
		<table class="table table-condensed table-hover">
			<tr class><td>Name: <?php echo $query[0]['name']?></td></tr>
			<tr class><td>Department: <?php echo $query[0]['dept']?></td></tr>
			<tr class><td>Email: <?php echo $query[0]['email']?></td></tr>
			<tr class><td>Birthday: <?php echo $query[0]['bday']."/".$query[0]['bmonth']."/".$query[0]['byear'];?> </td></tr>
		</table>	
		</div>
        <div class="tab-pane fade" id="profile">
<?php
$db    = new Mongo();
$quer = $db->kdb->projectwaiting->find();
$quer =$this->mongo_db->get_where('projectwaiting',array('sid'=>$query[0]['staffid'],'status'=>"accepted"));
?>
<table class = "table" style="width:100%">
<?php
foreach ($quer as $current) {
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
        </div>
      </div>
    </div><!-- /example -->
</div>
</div>
</div>
