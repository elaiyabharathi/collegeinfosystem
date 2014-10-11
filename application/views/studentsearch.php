<!DOCTYPE html>
<html lang="en">
	<head>
		<title>

       College Info System
        </title>
        <link rel="shortcut icon" href="/igniter/favicon.ico">
        <link rel="stylesheet" href="/igniter/assets/css/jquery-ui.css">
  <script src="/igniter/assets/js/jquery-1.9.1.js"></script>
  <script src="/igniter/assets/js/jquery-ui.js"></script>
		<meta charset="utf-8">
<style>	
</style>
   </head>
	<body onload="init()">
	 <?php $this->load->view('navbar');?>
	 <div class="col-md-1"></div>
	 <div class="col-xs-2" >
	<br><br>
        	<?php 
		  echo '<img src="/igniter/assets/images/profilepic/'.$stud[0]['regno'].'.jpg " width="160" height="170">';
		  ?>
        	</div>

	<div class="col-xs-8" >
      <ul id="myTab" class="nav nav-pills">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li>
          <a href="#aboutme" data-toggle="tab">About Me</a>
        </li>
        <li><a href="#projects" data-toggle="tab">Projects</a></li>
        
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
        	<br>
        	<table class="table table-hover">
        		<tr><td>Register Number</td><td><?php echo $stud[0]['regno'];?>   </td></tr>
        		<tr><td>Name</td><td><?php echo $stud[0]['name'];?>   </td></tr>
        		<tr><td>Email </td><td><?php echo $stud[0]['email'];?>   </td></tr>
        		<tr><td>Department </td><td><?php echo $stud[0]['dept'];?>   </td></tr>
        		<tr><td>Gender </td><td><?php echo ucfirst($stud[0]['sex']);?>   </td></tr>
        		<tr><td>Date of Birth </td><td><?php echo $stud[0]['bday']."/".$stud[0]['bmonth']."/".$stud[0]['byear'];?>   </td></tr>
        		<tr class="active"><td>Area of Interest </td><td><ul class="list-inline"><?php 
			foreach($stud as $inter)
			{
        if(isset($inter['interest'])){
			foreach($inter['interest'] as $stu)
			{echo '<li>';
			echo $stu;
			echo '<br>';
			echo '</li>';
			}}}?> </ul>  </td></tr>
            
        	</table>         
        </div>
        <div class="tab-pane fade" id="projects"><br>
<div id="accordion">
<?php
$db    = new Mongo();
$query = $db->kdb->projectwaiting->find();
$query =$this->mongo_db->get_where('projectwaiting',array('regno'=>$stud[0]['regno']));
foreach ($query as $current) {
 echo ' <div class="row"><thead>  <div class="col-md-5"> '.$current['pname'].'</div><div class="col-md-5">'. $current['sname'].'</div></thead> </div>';
    $title=$current['description'];
 echo '<div class="pane">';
    echo $title;
    echo '</div>';
  }
   
?>
</div>
      
        </div>
        <div class="tab-pane fade" id="aboutme"><br>
<div id="accordion" class="well">

            <?php echo $stud[0]['aboutme']?> 
  
</div>
      
        </div>
      </div>
    </div>
      <div class="fb-like-box" data-href="http://www.facebook.com/itrixceg" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
  
<script>
$( "#accordion" ).accordion( { heightStyle: "content", active: 0 });
</script>
 <script src="/igniter/assets/js/jquery.js"></script>  
   <script src="/igniter/assets/js/bootstrap-alert.js"></script>  

</body>
</html>		
  	