<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Editclubprofile extends CI_Controller{
    
	function __construct(){
	parent::__construct();
	$this->load->model('clubsignupmodel');
	$this->load->model('conflictcheck');
	}
	function index(){
			
			if ($this->conflictcheck->check_club_email($_POST['mail']))
			 {
				echo '<script>';
				echo 'alert("Email ID Already Exists")';
				echo '</script>';
				$this->load->view('editclubprofile');
			}
			else
			{

				$this->clubsignupmodel->updating_club($_SESSION['clubid'],$_POST['clubname'],$_POST['mail'],$_POST['cname1'],$_POST['cnum1'],$_POST['cname2'],$_POST['cnum2'],$_POST['description']);
				echo '<script>';
				echo 'alert("Your Profile Has been Updated Successfully")';
				echo '</script>';
				$this->load->view('clubprofile');
			}
		}
		function passwd()
		{
			if($_POST['pass']==$_POST['repass'])
			{
				$this->clubsignupmodel->changepass(md5($_POST['pass']));
				echo '<script>';
				echo 'alert("Your Password Has been Changed Successfully")';
				echo '</script>';
				$this->load->view('clubprofile');
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
?>