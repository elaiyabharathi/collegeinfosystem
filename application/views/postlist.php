<?php $posting=$post;


if($post=="directors")
 	{
echo '<br>';
echo '<select class="form-control" style="width:345px"id="no" name="no" onchange="direct()">';
echo '<option selected>';
echo "No of Directors";
echo '</option>';
echo '<option value="1">';
echo "1";	
echo '</option>';
echo '<option value="2">';
echo "2";	
echo '</option>';
echo '<option value="3">';
echo "3";	
echo '</option>';
echo '<option value="4">';
echo "4";	
echo '</option>';
echo '<option value="5">';
echo "5";	
echo '</option>';
echo '<option value="6">';
echo "6";	
echo '</option>';	
echo '<option value="7">';
echo "7";	
echo '</option>';
echo '<option value="8">';
echo "8";	
echo '</option>';
echo '<option value="9">';
echo "9";	
echo '</option>';
echo '</select>';
}
else if($post=="president" || $post=="vice_president")
{
	echo '<br>';
echo '<input type="text" name="box1" id="box1" required autofocus class="form-control" placeholder="Enter Name or Reg No" style="width:345px" onkeyup="showresult(this.value)"/>';
echo '<div id="livesearch">';
echo '</div>';
}

?>
