<?php
class Editprofilemodel extends CI_Model{

function inse($fname,$lname,$email,$pass,$sex,$day,$month,$year)
{
	
	$mongo = new Mongo();
	$collection = $mongo->kdb->user;
	$check=$this->mongo_db->get_where('user', array('email' => $email));
	$collection->update(array('fname' =>$check[0]['fname'],'lname' =>$check[0]['lname'],'sex' =>$check[0]['sex'],
		'password' =>$check[0]['password'],'day' =>$check[0]['day'],'month' =>$check[0]['month'],'year' =>$check[0]['year']),
	array('$set' => array('fname' => $fname,'lname'=>$lname,'sex'=>$sex,'password'=>$pass ,'day'=>$day,'month'=>$month,'year'=>$year)));
}
}
?>