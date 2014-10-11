<!DOCTYPE html>
<html lang="en">
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<link href="http://www.google.com/fonts#UsePlace:use/Collection:Ubuntu" rel="stylesheet" type="tex/css">
	<head>
		<title>Register</title>
		<meta charset="utf-8">
    <style>
          .td1{
            padding:35px;
          }
          .spin{
            padding:30px;
            margin-top:17%;
            margin-bottom: 25%;
          }
          span{
      text-align: center;
      font-size: 14px;
      text-decoration: none;
      font-family: Ubuntu, Geneva, sans-serif;
      color: #777777;
      font-weight: bold;
      background-color: transparent; 
    }
    .back{
      background-color: #777777;
    }
    textarea{
      resize:none;
    }

    </style>
	</head>
	<body>
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
      <div class="container">
        <div class="navbar-header"> 
              <a class="navbar-brand" href="/igniter/index.php"><h2>College Info System</h2></a><!--- Heading is here-->
                <div class="container"> 
              </div>  
          </div>
        </div>
    </div>

    <table align="center" class="table table-striped table-bordered table-condensed back">
    <tr>
      <td  style="color:<?php if(isset($error)){echo "red";}else{echo "green";}?>">
        <?php echo form_open('studentsignup');?>

        <form action="" method="post" class="">
        <table class="spin" align="center" cellpadding="10">
                <tr><td>   
                  <?php if(isset($error))
                  {
                  echo $error;
                  }
                  if(isset($success))
                  {     
                    echo $success;
                  } ?>
                <tr><td><input type="text" maxlength="10" placeholder="Register Number" required="" class="input -small form-control" name="rollno" style="width:300px"></input></td></tr>
                <tr><td><input type="text" placeholder="Name" required="" class="input -small form-control" name="name" style="width:300px"></input></td></tr>
                <tr><td><input type="email" placeholder="Email" required="" class="input -small form-control" name="email" style="width:300px"></input></td></tr>
                <tr><td><input type="password" placeholder="Type a password" class="form-control" name="password" style="width:300px"></input></td></tr>
                <tr><td><input type="password" placeholder="Retype a Password" class="form-control" name="repass" style="width:300px"/></td></tr>  
                <tr class="pull-left"><td class="pull-left"><input type="submit" value="Sign Up" class="btn btn-success"/></td>
                <td class="pull-left"><input type="reset" value="Reset" class="btn btn-danger"></td></tr>
        </table>
      </form>
    </table>
  </body>
  </html>