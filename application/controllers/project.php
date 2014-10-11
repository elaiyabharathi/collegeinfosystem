<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Project extends CI_Controller{    

	function __construct(){
	parent::__construct();
	$this->load->model('projectmodel');
	}
	function index(){
		$tags=$_POST['tags'];
		$tags=explode(",",$tags);
		
		if($_POST['dept']!="Other")
		$this->projectmodel->insert($_POST['pname'],$_POST['dept'],$_POST['sname'],$_POST['rollno'],$_POST['description'],$_POST['no'],$_POST['area'],$tags);
		else
		$this->projectmodel->other($_POST['pname'],$_POST['dept'],$_POST['sname'],$_POST['designation'],$_POST['email'],$_POST['rollno']
		,$_POST['description'],$_POST['no'],$_POST['area'],$tags);
		$this->tagadd($tags,$_POST['pname']);
		$data['project']="Your project <b><i> ".$_POST['pname']." </b></i>sent succesfully";
		$this->load->view('studhome.php',$data);		
	}
	private function tagadd($tags,$pname)
	{
		$query=$this->mongo_db->get_where('projectwaiting',array('pname'=>$pname));
 		$id=array($query[0]['_id']);
		foreach($tags as $tag){
		   $result=$this->mongo_db->get_where('tags',array('name'=>$tag));
		   if(!$result){
		     $this->mongo_db->insert('tags', array('name'=>$tag,'projects'=>$id));
		   }
		   else{
		      $query=$this->mongo_db->get_where('tags',array('name'=>$tag));
		      $pids=$query[0]['projects'];
		      array_push($pids,$id[0]);
		      $this->mongo_db->update('tags',array('name'=>$query[0]['name'],'projects'=>$pids),array('_id'=>$query[0]['_id']));
		   }		   
		  }
	}
}
?>