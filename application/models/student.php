<?php 
class Student extends CI_Model{

function getstudentdata($id)
{
	
	
  	  $result=$this->mongo_db->get_where('student',array('regno' =>$id));
  	 $data['stud']=$result;
  	  
  	  $this->load->view('studentsearch',$data);
 }
 }
 ?>