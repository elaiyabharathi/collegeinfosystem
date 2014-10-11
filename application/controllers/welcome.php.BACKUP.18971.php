<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {

	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
<<<<<<< HEAD
		$this->load->view('Front Page View');

=======
		$this->load->view('index');
>>>>>>> dbb8060733f4d978a60c7a1fe6faf773562d4d45
	}
	public function staff()
	{
		$this->load->view('staffsignup.php');

	}
	public function studsign()
	{
		$this->load->view('studentsignup.php');
	}
	public function reupdate()
	{
		$this->load->view('editprofile');
	}
	public function update()
	{
		$this->load->view('privatewallview');
	}
<<<<<<< HEAD
	public function locationCheck()
	{
		$this->load->view('location-suggest');
=======
	public function send()
	{
		$this->load->view('p-register');
>>>>>>> dbb8060733f4d978a60c7a1fe6faf773562d4d45
	}
	public function logout()
	{
		session_destroy();
		redirect('welcome','refresh');
	}
	public function padd()
	{
	
		$this->load->view('navbar');		
		$this->load->view('sidebar');		
		$this->load->view('project');
		$this->load->view('footer');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
