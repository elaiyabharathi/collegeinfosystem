<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
	class Acceptproject extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('projectmodel');
		}
		function index()
		{
			if(!isset($_SESSION['usr']))
			{
				session_start();
			}
			$_id=$this->input->post('_id');
			$recommend=$this->input->post('recommend');
			echo $recommend;
			//echo 'hi';
			$this->projectmodel->acceptproject($_id,$recommend);
			//echo 'hi';
			//header( 'Location: ' ) ;
			$this->load->view('staff/staffnotification');
		}
	}
?>
