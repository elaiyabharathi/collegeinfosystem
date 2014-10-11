<?php
//session_start();
Class Projectmodel extends CI_Model
{
 function insert($pname, $dept,$sname,$rollno,$d,$n,$area,$tags)
 {
  $query =$this->mongo_db->get_where('staff',array('name'=>$sname)); 
  $sid=$query[0]['staffid'];
  for($i=0;$i<$n;$i++)
    {
      $query =$this->mongo_db->get_where('student',array('regno'=>$rollno[$i])); 
      $obj[$i]=$query[0]['_id'];
    }
    $id=$this->mongo_db->count('projectwaiting')+250;
    echo $id;
  $result=$this->mongo_db->insert('projectwaiting', array('_id' => (string)crc32($id),'dept' => $dept , 'pname'=> $pname,'status'=>"waiting" ,'sid'=>$sid,'regno'=>$_SESSION['regno'],'sname'=>$sname,'members'=>$obj,'description'=>$d,'tags'=>$tags,'area'=>$area));
   if($result)
   {
     return $result;
   }
   else
   {
     return false;
   }
 }
 
 function other($pname, $dept,$sname,$designation,$email,$rollno,$d,$n,$area,$tags)
 {
  for($i=0;$i<$n;$i++)
    {
      $query =$this->mongo_db->get_where('student',array('regno'=>$rollno[$i])); 
      $obj[$i]=$query[0]['_id'];
    }
    $id=$this->mongo_db->count('projectwaiting');
  $result=$this->mongo_db->insert('projectwaiting', array('_id' => (string)crc32($id),'dept' => $dept , 'pname'=> $pname,'status'=>"waiting" ,'regno'=>$_SESSION['regno'],'sname'=>$sname,'members'=>$obj,'description'=>$d,'designation'=>$designation,'email'=>$email,'tags'=>$tags,'area'=>$area));
   if($result)
   {
     return $result;
   }
   else
   {
     return false;
   }
 }
 
 
 function delete($_id)
{
		/*echo $_id;
		$mongo = new Mongo();
		$db = $mongo->kdb;
		$co = $db->projectwaiting;
		$co->remove(array('_id' => new MongoId($_id)), array("safe" => true));*/
	  $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->projectwaiting;
	  $newdata = array('$set' => array("status" => "declined"));
      $co->update(array('_id' => $_id),$newdata);
	  
}
 function acceptproject($_id,$recommend)
 {
	  $staffcount=$this->mongo_db->count('staff');
      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->projectwaiting;
	  if($recommend=="recommended by incharge")
	  $rec=true;
	  else
	  $rec=false;
	  $count=1;
	  $i=1;
      $newdata = array('$set' => array("status" => "accepted","staffrec"=>$rec,"count"=>$count,"i"=>$i));
      $co->update(array('_id' => $_id),$newdata);
	  $result=$this->mongo_db->get_where('projectwaiting',array('_id' => $_id));
 }
 function yesforwall($_id,$staffid)
 {
	  $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->projectwaiting;
	  $a=$this->mongo_db->get_where('projectwaiting',array('_id'=>$_id));
	  $i=$a[0]['i'];
	  $i=$i+1;
	  $staff[i]=$staffid;
	  $newdata = array('$set' => array("projectwaiting",array('staffs'=>$staff,"i"=>$i)));
	  $co->update(array('_id' => $_id),$newdata);
 }
 }
?>
