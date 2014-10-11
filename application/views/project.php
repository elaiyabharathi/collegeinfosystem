<link rel="stylesheet" href="/igniter/assets/css/jquery.timepicker.css">
<script src="/igniter/assets/js/jquery.timepicker.js"></script>
<script src="/igniter/assets/js/jquery.js"></script>
<script src="/igniter/assets/js/add.js"></script>
<script src="/igniter/assets/js/team.js"></script>
<script src="/igniter/assets/js/staff.js"></script>
<script src="/igniter/assets/js/bootstrap-tagsinput.min.js"></script>
<link rel="stylesheet" href="/igniter/assets/js/bootstrap-tagsinput.css">



<style>
	.link{cursor:pointer}
</style>
<script>

</script>
</head>
<body>

<div class="col-md-9 container">
<div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:10px;">
<div align="center">
	
	<?php echo form_open('project');?>
		<form action="" method="post" ><br> 
			<input type="text" id="pname" name="pname" placeholder="Project Name" class="form-control" style="width:400px;" colspan="2"required/><br>
			<select name="no" id="no"  class="form-control" colspan="1"  style="width:400px;" required onchange="team()">
			<option disabled selected  >Select the number of team members</option>
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
			<option value="6">6</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select><br>
				<div id='teammembers'>
				</div>
			<select name="dept" id="dept"  class="form-control" colspan="1"  style="width:400px;" required onchange="dept_check()" required>
							<option selected ></option>
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
							<option value="Department of Computer Science Engineering">Department of Computer Science and Engineering</option>
							<option value="Department of Information Science and Technology"> Department of Information Science and Technology</option>
							<option value="Department of Mathematics">Department of Mathematics</option>
							<option value="Department of Geology">Department of Geology</option>
							<option value="Department of English">Department of English</option>
							<option value="Other">Other</option>

		</select>
		
		<br>
		
		<div id="staffname">                    
                </div>
                <input type="text" id="area" name="area" placeholder="Area of project" class="form-control" style="width:400px;" colspan="2"required/><br>	
                <div class="col-xs-4"></div>
                
                <div class="col-xs-4">
                <input type="text" name="tags" class="form-control"  placeholder="Tags"  data-role="tagsinput" required/><br>
                </div><div class="col-xs-4"></div>
               <textarea id="description" name="description" rows="5" cols="20" placeholder="Description" class="form-control" style="width:400px;"></textarea>
               <br>
               
			<input type="submit" name="signup" value="Submit" class="btn btn-danger"/>
		</form>
	</div>
</div>
</div>





