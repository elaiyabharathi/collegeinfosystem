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

    .link{cursor:pointer}

</style>

   </head>
	<body onload="init()">
	 <?php $this->load->view('navbar');?>
		<?php $this->load->view('sidebar');?>
    <?php $this->load->view('ann/ann_home.php'); ?>
  <script src="/igniter/assets/js/jquery.js"></script>  
  <script src="/igniter/assets/js/bootstrap-alert.js"></script>  
</body>
</html>		