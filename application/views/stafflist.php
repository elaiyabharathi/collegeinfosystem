<?php $department=$dept; ?>

<select name="sname" id="sname"  class="form-control" colspan="1"  style="width:400px;" required >
	<?php
	$count=0;
	$query =$this->mongo_db->get_where('staff',array('dept'=>$department));
	foreach ($query as $current) {  
	  echo '<option value="' .$current['name'].'">'.$current['name']. '</option>';  
	  $count=$count+1;
	  }
	  if($count==0)
	    echo '<option selected disabled>No Staff Registered for this Department</option>'; 
    ?>		
</select> 
<br>