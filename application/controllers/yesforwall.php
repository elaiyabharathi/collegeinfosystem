<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
	class Yesforwall extends CI_Controller
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
			$staffid=$this->input->post('staffid');
			echo $recommend;
			//echo 'hi';
			$this->projectmodel->yesforwall($_id,$staffid);
			//echo 'hi';
			header( 'Location: event/staffshow' ) ;
		}
	}
?>
