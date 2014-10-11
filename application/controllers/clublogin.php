	<?php session_start();

class Clublogin extends CI_Controller{

function __construct()
{
    parent::__construct();
    $this->load->model('p_loginmodel');
}
function index()
{
    $check=$this->p_loginmodel->find($_POST['clubid'],md5($_POST['pass']));
    if($check)
    {
        $_SESSION['clubid']=$_POST['clubid'];
        $_SESSION['type']="club";
        $_SESSION['fname']=$check[0]['clubname'];
        $_SESSION['lname']="";
        $_SESSION['uid']=$check[0]['_id'];
       // $this->load->view('newclubdetails');
    }
    else
    {
            echo '<script>';
            echo 'alert("Invaild ID Or Password")';
            echo '</script>';
            
     }
     redirect('welcome','refresh');
}
public function find()
    {
        $data['str']=$this->input->post("str");
        $this->load->view('find',$data);
    }

}
?>