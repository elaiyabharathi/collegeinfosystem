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
            margin-top:13%;
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
      <td  style="color:<?php if(isset($error)){echo "red";}if(isset($success)){echo "green";}?>">
        <?php echo form_open('staffsignup_temp_con');?>

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
                <tr><td><input type="text" maxlength="10" placeholder="Staff ID" required="" class="input -small form-control" name="staffid" style="width:300px"></input></td></tr>
                 <tr><td><input type="text" placeholder="Name" required="" class="input -small form-control" name="name" style="width:300px"></input></td></tr>
                <tr><td><input type="email" placeholder="Email" required="" class="input -small form-control" name="email" style="width:300px"></input></td></tr>
                <tr><td>
                  <select name="dept" id="dept" class="form-control" colspan="1" style="width:300px;">
                 <option selected required>Department</option> 
                 <option value="Department of Media Sciences"> Department of Media Sciences</option>
                  <option value="Department of Mechanical Engineering">Department of Mechanical Engineering</option> 
                  <option value="Department of Electrical and Electronics Engineering">Department of Electrical and Electronics Engineering</option>
                   <option value="Department of Materials Science and Engineering"> Department of Materials Science and Engineering</option>
                    <option value="Department of Electronics and Communication Engineering"> Department of Electronics and Communication Engineering</option> 
                    <option value="DEpartment of Biomedical Engineering"> Biomedical Engineering</option> 
                    <option value="Department of Civil Engineering"> Department of Civil Engineering</option>
                     <option value="Department of Management Studies">Department of Management Studies</option>
                      <option value="Department of Agricultural and Irrigation Engineering"> Department of Agricultural and Irrigation Engineering</option> 
                      <option value="Department of Mining Engineering"> Department of Mining Engineering</option>
                       <option value="Department of Manufacturing Engineering">Department of Manufacturing Engineering</option>
                        <option value="Department of Industrial Engineering"> Department of Industrial Engineering</option>
                         <option value="Department of Computer Science Engineering">Department of Computer Science Engineering</option> 
                         <option value="Department of Information Science and Technology"> Department of Information Science and Technology</option>
                          <option value="Department of Mathematics">Department of Mathematics</option>
                           <option value="Department of Geology">Department of Geology</option> 
                          <option value="Department of English">Department of English</option> 
                        </select></td></tr>
                <tr><td><input type="password" placeholder="Type a password" class="form-control" name="password" style="width:300px"></input></td></tr>
                <tr><td><input type="password" placeholder="Retype a Password" class="form-control" name="repass" style="width:300px"/></td></tr>  
                <tr class="pull-left"><td class="pull-left"><input type="submit" value="Sign Up" class="btn btn-success"/></td>
                <td class="pull-left"><input type="reset" value="Reset" class="btn btn-danger"></td></tr>
        </table>
      </form>
    </table>
  </body>
  </html>