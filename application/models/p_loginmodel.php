<?php

class P_loginmodel extends CI_Model{
	
	function check($regno,$password)
	{
		$result=$this->mongo_db->get_where('student',array('regno'=>$regno,'password'=>$password));	
		if($result)
		{
			return $result;
		}	
		else
		{
			return false;
		}
	}
	function check_staff($staffid,$password)
	{
		$result=$this->mongo_db->get_where('staff',array('staffid'=>$staffid,'password'=>$password));	
		if($result)
		{
			return $result;
		}	
		else
		{
			return false;
		}
	}
	function find($clubid,$password)
	{
		$result=$this->mongo_db->get_where('club',array('clubid'=>$clubid,'password'=>$password));	
		if($result)
		{
			return $result;
		}	
		else
		{
			return false;
		}
	}
	function check1()
	{
		$result=$this->mongo_db->get_where('club',array('clubid'=>$_SESSION['clubid']));
		return $result;	
	}
}