<!DOCTYPE html>
<html lang="en">
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<link href="http://www.google.com/fonts#UsePlace:use/Collection:Ubuntu" rel="stylesheet" type="tex/css">
	<head>
		<title>K! - Change Password</title>
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
    .bad{
      margin-top: 0%;
    }
    table
    {
      margin-left: 30%;
    }
    .ds
    {
      margin-left: 18%;
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
      </div>
   <div class="bad">
   <div class="rounded-border ds" style="border-radius:20px;border:2px solid gray;padding:10px;">    
    <table>
    <tr>
      <td>
        <?php
          echo form_open('editclubprofile/passwd');?>
          <form action="" method="post">
            <input type="password" name="currpass" placeholder="Current Password" class="form-control" style="width:345px"><br>
            <input type="password" name="pass" placeholder="Type a Password" class="form-control" style="width:345px"><br/>
            <input type="password" name="repass" placeholder="Retype a Password" class="form-control" style="width:345px"><br/>
            <input type="submit" value="Change" class="btn btn-success">
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
  </body>
  </html>