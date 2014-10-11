<?php
$q = $_GET['q'];
$count=0;
$this->mongo_db->like('name', $q,'i','FALSE');
//$query=$this->mongo_db->like('name',$q,'i','FALSE','TRUE');
$query=$this->mongo_db->get('student');
echo '<table class="table table-hover" aign="center">';
foreach ($query as $doc) {
    $count=$count+1;
    echo '<tr>';
    echo '<td>'; 
    if($count>7)
    {break;}?>
   <input type="text" name="hidden" id="hidden" value="<?php echo $doc['regno'];?>" hidden/>
   <a href="#" onclick="pullresult(<?php echo $doc['regno'];?>)" value="<?php echo $doc['regno'];?>"><?php echo $doc['regno']." ".$doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

$this->mongo_db->like('regno', $q,'i','FALSE');
//$query=$this->mongo_db->like('name',$q,'i','FALSE','TRUE');
$query=$this->mongo_db->get('student');
foreach ($query as $doc) {
    $count=$count+1;
    echo '<tr>';
    echo '<td>'; 
     if($count>7)
    {break;}?>
   <input type="text" name="hidden" id="hidden" value="<?php echo $doc['regno'];?>" hidden/>
   <a href="#" onclick="pullresult(<?php echo $doc['regno'];?>)" value="<?php echo $doc['regno'];?>"><?php echo $doc['regno']." ".$doc['name'].'<br>';?></a>
   <?php 
    echo '</td>';
    echo '</tr>';
}

echo '<tr>';
    echo '<td>';
if($count==0)
	echo 'No Result found'.'<br>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>'; 
echo '<strong>'."Results for".'</strong>'." ".$q;
echo '</td>';
echo '</tr>'; 
echo '</table>';
?>

