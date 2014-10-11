<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   
  $result=$this->mongo_db->get_where('user', array('email' => $username , 'password'=> $password ));
   if($result)
   {
     return $result;
   }
   else
   {
     return false;
   }
 }
}
?>
