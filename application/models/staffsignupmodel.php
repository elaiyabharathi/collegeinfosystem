<?php
/*class Staffsignupmodel extends CI_Model{
function staff($name,$rank,$email,$dept,$pass,$sex,$day,$month,$year,$specialization,$id,$phone)
{
	$this->mongo_db->insert('staff',array('name'=>$name,'email'=>$email,'password'=>$pass,'sex'=>$sex,'day'=>$day,'month'=>$month,'year'=>$year,'rank'=>$rank,'dept'=>$dept,'specialization'=>$specialization,'id'=>$id,'phone'=>$phone));
	return true;
}
}*/
?>

<?php
session_start();
 //$query = $this->mongo_db->get_where('student',array('regno'=>$_SESSION['regno']));
class Staffsignupmodel extends CI_Model{
	function ins($rollno,$email,$name,$password)
	{
		$this->mongo_db->insert('student',array('regno'=>$rollno,'email'=>$email,'name'=>$name,'password'=>$password,'bday'=>null,'bmonth'=>null,'byear'=>null,'dept'=>null,'sex'=>null));
	}
	function ins_staff($staffid,$email,$name,$dept,$password)
	{
		$this->mongo_db->insert('staff',array('staffid'=>$staffid,'email'=>$email,'name'=>$name,'dept'=>$dept,'password'=>$password));
	}
	function update($email,$name,$d,$m,$y,$dept,$sex,$areaofint)
	{
      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->student;
      $newdata = array('$set' => array('email'=>$email,'name'=>$name,'bday'=>$d,'bmonth'=>$m,'byear'=>$y,'dept'=>$dept,'sex'=>$sex,'area of interest'=>$areaofint));
      $co->update(array('staffid' =>$_SESSION['staffid']),$newdata);		  
 	}
 	function passwd($p)
	{
      $mongo = new Mongo();
	  $db = $mongo->kdb;
	  $co = $db->student;
      $newdata = array('$set' => array('password'=>$p));
      $co->update(array('regno' =>$_SESSION['regno']),$newdata);		  
 	} 
}