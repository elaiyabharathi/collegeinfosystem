<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Clubprofile extends CI_Controller{

function __construct()
{
    parent::__construct();
    $this->load->model('genclub');
}
function club($args)
{
   
		$query=$this->genclub->find($args);
		//echo $query['clubname'];
		if($query){
		$data['query']=$query;
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('genericclubprofile',$data);
		$this->load->view('footer');
		 }
		else{
		  echo 'false';
		  }
		
}
public function find()
	{
		$data['str']=$this->input->post("str");
		$this->load->view('find',$data);
	}
}
?>