<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Editprofilecon extends CI_Controller{
    
	function __construct(){
	parent::__construct();
	$this->load->model('editprofilemodel');
	}
	function index(){

	if($_POST['pass']==$_POST['repass'])
	{
		$this->editprofilemodel->inse($_POST['fname'],$_POST['lname'],$_SESSION['email'],$_POST['pass'],$_POST['sex'],$_POST['day'],$_POST['month'],$_POST['year']);
		$this->load->view('afteredit');
	}
	else
	{
	$this->load->view('editprofile.php');
	}
	}
}
?>