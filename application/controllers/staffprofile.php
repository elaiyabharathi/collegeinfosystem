<?php
/*session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}*/
class Staffprofile extends CI_Controller{

function __construct()
{
    parent::__construct();
    $this->load->model('genstaff');
}
function staff($args)
{
        echo $args;
		$query=$this->genstaff->find($args);
		if($query){
		$data['query']=$query;
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('genericstaffprofile',$data);
		$this->load->view('footer');
		 }
		else{
		  echo 'false';
		  }
		
}
}
?>