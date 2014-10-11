<?php
session_start();
 //$query = $this->mongo_db->get_where('student',array('regno'=>$_SESSION['regno']));
class Studsignmodel extends CI_Model{
	function ins($rollno,$email,$name,$password)
	{
		$this->mongo_db->insert('student',array('regno'=>$rollno,'email'=>$email,'name'=>$name,'password'=>$password,'bday'=>null,'bmonth'=>null,'byear'=>null,'dept'=>null,'sex'=>null,'interest'=>null,'aboutme'=>null));
	}
	function ins_staff($staffid,$email,$name,$dept,$password)
	{
		$this->mongo_db->insert('staff',array('staffid'=>$staffid,'email'=>$email,'name'=>$name,'dept'=>$dept,'password'=>$password));
	}
	function update($email,$name,$d,$m,$y,$dept,$sex,$interest,$aboutme)
	{
      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->student;
      $newdata = array('$set' => array('email'=>$email,'name'=>$name,'bday'=>$d,'bmonth'=>$m,'byear'=>$y,'dept'=>$dept,'sex'=>$sex,'interest'=>$interest,'aboutme'=>$aboutme));
      $co->update(array('regno' =>$_SESSION['regno']),$newdata);		  
 	}
 	function passwd($p)
	{
      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->student;
      $newdata = array('$set' => array('password'=>$p));
      $co->update(array('regno' =>$_SESSION['regno']),$newdata);		  
 	} 
}