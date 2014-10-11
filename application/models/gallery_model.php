<?php
class Gallery_model extends CI_Model{

	var $gallery_path;
	
	function Gallery_model(){
	    parent::__construct();
	$this->gallery_path=realpath(APPPATH.'../images');
	}
	function do_upload(){
	$config=array(
	'allowed_types'=>'gif|jpg|jpeg|png',
	'upload_path'=>$this->gallery_path
	);
	
         $db = new Mongo();
         $this->mongo_db->update('pic',array('name' => 'Richard Garry'), array('$set' => array("twitter" => "@joe4153")));
		 $mongo = new Mongo();
	$collection = $mongo->kdb->pic;
	$check=$this->mongo_db->get_where('pic', array('name' => 'Richard Garry'));
	$collection->update(array('name' =>$check[0]['name']),
	array('$set' => array('profile_pic' => '221 baker street')));
	
	$this->load->library('upload',$config);
	$this->upload->do_upload();
	}
}
?>