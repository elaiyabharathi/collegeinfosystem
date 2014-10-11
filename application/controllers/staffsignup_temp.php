<?php
session_start();
class Studentsignup extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('studsignmodel');
		$this->load->model('conflictcheck');
	}
	function index()
	{
		if($_POST['password']==$_POST['repass'])
		{
			echo $_POST['password'];
			if($this->conflictcheck->check_staffid($_POST['staffid']))
			{
				$data['error']="Staff ID Already Exists....";
			//	$this->load->view('staffsignup_temp',$data);
			}
			elseif ($this->conflictcheck->check_staff_email($_POST['email']))
			 {
				$data['error']="Email Id Already Exists";
			//	$this->load->view('staffsignup_temp',$data);
			}
			else
			{

			$this->studsignmodel->ins_staff($_POST['staffid'],$_POST['email'],md5($_POST['password']));
			$data['success']="Signed Up Successfully";
		//	$this->load->view('staffsignup_temp',$data);
			}
		}
		else
		{
			$data['error']="Passwords doesn't match";
		//	$this->load->view('staffsignup_temp',$data);
		}
	}
}