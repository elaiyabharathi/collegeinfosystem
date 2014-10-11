<?php

functon sendmail($proj,$to)
{
	$this->load->library('email');

	$this->email->from('Inceg@gmail.com', 'Your Name');
	$this->email->to($to); 
	$this->email->subject('Project Authentication');
	$messge="Greetings ."+
				"This is an auto-generated mail from the student portal of College of Engineering."+
				"Project name".$proj['name']."\n Project Description".$proj['description']."\n" +
				"Please click on this link to confirm this" +
				" www.studentportal.com/confirmproject".$proj['random']."Proj'".$proj['id']."'"
	$this->email->message($message);	
	$this->email->send();
}

?>
