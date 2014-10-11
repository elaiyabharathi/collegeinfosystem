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
			if($this->conflictcheck->check_rollno($_POST['rollno']))
			{
				$data['error']="Register Number Already Exists....";
				$this->load->view('studentsignup',$data);
			}
			elseif ($this->conflictcheck->check_email($_POST['email']))
			 {
				$data['error']="Email Id Already Exists";
				$this->load->view('studentsignup',$data);
			}
			else
			{

			$this->studsignmodel->ins($_POST['rollno'],$_POST['email'],$_POST['name'],md5($_POST['password']));
			$data['success']="Signed Up Successfully";
			$this->load->view('studentsignup',$data);
			}
		}
		else
		{
			$data['error']="Passwords doesn't match";
			$this->load->view('studentsignup',$data);
		}
	}
}