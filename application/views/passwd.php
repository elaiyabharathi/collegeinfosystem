<html>
<head>
<title>Edit Profile</title>
        <link rel="shortcut icon" href="/igniter/favicon.ico">
<link rel="stylesheet" href="/igniter/assets/css/jquery-ui.css">
<script src="/igniter/assets/js/jquery-1.9.1.js"></script>
<script src="/igniter/assets/js/jquery-ui.js"></script>
<script src="/igniter/assets/js/ajax.js"></script>

<link type="text/css" rel="stylesheet" href="/igniter/assets/css/bootstrap.css"/>
 </head>
	<body onload="init()">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">

			<div class="container">

				<div class="navbar-header"> 
        		 
					<table><tr><td><a  class="navbar-brand" href="back"><img src="/igniter/assets/images/back.png" width="60" height = "60"></img></a></td><td><a class="navbar-brand" href="http://www.kurukshetra.org.in"><h2>&nbsp;&nbsp;&nbsp;&nbsp;College Info System</h2></a></td></tr></table>		</div>
   					<div  style="color:white"> 
					<br><br>

					<table align="RIGHT">
					
						<td><h3><font color="WHITE" face="TIMES NEW ROMAN"><?php
                  if(isset($_SESSION['fname']))
                  {
                  echo $_SESSION['fname'];
                  }
                  else
                  echo 'Welcome';
                  ?></font><h3></td>
					</tr>
					</table>   			
   				</div>
			</div>
		</div>
		<br><br>		<br><br>		<br><br>		<br><br>
		<div align="center">
			<?php echo form_open('studupdate/passwd');?>

			<form action="" method="post" class="form-control">
<table align="center">
	 
	<tr><td>Password : </td>
			<td colspan="3"><input type="password" id="password" name="password" value =""   class="icon-user form-control"style="width:400px;"required/></td></tr>
		<tr><td><br></td></tr>
		<tr><td>	Retype Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td colspan="3"> <input type="password" id="repass" name="repass" value ="" class="form-control"style="width:400px;" required/></td></tr> 

		</table><br>
		<input type="submit" name="update" value="Change Password" class="btn btn-success"/>
	</form>