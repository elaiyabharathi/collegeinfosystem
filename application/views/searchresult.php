
<div>
	<?php $this->load->view('navbar');?>
</div>	
<div>
	<?php $this->load->view('sidebar');?>
</div>

<div>
		<?php if(isset($search))
				{
					$q=$search;
				}
				else
				{	
					$q="";
				}
				$r=$person;
$count1=0;
$count2=0;
$count3=0;
$count4=0;
echo '<div align="center">';
echo '<table class="table table-hover" align="center" style="">';
if($r=="all" || $r=="student")
{
echo '<tr>';
echo '<td style="color:black;font-weight:bolder">';
echo "Student";
echo '</td>';
echo '</tr>';
$this->mongo_db->like('name', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('student');

foreach ($query as $doc) {
    $count1=$count1+1;
	 echo '<tr>';
    echo '<td>'; 
   ?>
    <a href="<?php echo site_url('welcome/student/'.$doc['regno'])?>" style="text-decoration:none;color:#DC143C"><?php echo $doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

$this->mongo_db->like('regno', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('student');
foreach ($query as $doc) {
    $count1=$count1+1;
      echo '<tr>';
    echo '<td>'; 
     ?>
    <a href="<?php echo site_url('welcome/student/'.$doc['regno'])?>" style="text-decoration:none;color:#DC143C"><?php echo $doc['regno']." ".$doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

if($count1==0)
{
  echo '<tr>';
 echo '<td style="color:blue">';
	echo "No Result found";
  echo '</td>';
echo '</tr>';
}
}
if($r=="all" || $r=="staff")
{
echo '<tr>';
echo '<td style="color:black;font-weight:bolder">';
echo "Staff";
echo '</td>';
echo '</tr>';
$this->mongo_db->like('name', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('staff');
foreach ($query as $doc) {
    $count2=$count2+1;
    if($count2>3)
    {break;}
    echo '<tr>';
    echo '<td>'; 
    ?>
     <a href="<?php echo site_url('welcome/staff/'.$doc['staffid']);?>" style="text-decoration:none;color:#008000"><?php echo $doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

$this->mongo_db->like('staffid', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('staff');
foreach ($query as $doc) {
    $count2=$count2+1;
    if($count2>3)
    {break;}
    echo '<tr>';
    echo '<td>'; 
     ?>
    <a href="<?php echo site_url('welcome/staff/'.$doc['staffid']);?>" style="text-decoration:none;color:#008000" value="<?php echo $doc['staffid'];?>"><?php echo $doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}


if($count2==0)
{
  echo '<tr>';
echo '<td style="color:blue">';
  echo "No Result found";

  echo '</td>';
echo '</tr>';
}
}
if($r=="all" || $r=="club")
{
echo '<tr>';
echo '<td style="color:black;font-weight:bolder">';
echo "Club";
echo '</td>';
echo '</tr>';
$this->mongo_db->like('clubname', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('club');
foreach ($query as $doc) {
    $count3=$count3+1;
    if($count3>2)
    {break;}
    echo '<tr>';
    echo '<td>'; 
   ?>
     <a href="<?php echo site_url('clubprofile/club/'.$doc['clubid'])?>" style="color:#000080;text-decoration:none"><?php echo $doc['clubname'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

$this->mongo_db->like('clubid', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('club');
foreach ($query as $doc) {
    $count3=$count3+1;
    if($count3>2)
    {break;}
    echo '<tr>';
    echo '<td>'; 
     ?>
    <a href="<?php echo site_url('clubprofile/club/'.$doc['clubid'])?>" style="color:#000080;text-decoration:none"><?php echo $doc['clubname'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}
if($count3==0)
{
  echo '<tr>';

echo '<td style="color:blue">'; 
 echo "No Result found";
  echo '</td>';
  echo '</tr>';
}
}
if($r=="all" || $r=="project")
{
echo '<tr>';
echo '<td style="color:black;font-weight:bolder">';
echo "Project";
echo '</td>';
echo '</tr>';

$this->mongo_db->like('pname', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('projectwaiting');

foreach ($query as $doc) {
  if($doc['status']!="waiting")
  {
    $count4=$count4+1;
    if($count4>3)
  {break;}
    echo '<tr>';
    echo '<td>'; 
   ?>
    <a href="<?php echo site_url('welcome/project/'.$doc['_id']);?>" style="text-decoration:none;color:#DC143C"><?php echo $doc['pname'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
  }
}

/*$this->mongo_db->like('regno', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('projectwaiting');
foreach ($query as $doc) {
    $count1=$count1+1;
    if($count1>3)
    {break;}
    echo '<tr>';
    echo '<td>'; 
     ?>
    <a href="<?php echo site_url('welcome/student/'.$doc['regno'])?>" style="text-decoration:none;color:#DC143C"><?php echo $doc['regno']." ".$doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

*/
if($count4==0)
{
  echo '<tr>';
  echo '<td style="color:blue">';
  echo "No Result found";
   echo '</td>';
echo '</tr>';
}
}

echo '</table>';
echo '</div>';
?>


			
	</div>