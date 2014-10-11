<link rel="stylesheet" href="/igniter/assets/css/jquery.timepicker.css">
<script src="/igniter/assets/js/jquery.timepicker.js"></script>
<script src="/igniter/assets/js/newevent.js"></script>
<script src="/igniter/assets/js/eventLocation.js"></script>
<div class="col-md-9 container">
<div class="rounded-border" style="border-radius:20px;border:2px solid gray;padding:20px;">
<div id="eventSidebar">
<?PHP echo form_open( 'event/Full');?>
<form>
<input type="submit" class="btn btn-lg btn-default btn-sm pull-right" title="New Event" value="View Events" onClick="Full"></input>
</form>
    <?PHP echo form_open( 'newevent',array( 'class'=>'ajax-form'));?>
    <form name="status" action="" method="post">
        <h3>Event Details :</h3>
        <div class="row">
            <div class="col-md-4">
                <label class="control-label">Name:</label>

                <input type="text" name="name" id="name" placeholder="Event Name" class="form-control" required/>

                <br>
		<label class="control-label">Category:</label>
<br>
                <select name="type" id="type" class="form-control">
                    <option selected disabled>Select</option>
                    <option value="Individual">Individual</option>
                    <option value="Group">Team</option>
                </select>
	<br><br>
                <label class="control-label">Desciption:</label>

                <textarea name="description" id="description" placeholder="Description" rows="2" class="form-control" style="resize:none" required></textarea>
<br>
<button type="submit" class="btn btn-lg btn-default btn-sm"><strong>Add Event</strong></button>
            </div>
            <div class="col-md-4">
		<label class="control-label">Target Audience:</label>
<br>
                <select multiple title="Hold down ctrl to select multiple values." name="target" id="target" class="form-control">
                    <option value="First Years">First Years</option>
                    <option value="Second Years">Second Years</option>
                    <option value="Third Years">Third Years</option>
		    <option value="Fourth Years">Fourth Years</option>
                </select>
	<br><br>
                <label class="control-label">Location:</label>
<br>
                <select name="location" id="location" onchange="location_check()" class="form-control">
                    <option selected disabled>Select</option>
                    <option value="SnH">SnH</option>
                    <option value="Audi">Vivek Auditorium</option>
                    <option value="Main Building">Main Building</option>
                    <option value="Tag Auditorium">Tag Auditorium</option>
                    <option value="Informal Stage">Informals Stage</option>
                    <option value="Gallery">Gallery</option>
                    <option value="RCC">RCC</option>
                    <option value="Other">Other</option>
                </select>

                <div id="suggestion">
                    <input type="hidden" id="locationx" name="locationx" value="empty">
                </div>
                <input type="hidden" id="uid" name="uid" value="<?php echo $_SESSION['uid'];?>">
            </div>
        	
        <div class="col-md-4	">
            <p class="datepair <?php if(isset($error)) echo " has-error "?>" data-language="javascript">
                <label class="control-label">From</label>
                <input class="date start form-control" type="text" name="startdate" id="startdate" placeholder="Start Date" required></input>
        		<br>
                <input class="time start ui-timepicker-input form-control" type="text" autocomplete="off" name="starttime" id="starttime" placeholder="Start Time" required></input>
                <br>
                <label class="control-label">To</label>
                <input class="time end ui-timepicker-input form-control" type="text" autocomplete="off" name="endtime" id="endtime" placeholder="End Time" required></input>	
		      <br>
                <input class="date end form-control" type="text" name="enddate" id="enddate" placeholder="End Date" required></input>
            </p>
        </div>

</div>



&nbsp;&nbsp;&nbsp;&nbsp;




</form>
</div>
</div>
</div>
</div>
</div>

