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

		#$this->load->view('Front Page View');

		#$this->load->view('Front Page View');

	#$this->load->view('folder');

        if(isset($_SESSION['type']))
		{
		 if($_SESSION['type']=='student')
      	{
				redirect('welcome/studenthome','refresh');
				//$this->load->view('studhome');
			}
			if($_SESSION['type']=='staff')
			{
				$this->load->view('staff/staffview');
			}
			if($_SESSION['type']=='club')
			{
					$this->load->view('clubprofile');
			}
		}
		else{
			$this->load->view('start');
		    }

	}
	public function pic()
	{
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
       $_FILES["file"]["name"]=$_SESSION['regno'].".jpg";
      move_uploaded_file($_FILES["file"]["tmp_name"],"C:/Program Files (x86)/Ampps/www/igniter/assets/images/profilepic/" . $_FILES["file"]["name"]);
      $this->load->view('studprofile');
    
     }

  }
else
  {
  echo "Invalid file";
  }
	$this->load->view('studprofile');
    }
	public function gallery()
	{
		$this->load->model('clubsignupmodel');
$result=$this->clubsignupmodel->gallerypics($_SESSION['clubid']);
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    	$result++;
	  $_FILES["file"]["name"]=$result.".jpg";
		move_uploaded_file($_FILES["file"]["tmp_name"],"C:/Program Files (x86)/Ampps/www/igniter/assets/images/gallery/".$_SESSION['clubid']."/".$_FILES["file"]["name"]."");
     	$this->clubsignupmodel->updatenoofpics($result);
     	$this->load->view('clubprofile');
     }
	 
  }
else
  {
  echo "Invalid file";
  }
    }
	
	public function staff($args)
	{
		$this->load->model('genstaff');
		
		$query=$this->genstaff->find($args);
		if($query){
		$data['query']=$query;
		$this->load->view('navbar');
		//$this->load->view('sidebar');
		$this->load->view('genericstaffprofile',$data);
		$this->load->view('footer');
		 }
		else{
		echo 'false';
	  }
		
		//$this->load->view('staffsignup.php');
	}
	public function try_post()
	{
		$this->load->view('try_post.php');
	}
	public function studsign()
	{
		$this->load->view('studentsignup.php');
	}
	public function reupdate()
	{
		if($_SESSION['type']=='club')
		{
		  $this->load->view('clubeditprofile.php');
		}
		if($_SESSION['type']=='student')
		{

		$this->load->view('studprofile');

		}
		if($_SESSION['type']=='staff')
		{
		$this->load->view('staffprofile');
		}
		
	}

	public function passwd()
	{
		if($_SESSION['type']=='student')
		{
				$this->load->view('passwd');
		}
		else if($_SESSION['type']=='club')
		{
			$this->load->view('clubpass');
		}
	}
	public function club()
	{
		$this->load->view('clubsignup.php');

	}
	
	public function home()
	{
	  $type=$_SESSION['type'];
	  if($type=='staff') 
	    $this->staffhome();
	  else if($type=='club')
	    $this->clubhome();
	  else if($type=='student')
	    $this->studenthome();
	}
	public function for_home()
	{
	
	  $type=$_SESSION['type'];
	  	echo '<script>alert("'.$type.'");</script>';
	  if($type=='student') 
	    $this->studforhome();
	  else if($type=='club')
	    $this->clubhome();
	}
	public function clubhome()
	{
		$this->load->view('navbar');
        $this->load->view('sidebar');
        $this->load->view('newclubdetails');
        $this->load->view('footer');
	}
	public function clubgallery()
	{
	   $this->load->model('clubsignupmodel');
$data['result']=$this->clubsignupmodel->gallerypics($_SESSION['clubid']);
	   $this->load->view('clubgallery',$data);
	   
	}
	public function studenthome()
	{
		$this->load->view('studhome.php');


	}
	
	public function staffhome()
	{
		$this->load->view('staff/staffhome.php');
	}
	public function studforhome()
	{
		$this->load->view('forum_home.php');
	}
	
	public function update()
	{
		$this->load->view('studhome');
	}

	public function locationCheck()
	{
		$this->load->view('location-suggest');
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
	public function padd()
	{
	
		$this->load->view('navbar');		
		$this->load->view('sidebar');		
		$this->load->view('project');
		$this->load->view('footer');
	}
	public function back()
	{
	
		$this->load->view('studhome.php');		
	}
	public function walloffame()
	{
		$this->load->view('walloffame');
	}
	public function find()
	{
		$data['str']=$this->input->post("str");
		$this->load->view('find',$data);
	}
	
	public function student($id)
	{

				$this->load->model('student');
		
		$this->load->model('student');

		$this->student->getstudentdata($id);
	}
	public function result($str,$person)
	{
		
		$data['search']=$str;
		$data['person']=$person;
		$this->load->view('searchresult',$data);
	}
	public function project($id)
	{
		$this->load->model('project');
		$this->project->getprojectdata($id);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
