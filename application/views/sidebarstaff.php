<?php $class=$this->router->class;?>
<div class="col-md-2" style="margin:20px"> 
        <ul class="list-unstyled">
          <li><a href = "<?php if($class == 'staff') echo 'Full' ; else echo 'staff/Full';?>">Notifications</a></li>
          <li> profile </li>
          <li><a href="<?php if($class == 'event') echo 'Full'; else echo '../event/Full';?>">Events</a></li>
        </ul>
</div>
        
