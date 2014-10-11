<?php
session_start();
class Clubsignupcontrol extends CI_Controller{
    
	function __construct(){
	parent::__construct();
	$this->load->model('clubsignupmodel');
	$this->load->model('conflictcheck');
	}
	function index(){

	if($_POST['pass']==$_POST['repass'])
		{
			
			if($this->conflictcheck->check_clubid($_POST['clubid']))
			{
				$data['error']="Club ID Already Exists....";
				$this->load->view('clubsignup',$data);
			}
			elseif ($this->conflictcheck->check_club_email($_POST['mail']))
			 {
				$data['error']="Email Id Already Exists";
				$this->load->view('clubsignup',$data);
			}
			else
			{

		$this->clubsignupmodel->club($_POST['clubid'],$_POST['clubname'],$_POST['mail'],md5($_POST['pass']),$_POST['cname1'],$_POST['cnum1'],$_POST['cname2'],$_POST['cnum2'],$_POST['description']);
		$data['success']="Signed Up Successfully";
		$this->load->view('clubsignup.php');
			}
		}
	else
	{
	$data['error']="Password Doesn't match";
	$this->load->view('start.php',$data);
	}
	}
}
?>