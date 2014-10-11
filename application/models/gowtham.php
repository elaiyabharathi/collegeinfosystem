<?php
Class Gowtham extends CI_Model
{
 
   public function index($filename, $title)
   {
      $data = array(
         'filename'     => $filename,
         'title'        => $title
      );
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }
 
}