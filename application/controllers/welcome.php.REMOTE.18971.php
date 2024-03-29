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
		$this->load->view('index');
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
	public function club()
	{
		$this->load->view('clubsignup.php');

	}
	
	public function update()
	{
		$this->load->view('privatewallview');
	}
	public function send()
	{
		$this->load->view('p-register');
	}
	public function logout()
	{
		session_destroy();
		redirect('welcome','refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
