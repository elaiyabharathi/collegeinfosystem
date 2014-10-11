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
		<br><br>		<br><br>		<br><br><br><br><br><br>
		<div align="center" float="right" class="col-md-9 container">
	 <?php
      $db = new MongoClient();
      $query = $this->mongo_db->get_where('student',array('regno'=>$_SESSION['regno']));?>
      <?php echo form_open('studupdate');?>
      <table align="center">
     <form action="" method="post" class="form-control">
	
		<tr><td ><h4>Name :</td>
		 <td colspan="3"><input value ="<?php echo $query[0]['name']?>" type="text" id="name" name="name" placeholder="Name" class="form-control"required style="width:400px;"/></td></tr>
		 <tr><td><br></td></tr>
		 <tr><td><h4>Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>		 
		 <td colspan="3"><select name="dept" id="dept"  class="form-control"   style="width:400px;" required onchange="dept_check()" required>
							<option value ="<?php echo $query[0]['dept']?>" selected ><?php echo $query[0]['dept']?></option>
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
		 <tr><td><br></td></tr>
		 	<tr><td><h4 >Email : </h4></td> 
			<td colspan="3"><input type="email" id="email" name="email" value ="<?php echo $query[0]['email']?>" class="form-control"style="width:400px;"required/></td></tr>
		<tr><td><br></td></tr>
		<tr><td ><h4>Area of Intrest</td>
		 <td colspan="3"><input value ="<?php echo $query[0]['interest'][0]?>" type="text" id="interest" name="interest" placeholder="Area of Intrest" class="form-control"required style="width:400px;"/></td></tr>
				<tr><td><h4 >	Gender :</td> 
					<td colspan="3"><input type="radio" name="sex" class="selectpicker" value="male" required><span>&nbsp&nbsp&nbspMale&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
						<input type="radio" name="sex" class="form-radio" value="female"><span>&nbsp&nbsp&nbspFemale</strong></td></tr>
					
		<tr><td><br></td></tr>
		
			<tr><td><h4 >Birthday :</td>
			<td ><select name="bday" id="bday" style="width:100px;" class="form-control">
							<option selected value ="<?php echo $query[0]['bday']?>"><?php echo $query[0]['bday']?></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3" >3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
		</select></td><td>
			<select name="bmonth" id="bmonth" style="width:100px;" class="form-control">
					<option selected value ="<?php echo $query[0]['bmonth']?>"><?php echo $query[0]['bmonth']?></option>
					<option value="01" >January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
			</select></td><td>
		
			<select name="byear" id="byear" style="width:100px;" class="form-control">
			<option selected value ="<?php echo $query[0]['byear']?>"><?php echo $query[0]['byear']?></option>
				<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					
			</select>
		
		</td></tr>
 <tr><td><br></td></tr>
		<tr><td ><h4>About Me</td>
		 <td colspan="3">
		 	 
		 	 <textarea value ="<?php echo $query[0]['aboutme']?>" type="text" id="aboutme" name="aboutme"  class="form-control"required style="width:400px;height:200px"/><?php echo $query[0]['aboutme']?></textarea></td></tr></table><br>

		<input type="submit" name="update" value="Update" class="btn btn-primary"/>
		</form>
</div>
   </div>
   </div>
   <div id="photo"  class="col-md-3 container">
   	<?php 		  echo '<img src="/igniter/assets/images/profilepic/'.$_SESSION['regno'].'.jpg " width="160" height="190">';?>   	  

<form action="pic" method="post"enctype="multipart/form-data">
	<br>

<input type="file" name="file" id="file" class="btn btn-primary"><br>
<input type="submit" name="submit" value="Upload" class="btn btn-primary">
</form></div>
   <script src="/igniter/assets/js/jquery.js"></script>  
   <script src="/igniter/assets/js/bootstrap-alert.js"></script>  
	</body>
	 
</html>	