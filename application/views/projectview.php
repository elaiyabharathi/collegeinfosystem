<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
       College Info System
        </title>
        <link rel="shortcut icon" href="/igniter/favicon.ico">

		<meta charset="utf-8">
<style>	
        input.Submit{
                width: 2em;
        }
        h4{
                float:right;
                color:red;
                font-size:30px;
                padding:4;
        }
        h2{
                height:40px;
                font-size:44px;
                color:green;
                font-family:Courier;  
        }
        body {font-size: 80%; font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif; }
        div.tabContent { border: 1px solid #c9c3ba; padding: 0.5em; background-color: #f1f0ee; }
        
</style>

   </head>
	<body onload="init()">
	 <?php 	$this->load->view('navbar');?>

		<?php $this->load->view('sidebar');?>
	
</td><td></td><td>
<div class="col-md-9 container">
<div class="well col-md-12">
		
		<table>
  <tr>
  <td width="200px">Name </td>
  <?php echo '<td>'.$query[0]['pname']. '</td>' ?>
  </tr>
  <tr>
  <td>Registered By </td>
    <?php 
    $c=0;
    $members="";
    foreach($query[0]['members'] as $row){
    if($c>0)
    $members=$members.",";
    $x=$this->mongo_db->get_where('student',array('_id' => $row));
    $members=$members.'<a href="'.site_url('welcome/student/'.$x[0]['regno']).'">'.$x[0]['name'].'</a>';
    $c=$c+1;
    }
    echo '<td>'.$members.'</a></td>'; ?>
  </tr>
  <tr>
  <td>Department </td>
    <?php echo '<td>'.$query[0]['dept']. '</td>' ?>
  </tr>
  <tr>
  <td>Staff Incharge :  </td>
    <?php echo '<td>'.$query[0]['sname']. '</td>' ?>
  </tr>
  <tr>
  <td>Project Status </td>
    <?php echo '<td>'.$query[0]['status']. '</td>' ?>
  </tr>
  <tr>
  <td>Description :</td>
    <?php echo '<td>'.$query[0]['description']. '</td>' ?>
  </tr>
  </table>

  
  
</div>
   </div>
   
   <script src="/igniter/assets/js/jquery.js"></script>  
   <script src="/igniter/assets/js/bootstrap-alert.js"></script>  
</body>
</html>		