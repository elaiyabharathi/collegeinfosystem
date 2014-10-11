<?php session_start();

class Stafflogin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('p_loginmodel');
	}
	function index()
	{
		$regno=$_POST['staffid'];
		$password=$_POST['pass'];
		$result = $this->p_loginmodel->check_staff($regno,md5($password));
		if($result)
		{
			$_SESSION['fname']=$result[0]['name']; //change later
			$_SESSION['lname']='';		//change later
			$_SESSION['staffid']=$result[0]['staffid'];
			$_SESSION['type']="staff";
			$_SESSION['uid']=$result[0]['_id'];
			//$this->load->view('staff/staffview');

		//	$this->load->view('privatewallview');

			//$this->load->view('privatewallview');



		}
		else
		{
			 echo '<script>';
            echo 'alert("Invaild ID Or Password")';
            echo '</script>';
			//$data['error']="Invaild ID Or Password";
			//$this->load->view('start',$data);
		}
		redirect('welcome','refresh');
	}
	public function find()
	{
		$data['str']=$this->input->post("str");
		$this->load->view('find',$data);
	}
	public function studsign()
	{
		$this->load->view('studentsignup.php');
	}
}