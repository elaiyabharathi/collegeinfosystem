<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Newevent extends CI_Controller{

	function __construct(){
		parent::__construct();
		echo "hi";
		$this->load->model('eventmodel');
		echo "hi1";
		$_SESSION['eventErrExist']='true';
	}
	function index(){


		echo "hi2";
		if ($_POST['locationx'] == "empty")
			$location = $_POST['location'];
		else 
			$location = $_POST['location']." ".$_POST['locationx'];
		$result=$this->eventmodel->validate($_POST['startdate'],$_POST['starttime'],$_POST['enddate'],$_POST['endtime'],$location);
		if($result){
			
			$this->eventmodel->insert($_POST['name'],$_POST['description'],$_POST['startdate'],$_POST['starttime'],$_POST['enddate'],$_POST['endtime'],$location,$_POST['target'],$_POST['type'],$_POST['uid']);
			echo $_POST['startdate'].$_POST['starttime'].$_POST['enddate'].$_POST['endtime'];
			$_SESSION['eventErrExist']='false';
			#$this->load->view('privatewallview.php');

		}
		else
		{
			$res = $this->mongo_db->get_where('event', array('location' => $location));
			foreach ($res as $current){ 
			$msg="The event <b>".$current['name']."</b> is also at the same location and taking place during that time. Please choose a different time and/or location for your event";
			}
			$_SESSION['eventErr']=$msg;
			$data['error']="Date error";
			#$this->load->view('privatewallview.php',$data);
		}
	}
}
?>
