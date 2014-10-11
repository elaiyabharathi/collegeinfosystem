<?php session_start();
if(!isset($_SESSION))
{
	redirect('welcome','refresh');
}
class P_logincheck extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('p_loginmodel');
	}
	function index()
	{
		$regno=$_POST['regno'];
		$password=$_POST['pass'];
		$result = $this->p_loginmodel->check($regno,md5($password));
		if($result)
		{
			$_SESSION['fname']=$result[0]['name']; //change later
			$_SESSION['lname']='';		//change later
			$_SESSION['regno']=$result[0]['regno'];
			$_SESSION['type']="student";
			$_SESSION['user_id']=$result[0]['_id'];
			
			//$this->load->view('privatewallview');
		}
		else
		{
			//$data['error']="Invaild ID Or Password";
			//$this->load->view('start',$data);
			 echo '<script>';
            echo 'alert("Invaild ID Or Password")';
            echo '</script>';
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
	public function staffsign()
	{
		$this->load->view('staffsignup_temp.php');
	}
}