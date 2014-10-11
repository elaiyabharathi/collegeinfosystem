<style type="text/css">
p{
	font-size:15px;
}
</style>
<?php $class=$this->router->class;
$method=$this->router->method;?>

<div  id="navigation"  class="col-xs-2"    style="margin:30px"> 
	
        <ul  class="nav nav-pills nav-stacked" id="sidebar">
        
        <?php $type='';
		if(isset($_SESSION['type'])) 
		    {
			$type=$_SESSION['type'];
			if($type=='staff') { ?>
			<li><a href = "<?php echo site_url('welcome/Home');?>">Announcements</a></li>
			<li><a href = "<?php echo site_url('event/staffshow');?>">Notifications</a></li>
		    <li><a href = "<?php echo site_url('forum/for_home');?>">Forum</a></li>
		  <?php }
		  if($type=='club') {?>
		  <li><a href = "<?php echo site_url('welcome/home');?>">Home</a></li>
			  <li><a href="<?php echo site_url('event/padd1');?>" >President</a></li>
			  <li><a href="<?php echo site_url('welcome/clubgallery');?>">Gallery</a><li><?php }?>
		  <?php } ?>
		  <?php  if($type=='student') {?>
		  <li><?php 
		  echo '<img src="/igniter/assets/images/profilepic/'.$_SESSION['regno'].'.jpg " width="160" alt="'.$_SESSION['regno'].'" height="170">';
		  ?></li>
			<li><a href = "<?php echo site_url('welcome/studenthome');?>">Announcements</a></li>
			<li><a href="<?php echo site_url('welcome/for_home');?>" > Forum</a></li>
		  <?php } ?>
	  
        </ul>
</div>
