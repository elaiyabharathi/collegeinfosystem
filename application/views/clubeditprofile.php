<!DOCTYPE html>
<html lang="en">
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<head>
		<title>Edit Profile</title>
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
    .bad1
    {
      margin-left: 18%;
      margin-right: 2%;
         }
    table
    {
      margin-left: 30%;
    }
    textarea{
      resize:none;
    }

    </style>
	</head>
	<body>
      <div>
      <?php  $this->load->view('navbar.php'); ?>
      </div>
      <div>
          <?php $this->load->view('sidebar.php');?>
        </div>
     <?php
      $db = new Mongo();
      $query = $this->mongo_db->get_where('club',array('clubid'=>$_SESSION['clubid']));
    ?>
    <div class="" style="border-radius:20px;border:2px solid gray;padding:10px;">
      <div class="col-md-9 container">
    <table align="" class="">
    <tr>
      <td>
        <?php
          echo form_open('editclubprofile');?>

          <form action="" method="post" class="form-control">
    <table align="center" style="margin-top:10%">
    <tr><td><input type="text" id="name" name="clubname" placeholder="Club Name" class="form-control"style="width:345px;" value="<?php echo $query[0]['clubname'];?>" colspan="2"required/></td></tr>
    </table>
        <br/>
    <table align="center">
    <tr><td><input type="text" id="username" name="mail" placeholder="Club mail-id" class="form-control"style="width:345px;" value="<?php echo $query[0]['mail'];?>"colspan="2"required/></td></tr>
    </table>
    <br/>
    <table align="center">
    <tr><td><input type="password" id="pass" name="pass" placeholder="Type a Password" class="form-control"style="width:345px;" value="<?php echo $query[0]['password'];?>"colspan="2"required/></td></tr>
    </table>
        <br/>
    
    <table align="center">
    <tr><td><input type="password" id="repass" name="repass" placeholder="Retype the Password" class="form-control"style="width:345px;" value="<?php echo $query[0]['password'];?>"colspan="2"required/></td></tr>
    </table>
        <br/>
    <table align="center" cellpadding="10">
    <tr>
    <td><input type="text" id="fname" name="cname1" placeholder="Contact Name" value="<?php echo $query[0]['cname1'];?>" required="" class="form-control"required/></td>
    <td><input type="text" id="lname" name="cnum1" placeholder="Contact Number" required="" value="<?php echo $query[0]['cnum1'];?>"class="form-control"/></td>
    </tr
    </table>
    <table align="center" cellpadding="10">
    <tr>
    <td><input type="text" id="fname" name="cname2" placeholder="Contact Name" value="<?php echo $query[0]['cname2'];?>"class="form-control"/></td>
    <td><input type="text" id="lname" name="cnum2" placeholder="Contact Number" value="<?php echo $query[0]['cnum2'];?>"class="form-control"/></td>
    </tr>
        </table>
     <table align="center">
          <tr>
            <td><br><h4 style="font-size:15px;font-weight:bolder">Enter A Short Of The Club:</h4>
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
                
                <textarea type="Text" class="form-control" rows="5" cols="45" name="description" value="hi"required="required" placeholder="Description"><?php echo $query[0]['description'];?></textarea>
          </td>
      </tr>
      </table>
            &nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;
			<table align="center">
			<tr>
            <td><br><h4 style="font-size:15px;font-weight:bolder">Upload pictures to the gallery:</h4>
          </td>
          </tr>
			<tr>
			<td>
	</td>
	</tr>
	</table>
      <table align="center">
      <tr>
          <td>
          <input type="submit" name="signup" value="Update" class=" btn btn-success"/>
          </td>
      </tr>
        </table>
    </form>
  </div>

      <div id="upload"  class="col-md-3 container">
<form action="gallery" method="post"enctype="multipart/form-data">
  <br>

<input type="file" name="file" id="file" class="btn btn-primary"><br>
<input type="submit" name="submit" value="Upload" class="btn btn-primary">
</form>
  </div>

  </body>
  </html>