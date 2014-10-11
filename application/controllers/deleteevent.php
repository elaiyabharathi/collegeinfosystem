<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
	class Deleteevent extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('eventmodel');
		}
		function index()
		{
			if(!isset($_SESSION['usr']))
			{
				session_start();
			}
			$_id=$this->input->post('_id');
			echo 'hi';
			$this->eventmodel->delete($_id);
			echo 'hi';
			header( 'Location: event/Full' ) ;
		}
	}
?>
