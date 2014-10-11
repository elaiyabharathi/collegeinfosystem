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
	 <?php $this->load->view('navbar');?>

  <div class="row container">
   	
<div class="row container">

		<?php $this->load->view('sidebar');?>
    <div>
      <br><br>
      <?php $this->load->view('newclubdetails');?>
	</div>
   <div id="eventSidebar" class="pull-left">
        
    </div>
    <div>
      <?PHP echo form_open( 'event/president');?>

    </div>

<div class="col-md-8"> <br><br><br>
    </div>
   </div>
   
</div>
   </div>
   <script src="/igniter/assets/js/jquery.js"></script>  
   <script src="/igniter/assets/js/bootstrap-alert.js"></script>  
    </body>
</html> 