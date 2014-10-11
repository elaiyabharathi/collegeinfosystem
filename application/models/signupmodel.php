<?php
class Signupmodel extends CI_Model{

function inse($fname,$lname,$email,$pass,$sex,$day,$month,$year)
{
	$this->mongo_db->insert('user',array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'password'=>$pass,'sex'=>$sex,'day'=>$day,'month'=>$month,'year'=>$year));
	return true;
}
}
?>