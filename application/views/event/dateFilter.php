
<?php $type='';
		if(isset($_SESSION['eventErr'])) 
		  {  $msg=$_SESSION['eventErr'];
		  if(isset($_SESSION['eventErrExist']))
		    if($_SESSION['eventErrExist']!='false'){
		    
		  ?>
<div class="alert alert-danger alert-dismissable clearfix"> 
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="<?php unset($_SESSION['eventErr']); ?>">&times;</button> <?php echo $msg ?>
  </div>
  <?php }
  else unset($_SESSION['eventErrExist']);} ?>
<?php $type='';
		if(isset($_SESSION['type'])) 
		    $type=$_SESSION['type'];
		 if($type=='staff' || $type=='club') {?>
<?PHP echo form_open( 'event/FormFull');?>
<form>
<input type="submit" class="btn btn-lg btn-success btn-sm pull-right" title="New Event" value="+" onClick="FormFull"></input>
</form>
<?php } ?>

<?php
date_default_timezone_set('Asia/Calcutta');
$db    = new Mongo();
$date1=new MongoDate(strtotime($date." 00:00:00"));
$date2=new MongoDate(strtotime($date." 23:59:59"));
$query = $db->kdb->event->find();
#$query=$this->mongo_db->get_where('event', array($date1 => array( '$gte' => 'startDate', '$lte' => 'endDate' )));
$sort  = 'startDate';?>
<div class="accordion" style="clear:both">

<div class="row">

<thead>
	<div class="col-xs-2">
		From
	</div>
	<div class="col-xs-2">
		To
	</div>
	<div class="col-md-3 col-xs-3">
		Event Name
	</div>
	<div class="col-md-4 col-xs-3">
		Event Location
	</div>
	<div class="col-xs-1">
	</div>
	</thead>
	
</div>
<div class="pane">
 </div>
	<?php
$query->sort(array(
    'startDate' => 1
));
foreach ($query as $current) {
if($current['startDate'] >= $date1){
if($current['startDate'] <= $date2){  $audc=0	;
    $audc=0	;
    $audience='';
    foreach($current['target'] as $aud){
    if($audc > 0)
      $audience=$audience.",";
    $audience=$audience." ".$aud;
    $audc=$audc + 1;
    }
    $title= '<tr style="height:40px"><td style="width:200px"><b>Event Category </b></td><td>'.$current['type'].'</td></tr><tr  style="height:40px"><td><b>Target Audience </b></td><td>'.$audience."</td></tr><tr valign='top'><td><b>Description </b></td><td>".$current['description'].'</td></tr>';
    echo '<div class="row">';
    echo '<div>';
    echo '<div class="col-xs-2">' . date('d-m  H:i ', $current['startDate']->sec) . '</div>';
    echo '<div class="col-xs-2">' . date('d-m H:i', $current['endDate']->sec) . '</div>';
    echo '<div class="col-md-3 col-xs-3"><b>' . $current['name'] . "</b></div>";
    echo '<div class="col-md-4 col-xs-4">' . $current['location'] . "<br></div>";
    //echo '<div class="col-xs-2 hidden-xs hidden-sm">' . $current['type'] . "<br></div>";
    echo '<div class="col-xs-1">';
?>
	<?php
	$type='';
		if(isset($_SESSION['type'])) 
		    $type=$_SESSION['type'];
		 if(($type=='staff' || $type=='club') && $_SESSION['uid'] == $current['createdBy']) {
    echo form_open('deleteevent', array(
        'class' => 'ajax-form'
    ));
?>
		<form name="status" action="" method ="post">
		<input Type="text" value=<?php
    echo $current['_id'];
?> name="_id" style = "height:0px" hidden />
		<input title="Delete Event" type="submit" class="btn btn-lg btn-danger btn-sm pull-right"  onclick="this.form.submit()" value="x"></input>
		</form>
		<?php }
    echo '</div>';
    //	 echo '<div class="pane" style="display:none">'.$current['description'] ."</div>";
    echo '</div>';
    
    echo '</div>';
     echo '<div class="pane"><table>';
    echo $title;
    echo '</table></div>';
    }}
}
//echo '</pre>';

?>
</div>
<small>*Hover for description of event</small>



