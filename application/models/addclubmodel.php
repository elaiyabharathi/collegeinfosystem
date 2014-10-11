<?php 
class Addclubmodel extends CI_Model{

function updating_mem($drop1,$box1)
{
$mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->clubmem;
    $check1=$this->mongo_db->get_where('student',array('regno' =>$box1));
    if($check1)
    {
	  $check=$this->mongo_db->get_where('clubmem',array('clubid' =>$_SESSION['clubid']));
    if($check)
	 	{
     		   $newdata = array('$set' => array($drop1=>$box1));
      		 $co->update(array('clubid' =>$_SESSION['clubid']),$newdata);
  	}
  	else
  	{
  			if($drop1=="president"){
  			$this->mongo_db->insert('clubmem',array('clubid'=>$_SESSION['clubid'],'president'=>$box1,'vice_president'=>" ",'directors'=>" "));}
  			if($drop1=="vice_president"){
  			$this->mongo_db->insert('clubmem',array('clubid'=>$_SESSION['clubid'],'president'=>" ",'vice_president'=>$box1,'directors'=>" "));}
    }
    return $check1;
  }
  else
  {
    return false;
  }
}
 function direct($directors,$n)
 {
    /*for($i=0;$i<$n;$i++)
    {
      $query =$this->mongo_db->get_where('student',array('regno'=>$directors[$i])); 
      $obj[$i]=$query[0]['_id'];
    }*/
    $mongo = new Mongo();
    $db = $mongo->kdb;
    $co = $db->clubmem;
  //$result=$this->mongo_db->insert('clubmem', array());
    $newdata = array('$set' => array('directors'=>$directors));
    $co->update(array('clubid' =>$_SESSION['clubid']),$newdata);
 }
 }
 ?>