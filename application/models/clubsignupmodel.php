<?php
class Clubsignupmodel extends CI_Model{
function club($clubid,$clubname,$mail,$pass,$cname1,$cnum1,$cname2,$cnum2,$description)
{
	$this->mongo_db->insert('club',array('clubid'=>$clubid,'clubname'=>$clubname,'mail'=>$mail,'password'=>$pass,'cname1'=>$cname1,'cnum1'=>$cnum1,'cname2'=>$cname2,'cnum2'=>$cnum2,'description'=>$description));
	return true;
}
function updating_club($clubid,$clubname,$mail,$cname1,$cnum1,$cname2,$cnum2,$description)
{

      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->club;
      $newdata = array('$set' => array('clubname'=>$clubname,'mail'=>$mail,'cname1'=>$cname1,'cnum1'=>$cnum1,
			'cname2'=>$cname2,'cnum2'=>$cnum2,'description'=>$description));
      $co->update(array('clubid' =>$_SESSION['clubid']),$newdata);		  
 	/*
	$mongo = new Mongo();
	$collection = $mongo->kdb->club;
	$check=$this->mongo_db->get_where('club', array('clubid' => $clubid));
	$collection->update(array('clubname' =>$check[0]['clubname']/*,'mail' =>$check[0]['mail'],'password' =>$check[0]['password'],
		'cname1' =>$check[0]['cname1'],'cnum1' =>$check[0]['cnum1'],'cname2' =>$check[0]['cname2'],'cnum2' =>$check[0]['cnum2'],
		'description'=>$check[0]['description']),
		array('$set' =>array('clubname'=>$clubname,'mail'=>$mail,'password'=>$pass,'cname1'=>$cname1,'cnum1'=>$cnum1,
			'cname2'=>$cname2,'cnum2'=>$cnum2,'description'=>$description)));*/
}
function changepass($pass)
{

      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->club;
      $newdata = array('$set' => array('password'=>$pass));
      $co->update(array('clubid' =>$_SESSION['clubid']),$newdata);	
}
function gallerypics($id)
{
	$result=$this->mongo_db->get_where('club',array('clubid'=>$id));	
return $result[0]['noofpics'];	
}
function updatenoofpics($n)
{
$mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->club;
      $newdata = array('$set' => array('noofpics'=>$n));
      $co->update(array('clubid' =>$_SESSION['clubid']),$newdata);
}
}
?>