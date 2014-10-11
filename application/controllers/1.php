<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Event extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('eventmodel');
		$this->load->model('p_loginmodel');
		if(!isset($_SESSION['type']))
		{
			
			redirect(site_url('../'));
			return true;
		}
	      return false;
	}

	public function index()
	{
		$this->Full();
	}



	public function FormFull()
	{
		$this->load->view('navbar');
#echo '<div class="row"><div class="col-md-4">';
		$this->load->view('sidebar');
#echo '</div><div class="col-md-8"><div id="eventSidebar">';
#$this->load->view('event/eventHolder');
#echo '</div></div>';
#echo '</div>';
		$this->load->view('event/eventForm');
		$this->load->view('footer');
	}
	public function check()
	{

		if($_SESSION['type']=='club')
		{
			$check = $this->p_loginmodel->check1();
    		if($check[0]['password']==md5($_POST['pass']))
    		{
        		$this->load->view('livesearch1');
    		}	   
    		else
    		{
        		echo '<script>';
        		echo 'alert("Incorrect Password")';
        		echo '</script>';
        		$this->load->view('clubprofile');
    		}
    	}
      	else
    	{
    		$this->load->view('index.html');
    	}
	}

		$check = $this->p_loginmodel->check1();
		if($check[0]['password']==md5($_POST['pass']))
		{
			$this->load->view('livesearch1');
		}   
		else
		{
			echo '<script>';
			echo 'alert("Incorrect Password")';
			echo '</script>';
			echo $check[0]['password'];
			echo $_POST['pass'];
			$this->load->view('clubprofile');
		}
	}	

	public function live()
	{
		$this->load->view('livesearch1');	
	}	
	public function President()
	{
		if($_SESSION['type']=='club')
		{
		$this->load->view('navbar');
#echo '<div class="row"><div class="col-md-4">';
		$this->load->view('sidebar');
#echo '</div><div class="col-md-8"><div id="eventSidebar">';
#$this->load->view('event/eventHolder');
#echo '</div></div>';
#echo '</div>';
		$this->load->view('club/president');
		$this->load->view('footer');}
		else
		{
			$this->load->view('index.html');
		}
	}	
	public function Full()
	{
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('event/eventHolder');
		$this->load->view('footer');
	}

	public function presadd()

	{	if($_SESSION['type']=='club'){
		$this->load->view('club/pres_select');}
		else
		{
			$this->load->view('index.html');
		}
	}	
	

	{	
		$this->load->view('club/pres_select');
	}

	public function SnH()
	{
		$this->load->view('event/SnHRoomList');
	}
	public function Main()
	{
		$this->load->view('event/MainRoomList');
	}
	public function List1()
	{
		$this->load->view('event/eventSidebar');
	}	
	public function List3()
	{
		$this->load->view('event/eventLocation');
	}
	public function List2()
	{
		$this->load->view('event/eventName');
	}
	public function Form()
	{
		$this->load->view('event/eventForm');

	}
	public function dateFilter()
	{
		$data['date'] = $_POST['date'];
		$this->load->view('event/dateFilter',$data);
	}
	public function padd()
	{


		$this->load->view('navbar');		
		$this->load->view('sidebar');		
		$this->load->view('projectlist');
		$this->load->view('footer');
	}	
	public function padd1()
	{

		if($_SESSION['type']=='club')
		{$this->load->view('navbar');		


		$this->load->view('navbar');		

		$this->load->view('sidebar');	
		$this->load->view('clubpreslist.php');	
		$this->load->view('footer');}
		else
		{
			$this->load->view('index.html');
		}
	}	
		
	public function projectadd()
	{

		$this->load->view('navbar');		
		$this->load->view('sidebar');		
		$this->load->view('project');
		$this->load->view('footer');
	}	
	public function livesearch()
	{
		$data['str']=$this->input->post("str");
		$this->load->view('livesearch',$data);
	}
	public function find()
	{
		$data['str']=$this->input->post("str");
		$this->load->view('find',$data);
	}
	public function staffs()
	{
		$data['dept']=$this->input->post("dept");
		$this->load->view('stafflist',$data);
	}
	public function posts()
	{
		$data['post']=$this->input->post("post");
		$this->load->view('postlist',$data);
	}
	public function team()
	{
		$data['number']=$this->input->post("number");
		$this->load->view('teammembers',$data);
	}
	public function direct()
	{
		$data['number']=$this->input->post("number");
		$this->load->view('directmembers',$data);
	}
	public function staffshow()
	{
		$this->load->view('navbar');		
		$this->load->view('sidebar');		
		$this->load->view('staff/staffholder');
		$this->load->view('footer');
	}
	public function splist()
	{

		$this->load->view('navbar');		
		$this->load->view('sidebar');		
		$this->load->view('staffsproj');
		$this->load->view('footer');
	}	


}

?>
