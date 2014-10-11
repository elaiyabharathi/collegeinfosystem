<input name="rollno[]" type="number" class="form-control"  style="width:400px;" value="<?php echo $_SESSION['regno']?>" ><br>
<?php 
for ($x=2; $x<=$number; $x++)
	  echo '<input  name="rollno[]" type="number" class="form-control"  style="width:400px; " placeholder="Roll number of Team member '.$x.'" ><br>';  
    ?>
