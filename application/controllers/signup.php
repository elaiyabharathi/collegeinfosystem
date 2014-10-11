<?php
session_start();
class Signup extends CI_Controller{
    
	function __construct(){
	parent::__construct();
	$this->load->model('signupmodel');
	}
	function index(){

	if($_POST['email']==$_POST['reemail'] && $_POST['pass']==$_POST['repass'])
	{
		$this->signupmodel->inse($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['pass'],$_POST['sex'],$_POST['day'],$_POST['month'],$_POST['year']);
		$data['signedup']="Signed Up Successfully";
		//redirect('sendmail','refresh');
		//$to=$email;
		//$subject="Signed Up in College Info System";
		/*$message="Thank You Registering on College Info System..   Co-Founder:Sakthivel,Elaiyabharathi";
		$mail_id="kstudentportal@gmail.com";
		$headers="From:".$mail_id;
		mail($to,$subject,$message,$headers);-->*/
		$this->load->view('Front Page View.php',$data);
	}
	else
	{
	$data['error1']='error signing up';
	$this->load->view('Front Page View.php',$data);
	}
	}
}
?>