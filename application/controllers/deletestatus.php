<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
	class Deletestatus extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('putstatusmodel');
		}
		function index()
		{
			if(!isset($_SESSION['usr']))
			{
				session_start();
			}
			$_id=$this->input->post('_id');
			echo 'hi';
			$this->putstatusmodel->delete($_id);
			echo 'hi';
			$this->load->view('privatewallview');
		}
	}
?>
