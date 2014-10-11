<?php
session_start();
class Staffsignup extends CI_Controller{
    
	function __construct(){
	parent::__construct();
	$this->load->model('staffsignupmodel');
	}
	function index(){

	if( $_POST['pass']==$_POST['repass'])
	{
		$this->staffsignupmodel->staff($_POST['name'],$_POST['rank'],$_POST['email'],$_POST['dept'],$_POST['pass'],$_POST['sex'],$_POST['day'],$_POST['month'],$_POST['year'],$_POST['specialization'],$_POST['id'],$_POST['phone']);
		$data['signedup']="Signed Up Successfully";
		$this->load->view('Front Page View.php');
	}
	else
	{
	$data['error1']='error signing up';
	$this->load->view('Front Page View.php',$data);
	}
	}
}
?>