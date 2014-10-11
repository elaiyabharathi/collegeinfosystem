<?php
	session_start();
	class Logincheck extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('user');
		}
		function index()
		{
			$email=$this->input->post("email");
			$password=$this->input->post("pass");
			$result=$this->user->login($email,$password);
			
			if($result)
			{
				$_SESSION['email']=$email;
				$_SESSION['fname']=$result[0]['fname'];
				$_SESSION['lname']=$result[0]['lname'];
				if($this->input->post('remember'))
				{
					setcookie('remember_me',$_POST['email']);
					setcookie('remember_me1',$_POST['pass']);
				}	
				else
				{
					setcookie('remember_me',"");
					setcookie('remember_me1',"");
				}
				$this->load->view('staff/staffview');

			}
			else
			{	
				$data['error']="Invaild username or password";
				//echo "<font color='WHITE'>Invalid Username or Password. Try Again</font>";
				$this->load->view('Front Page View.php',$data);
			}
		}
	}
?>
