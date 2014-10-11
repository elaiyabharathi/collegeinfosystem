<!DOCTYPE html>
<html lang="en">
<title>K! Club Signup</title>
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<head>
		<title> Event Signup </title>
		<meta charset="utf-8">
		<style>
		span{
			text-align: center;
			font-size: 20px;
		}
		</style>
	</head>
	<body color="WHITE">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
			<div class="container">
				<div class="navbar-header"> 
        			<a class="navbar-brand" href="/igniter/index.php"><h2>College Info System</h2></a>
   				</div>
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/><br/>
		<div class="form-group row">
		<?php
			echo form_open('clubsignupcontrol');
		?>
		<table align = "center">
		<tr>
		<td style="color:RED;"><span><?php
							if(isset($signedup))
							{
							  echo $signedup; 
							}
							if(isset($error1))
							{
							  echo $error1; 
							}?></span></td>
		</tr>
		<form action="" method="post" class="form-control">
		<table align="center">
		<tr><td><input type="text" name="clubid" placeholder="Club ID" class="form-control"style="width:345px;" colspan="2"required/></td></tr>
		</table>
		<br/>
		<table align="center">
		<tr><td><input type="text" id="name" name="clubname" placeholder="Club Name" class="form-control"style="width:345px;" colspan="2"required/></td></tr>
		</table>
        <br/>
		<table align="center">
		<tr><td><input type="text" id="username" name="mail" placeholder="Club mail-id" class="form-control"style="width:345px;" colspan="2"required/></td></tr>
		</table>
		<br/>
		<table align="center">
		<tr><td><input type="password" id="pass" name="pass" placeholder="Create a Password" class="form-control"style="width:345px;" colspan="2"required/></td></tr>
		</table>
        <br/>
		
		<table align="center">
		<tr><td><input type="password" id="repass" name="repass" placeholder="Retype the Password" class="form-control"style="width:345px;" colspan="2"required/></td></tr>
		</table>
        <br/>
		<table align="center" cellpadding="10">
		<tr>
		<td><input type="text" id="fname" name="cname1" placeholder="Contact Name" required="" class="form-control"required/></td>
		<td><input type="text" id="lname" name="cnum1" placeholder="Contact Number" required="" class="form-control"/></td>
		</tr
		</table>
		<table align="center" cellpadding="10">
		<tr>
		<td><input type="text" id="fname" name="cname2" placeholder="Contact Name" class="form-control"/></td>
		<td><input type="text" id="lname" name="cnum2" placeholder="Contact Number" class="form-control"/></td>
		</tr>
        </table>
		 <table align="center">
          <tr>
            <td><br><h4 style="font-size:15px;font-weight:bolder">Enter A Short Description Of The Club:</h4>
          </td>
          </tr>
          <tr>
          <td>
          <style>
            textarea 
            {
              resize: none;
              }

          </style>
                
                <textarea type="Text" class="form-control" rows="5" cols="45" name="description" required="required" placeholder="Description"></textarea>
          </td>
		  </tr>
		  </table>
		        &nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;
		  <table align="center">
		  <tr>
          <td>
          <input type="submit" name="signup" value="Sign Up" class=" btn btn-primary"/>
          </td>
		  </tr>
        </table>
		</form>
		</div>	
		</body>

</html>