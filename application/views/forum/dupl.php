<?php 
	$db = new MongoClient();
      $ann = $this->mongo_db->get('forum');
      foreach ($ann as $a) {
      	if($a['type']=="student")
      		$b = $this->mongo_db->get_where('student',array('regno'=>$a['studid']));
      	else
      		$b = $this->mongo_db->get_where('staff',array('staffid'=>$a['staffid']));
      	# code...?>

      	<table class="table table-hover">
            <tr class="active">
            	<td style="font-size:18px;width:25%">

            		<?php echo $b[0]['name'] ?>
            	</td>
            </tr>
            <tr>
            	<td><?php echo $a['content'];?></td>
            </tr>
         </table>  
    <?php 
      }

      ?>