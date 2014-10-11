<!DOCTYPE html>
<html lang="en">
<title>K! Signup</title>
 <link rel="shortcut icon" href="/igniter/favicon.ico">

	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<head>
		<title> Login </title>
		<meta charset="utf-8">
		<style>
		span{
			text-align: center;
			font-size: 15px;
			font-family: sans-serif;
		}
		
		</style>
	</head>
	<body color="WHITE">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
			<div class="container">
				<div class="navbar-header"> 
        			<a class="navbar-brand" href="http://www.kurukshetra.org.in"><h2>College Info System</h2></a>
   				</div>
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/><br/>
		<div class="form-group row">
		<?php
			echo form_open('staffsignup');
		?>
		<table align = "center">
		<tr>
		<td><h3>Staff Register</h3></td>
		</tr>
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
		<tr>
		<td>
		<form action="" method="post" class="form-control">
		<table align="center">
		<tr><td><input type="text" id="name" name="name" placeholder="Name" class="form-control"style="width:400px;" colspan="2"required/></td></tr></table>
        <br/>
        <table align="center">
		<tr><td><input type="number" id="id" name="id" placeholder="ID Number" class="form-control"style="width:400px;" colspan="2"required/></td></tr>
		</table><br>
        <table align="center" style="width:345px">
		<tr><td><strong><span>Deparment : </span></strong></td></tr><tr>
			<td class=""required><select name="dept" id="dept">
							<option selected required>------</option>
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

							
		</select></td></table><br>
		<table align="center" style="width:400px">
		<tr><td><strong><span>Academic rank :</span></strong></td>
			<td class=""required align="right"><select name="rank" id="rank">
							<option selected required>------</option>
							<option value="Dean">Dean</option>
							<option value="HOD">HOD</option>
							<option value="Professor">Professor</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Associate professor">Associate professor</option>
							<option value="Lecturer">Lecturer</option>
							<option value="Teaching assistant">Teaching assistant</option>
							<option value="Teaching fellow ">Teaching fellow</option>
							<option value="visiting faculty">visiting faculty</option>

							
		</select></td></table><br>
		 <table align="center">
		<tr><td><input type="text" id="specialization" name="specialization" placeholder="Area of Specialisation" class="form-control"style="width:400px;" colspan="2"required/></td></tr>
		</table> </br>
		<table align="center">
		<tr><td><input type="email" id="email" name="email" placeholder="Your Email Address" class="form-control"style="width:400px;" colspan="2"required/></td></tr>
		</table> 	
		<br/><table align="center">
		<tr><td><input type="password" id="pass" name="pass" placeholder="Create a Password" class="form-control"style="width:400px;" colspan="2"required/></td></tr>
		</table>
		<br/><table align="center">
		<tr><td><input type="password" id="repass" name="repass" placeholder="Retype a Password" class="form-control"style="width:400px;" colspan="2"required/></td></tr>
		</table>
        <br/><table align="center" style="width:400px">
		<tr >
					<td ><input type="radio" name="sex" class="selectpicker" value="male" required><span><strong>&nbsp&nbsp&nbspMale</span></strong></td>
					<td><input type="radio" name="sex" class="form-radio" value="female" ><span><strong>&nbsp&nbsp&nbspFemale</span></strong></td>
				</tr>
		</table><br/>
		<table align="center">
		<tr><td><input type="number" id="phone" name="phone" placeholder="Phone Number" class="form-control" style="width:400px;" colspan="2"required/></td></tr>
		</table><br>

		<table align="center" style="width:400px">
		<tr><td><strong><span>Birthday:</span></strong></td>
			<td class=""required><select name="day" id="day">
							<option selected>Day</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3" value="">3</option>
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
		</select></td>
		<td>
			<select name="month" id="month">
					<option selected>Month</option>
					<option value="January" >January</option>
					<option  value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
			</select>
		</td>
		<td class=""required>
			<select name="year" id="year">
					<option value="" selected>Year</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
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
		</td>
		</tr></table><br/>
		<table align="center">
		<tr><td><input type="submit" name="signup" value="Sign Up" class="btn-primary"/></td></tr></table>
		</form>
		</td>
		</tr>
		</table>
		</div>	
		</body>

</html>
