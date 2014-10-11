<?php 
class Genclub extends CI_Model{

function find($name)
{
  	  $mongo = new Mongo();
  	  $db = $mongo->kdb;
  	  $co = $db->club;
  	  $check=$this->mongo_db->get_where('club',array('clubid' =>$name));
  	  return $check;
 	  }
 }
 ?>