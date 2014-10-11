<?php

session_start();
class Upload extends CI_Controller {

   function __construct()
   {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
   }

   function index()
   {
      $this->load->view('upload_form', array('error' => ' ' ));
   }
//Upload Image function
 
    function uploadImage()
 
    {
 
       $config['upload_path']   =   "uploads/";
 
       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
 
       $config['max_size']      =   "5000";
 
       $config['max_width']     =   "1907";
 
       $config['max_height']    =   "1280";
 
       $this->load->library('upload',$config);
 
       if(!$this->upload->do_upload())
 
       {
 
           echo $this->upload->display_error();
 
       }
 
       else
 
       {
 
           $finfo=$this->upload->data();
 
           $this->_createThumbnail($finfo['file_name']);
 
           $data['uploadInfo'] = $finfo;
 
           $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; 
 
           $this->load->view('upload_success',$data);
 
           // You can view content of the $finfo with the code block below
 
           /*echo '<pre>';
 
           print_r($finfo);
 
           echo '</pre>';*/
 
       }
 
    }
 
    //Create Thumbnail function
 
    function _createThumbnail($filename)
 
    {
 
        $config['image_library']    = "gd2";      
 
        $config['source_image']     = "uploads/" .$filename;      
 
        $config['create_thumb']     = TRUE;      
 
        $config['maintain_ratio']   = TRUE;      
 
        $config['width'] = "80";      
 
        $config['height'] = "80";
 
        $this->load->library('image_lib',$config);
 
        if(!$this->image_lib->resize())
 
        {
 
            echo $this->image_lib->display_errors();
 
        }      
 
    }
   function do_upload()
   {
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '1000';
      $config['max_width']  = '10240';
      $config['max_height']  = '7680';

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload())
      {
         $error = array('error' => $this->upload->display_errors());
         echo "error in uploading ....";

      }
      else
      {

         $data = array('upload_data' => $this->upload->data());
         echo $upload_data['file_name'];
         $this->load->view('studprofile', $data);
      }
   }
}
?>