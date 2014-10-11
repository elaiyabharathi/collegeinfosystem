<?php

class Studupdate extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('studsignmodel');
		$this->load->model('conflictcheck');
	}
	function index()
	{
		
			{

			$this->studsignmodel->update($_POST['email'],$_POST['name'],$_POST['bday'],$_POST['bmonth'],$_POST['byear'],$_POST['dept'],$_POST['sex'],$_POST['intrest'],$_POST['aboutme']);
			$data['success']="Your Profile Updated Successfully";
			$_SESSION['fname']=$_POST['name']; 
			$this->load->view('privatewallview',$data);
			}
		
	} 
	function passwd()
	{
			if($_POST['password']==$_POST['repass'])
		{
			if($_SESSION['type']=="student")
			$this->studsignmodel->passwd(md5($_POST['password']));
			$data['success']="Your Password Changed Successfully";
			$this->load->view('privatewallview',$data);
		}
		else
		{
			$data['error']="Passwords doesn't match";
			$this->load->view('privatewallview',$data);
		}
	}
	function pic()
	{
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    }
}