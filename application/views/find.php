<?php
$q = $_GET['q'];
$r = $_GET['w'];
$count1=0;
$count2=0;
$count3=0;
$count4=0;

echo '<table class="table table-hover" align="center" style="background:#DCDCDC">';
if($r=="all" || $r=="student"||$r=="project")
{
$spl=explode(" ",$q);
$arcount=count($spl);
$searchkey=$spl[$arcount-1];
if (strpos($q,'project') !== false && strpos($q,'by') !== false && strlen($searchkey)>=3) {
    $query1=$this->mongo_db->like('name', $searchkey,'i');
    $query1=$this->mongo_db->get('student');
    //$query1=$this->mongo_db->get_where('student',array('name'=>$searchkey));
    if($query1){
    $query=$this->mongo_db->get_where('projectwaiting',array('members'=>$query1[0]['_id']));
    $count5=0;
    foreach ($query as $row) {
      echo '<tr>';
      echo '<td>';
      $count5++;
      if($count5>10)
        break;
      echo '<a href="'.site_url('welcome/project/'.$row['_id']).'">';
      echo $row['pname'];
      echo '</a>';
    echo '</td>';
    echo '</tr>';
    }
  }
  }
$spl=explode(" ",$q);
$arcount=count($spl);
$searchkey=$spl[$arcount-1];
if (strpos($q,'project') !== false && strpos($q,'on') !== false && strlen($searchkey)>=1) {
    $query1=$this->mongo_db->like('name', $searchkey,'i');
    $query1=$this->mongo_db->get('tags');
 $count5=0;
    //$query1=$this->mongo_db->get_where('student',array('name'=>$searchkey));
    foreach($query1 as $doc)
       
    foreach ($doc['projects'] as $row) {
        $count5++;
      if($count5>10)
        break;
      $range=$this->mongo_db->get_where('projectwaiting',array('_id' =>$row));
      if($range){
      if($range[0]['_id']!=null){
      echo '<tr>';
      echo '<td>';
      echo '<a href="'.site_url('welcome/project/'.$range[0]['_id']).'">';
      echo $range[0]['pname'];
      echo '</a>';
    echo '</td>';
    echo '</tr>';
    }}}
  }
  if (strpos($q,'project') !== false && strpos($q,'under') !== false && strlen($searchkey)>=3) {
    $query=$this->mongo_db->like('sname', $searchkey,'i');
    $query=$this->mongo_db->get('projectwaiting');
    //$query1=$this->mongo_db->get_where('student',array('name'=>$searchkey));
    if($query){
    //$query=$this->mongo_db->get_where('projectwaiting',array('members'=>$query1[0]['_id']));
    $count5=0;
    foreach ($query as $row) {
      echo '<tr>';
      echo '<td>';
      $count5++;
      if($count5>10)
        break;
      echo '<a href="'.site_url('welcome/project/'.$row['_id']).'">';
      echo $row['pname'];
      echo '</a>';
    echo '</td>';
    echo '</tr>';
    }
  }
  }

}
if($r=="all" || $r=="student")
{
  if (strpos($q,'top') !== false) {
    $db=new Mongo();
    $query=$db->kdb->student->find();
    //$query=$this->mongo_db->get('student');
    $query->sort(array('cgpa' =>-1 ));
    $count5=0;
    foreach ($query as $row) {
      echo '<tr>';
      echo '<td>';
      $count5++;
      if($count5>10)
        break;
      echo '<a href="'.site_url('welcome/student/'.$row['regno']).'">';
      echo $row['name'];
      echo '</a>';
    echo '</td>';
    echo '</tr>';
    }
  }

    else
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
    if($count1>3)
  {break;}
    echo '<tr>';
    echo '<td>'; 
   ?>
    <a href="<?php echo site_url('welcome/student/'.$doc['regno'])?>" style="text-decoration:none;color:green"><?php echo $doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}
}
$this->mongo_db->like('regno', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('student');
foreach ($query as $doc) {
    $count1=$count1+1;
    if($count1>3)
    {break;}
    echo '<tr>';
    echo '<td>'; 
     ?>
    <a href="<?php echo site_url('welcome/student/'.$doc['regno'])?>" style="text-decoration:none;color:green"><?php echo $doc['regno']." ".$doc['name'].'<br>';?></a>
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

$this->mongo_db->like('name', $q,'i');
//$query=$this->mongo_db->like('name',$q,'i','TRUE');
$query=$this->mongo_db->get('tags');
foreach ($query as $doc) {
  foreach($doc['projects'] as $row)
  {
    $count4=$count4+4;
    if($count1>4)
    {break;}
    echo '<tr>';
    echo '<td>'; 
    $val=$this->mongo_db->get_where('projectwaiting',array('_id'=>$row));
     ?>
    <a href="<?php echo site_url('welcome/project/'.$val[0]['_id'])?>" style="text-decoration:none;color:#DC143C"><?php echo $val[0]['pname'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}
}
if($count4==0)
{
  echo '<tr>';
  echo '<td style="color:blue">';
  echo "No Result found";
   echo '</td>';
echo '</tr>';
}
}
echo '<tr>';
echo '<td>';
echo '<a href="'.site_url('welcome/result/'.$q.'/'.$r).'">'."Results for"." ".'<strong>'.$q.'</strong>'.'</a>';
echo '</td>';
echo '</tr>';
echo '</table>';

?>

