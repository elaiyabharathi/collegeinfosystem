<?php 
echo '<br>';
for ($x=1; $x<=$number; $x++)
	{  
		?>
		<input  name="directors[]" type="text" id="<?php echo $x;?>" class="form-control"  
		style="width:345px;" onkeyup="showresult(this.value)" placeholder="Director <?php echo $x;?>">;
		<br>  
		<?php
    }
 ?>
