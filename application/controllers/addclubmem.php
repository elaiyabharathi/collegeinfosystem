<?php session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Addclubmem extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('addclubmodel');
	}
	function index()
	{
			if($_POST['drop1']=="president" or $_POST['drop1']=="vice_president")
			{
				$check=$this->addclubmodel->updating_mem($_POST['drop1'],$_POST['box1']);
				if($check)
				{
					echo '<script>';
					echo 'alert("Updated Successfully...")';
					echo '</script>';
					$this->load->view('clubprofile');
				}
				else
				{
					echo '<script>';
					echo 'alert("Student Reg No  Doesnot Exists...")';
					echo '</script>';
					redirect('event/live','refresh');
				}
						}
			elseif($_POST['drop1']=='directors')
			{
				$this->addclubmodel->direct($_POST['directors'],$_POST['no']);
				$this->load->view('clubprofile');
			}
	}
}

