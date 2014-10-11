<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
       College Info System
        </title>
        <link rel="shortcut icon" href="/igniter/favicon.ico">
        <link type="text/css" rel="stylesheet" href="/igniter/assets/css/styles.css"/>

		<meta charset="utf-8">
<style>	
        table {
  border-spacing: 0.5rem;
  border-collapse: collapse;
}

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
        td{
            color:#777777;
            font-size: 20px;

        }
        
        href{
            text-decoration: none;
        }
        body {font-size: 80%; font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif; }
        div.tabContent { border: 1px solid #c9c3ba; padding: 0.5em; background-color: #f1f0ee; }
        
</style>

   </head>
	<body onload="init()">
	 <?php //$this->load->view('navbar');?>
   		

        <?php $this->load->view('staff/staffhome');?>
		<!--<?php //$this->load->view('sidebar');?>-->
		<div class="wrapper">
		</div>

    </div>
</body>
</html>
