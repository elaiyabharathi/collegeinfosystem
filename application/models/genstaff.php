<?php 
class Genstaff extends CI_Model{

function find($name)
{
  	  $mongo = new Mongo();
  	  $db = $mongo->kdb;
  	  $co = $db->club;
  	  $check=$this->mongo_db->get_where('staff',array('staffid' =>$name));
 	  return $check;
  }
 }
 ?>