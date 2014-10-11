<?php 
class Project extends CI_Model{

      function getprojectdata($id)
      {
	      
	      $result=$this->mongo_db->get_where('projectwaiting',array('_id' =>$id));
	      $data['query']=$result;
	      
		$this->load->view('projectview',$data);
      }
 }
 ?>