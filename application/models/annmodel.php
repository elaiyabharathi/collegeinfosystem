<?php
//session_start();
Class Annmodel extends CI_Model
{
 function insert($aname,$atype,$sname,$desc,$tags)
 {
  $query =$this->mongo_db->get_where('staff',array('name'=>$sname)); 
  $sid=$query[0]['staffid'];
  
  $result=$this->mongo_db->insert('announcement', array('staffid'=> $sid,'content'=>$desc ,'topic'=>$aname,'date'=>date("Y/m/d"),'tags'=>$tags));
   if($result)
   {
     return $result;
   }
   else
   {
     return false;
   }
 }
}
?>