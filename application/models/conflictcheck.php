<?php

class Conflictcheck extends CI_Model{
	function check_email($email){
		$check=$this->mongo_db->get_where('student',array('email'=>$email));
		return $check;
	}
	function check_rollno($rollno){
		$check=$this->mongo_db->get_where('student',array('regno'=>$rollno));
		return $check;
	}
	function check_staff_email($email){
		$check=$this->mongo_db->get_where('staff',array('email'=>$email));
		return $check;
	}
	function check_staffid($staffid){
		$check=$this->mongo_db->get_where('staff',array('staffid'=>$staffid));
		return $check;
	}
	function check_club_email($email){
		$check=$this->mongo_db->get_where('club',array('email'=>$email));
		return $check;
	}
	function check_clubid($clubid){
		$check=$this->mongo_db->get_where('club',array('clubid'=>$clubid));
		return $check;
	}
}