<?php
session_start();
if(!isset($_SESSION['type']))
{
	$this->load->view('start');
}
class Anncontroller extends CI_Controller{

	function __construct(){
		parent::__construct();
		echo "hi";
		$this->load->model('annmodel');
		echo "hi1";
		//$_SESSION['eventErrExist']='true';
	}
	function index(){

		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('ann/post_ann');
		$this->load->view('footer');
	
	}
	function post(){
		$tags=$_POST['tags'];
		$tags=explode(",",$tags);
		
		echo '<script>alert("'.$_FILES["file"]["error"].'work aayiru")</script>';
		$this->annmodel->insert($_POST['aname'],$_POST['atype'],$_SESSION['fname'],$_POST['description'],$tags);
			$allowedExts = array("gif", "jpeg", "jpg", "png","pdf","pptx","ppt","docx","doc","xlsx","xls");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			echo '<script>alert("'.'inga err first if'.$_FILES["file"]["name"].$_POST['aname'].'")</script>';
			echo '<script>alert("'.'inga err first if'.$_FILES["file"]["size"].$_POST['aname'].'")</script>';
			if (($_FILES["file"]["size"] < 2000000)
			&& in_array($extension, $allowedExts)) {
				echo '<script>alert("'.'inga err first if'.$_FILES["file"]["size"].'")</script>';
			  if ($_FILES["file"]["error"] > 0) {
			  	echo '<script>alert("'.'inga err")</script>';
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			  } else {
			    // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			    // echo "Type: " . $_FILES["file"]["type"] . "<br>";
			    // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			    if (file_exists("upload/" . $_FILES["file"]["name"])) {
			      echo $_FILES["file"]["name"] . " already exists. ";
			    } else {
			      move_uploaded_file($_FILES["file"]["tmp_name"],
			      "uploads/" . $_FILES["file"]["name"]);
			      echo '<script>alert("'.'Stored in: ' . 'upload/' . $_FILES["file"]["name"].'")</script>';
			    }
			  }
			} else {
			  echo '<script>alert("'.'Invalid file'.'")</script>';
			}
		//$this->tagadd($tags,$_POST['pname']);
		$data['post']="Your post <b><i> ".$_POST['aname']." </b></i>has been posted succesfully";
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
