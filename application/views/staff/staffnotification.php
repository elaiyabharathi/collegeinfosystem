<?php
$query = $this->mongo_db->get_where('projectwaiting', array('sid' => $_SESSION['staffid']));
?>


<table class = "table  " style="width:100%">
<?php
foreach ($query as $current) {
if($current['status']!="accepted"&&$current['status']!="declined")
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
    echo "<tr><td>";

?>
<ul class="list-inline">
<li>
<?php
    echo form_open('acceptproject', array(
        'class' => 'ajax-form'
    ));?>
		<form name="status" action="" method ="post">
	<input Type="text" value=<?php
    echo $current['_id'];?> name="_id" style = "height:0px" hidden />
		</li>
		<li><input type="submit" class="btn btn-lg btn-default btn-sm pull-right btn-success" value="accept"></input>
		</form>
		<?php
    
?></li><li>
<?php
    echo form_open('declineproject', array(
        'class' => 'ajax-form4'
    ));?>
		<form name="status" action="" method ="post">
		<input Type="text" value=<?php
    echo $current['_id'];?> name="_id" style = "height:0px" hidden />
		<input type="submit" class="btn btn-lg btn-default btn-sm pull-right btn-danger" value="decline"></input>
		</form>
		<?php
    echo '</td><td></td>';
    echo '</tr>';
    }
	}
	$query = $this->mongo_db->get_where('projectwaiting', array('sid' => $_SESSION['staffid'],'status'=>'waiting'));
	if(!$query)
	{
	echo "No notifications found";
	}
?></li></ul>
</table>

