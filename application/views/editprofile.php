<html>	
<head><title>Edit Profile</title></head>
<link type="text/css" rel="stylesheet" href="/igniter/assets/css/bootstrap.css"/>
		<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
			<div class="container">
				<div class="navbar-header"> 
        			<a class="navbar-brand" href="#"><h2>Edit Profile</h2></a>
   					<div class="container">
			   			</div> 
   				</div>
   			</div>
   		</div>	
   		<br/>
   		<br/><br/><br/><br/><br/><br/>
		<div class="form-group row">
		<form action="" method="post">
		<table align="center">
		<tr><td><input type="text" name="clubid" placeholder="Club ID" class="form-control"style="width:345px;" colspan="2"required value="<?php $_SESSION['clubid']?>"/></td></tr>
		</table>
		<br/>
		<table align="center">
		<tr><td><input type="text" id="name" name="clubname" placeholder="Club Name" class="form-control"style="width:345px;" colspan="2"required value=""/></td></tr>
		</table>
        <br/>
		<table align="center">
		<tr><td><input type="text" id="username" name="mail" placeholder="Club mail-id" class="form-control"style="width:345px;" colspan="2"required value=""/></td></tr>
		</table>
		<br/>
		<table align="center" cellpadding="10">
		<tr>
		<td><input type="text" id="fname" name="cname1" placeholder="Contact Name" required="" class="form-control"required value=""/></td>
		<td><input type="text" id="lname" name="cnum1" placeholder="Contact Number" required="" class="form-control" value=""/></td>
		</tr
		</table>
		<table align="center" cellpadding="10">
		<tr>
		<td><input type="text" id="fname" name="cname2" placeholder="Contact Name" class="form-control" value=""/></td>
		<td><input type="text" id="lname" name="cnum2" placeholder="Contact Number" class="form-control" value=""/></td>
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
                
                <textarea type="Text" class="form-control" rows="5" cols="45" name="description" required="required" placeholder="Description" value=""></textarea>
          </td>
		  </tr>
		  </table>
		        &nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;
		  <table align="center">
		  <tr>
          <td>
          <input type="submit" name="signup" value="Update" class=" btn btn-primary"/>
          </td>
		  </tr>
        </table>
		</form>	
		</div>
		</body>
		</html>	