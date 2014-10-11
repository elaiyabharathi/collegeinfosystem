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
	
	<?php echo form_open_multipart('anncontroller/post');?>
		<form action="upload_file.php" method="post" enctype="multipart/form-data"><br> 
			<input type="text" id="aname" name="aname" placeholder="Announcement Name" class="form-control" style="width:400px;" colspan="2"required/><br>
			<!-- <select name="no" id="no"  class="form-control" colspan="1"  style="width:400px;" required onchange="team()">
			<option disabled selected  >Select the number of team members</option>
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
			<option value="6">6</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select><br>
				<div id='teammembers'>
				</div> -->
				<!-- There is an dept_change() event here use it to for future EB -->
			<select name="atype" id="atype"  class="form-control" colspan="1"  style="width:400px;" required>
							<option disabled selected >Announcement Type</option>
							<option value="General">General</option>
							<option value="Specific">Specific</option>
							<option value="Class/Batch">Class/Batch</option>							
							<option value="Other">Other</option>

		</select>
		
		<br>
		
		<!-- <div id="staffname">                    
                </div> -->
                
                <div class="col-xs-4"></div>
                
                <div class="col-xs-4">
                <input type="text" name="tags" class="form-control"  placeholder="Tags"  data-role="tagsinput" required/><br>
                </div><div class="col-xs-4"></div>
               <textarea id="description" name="description" rows="5" cols="20" placeholder="Description" class="form-control" style="width:400px;"></textarea>
               <br>
               <label for="file"><b>Upload file:</b></label>
				<input type="file" name="file" id="file"><br>
			<input type="submit" name="signup" value="post" class="btn btn-success"/>
		</form>
	</div>
</div>
</div>





