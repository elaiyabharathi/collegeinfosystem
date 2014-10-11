
<?php
date_default_timezone_set('Asia/Calcutta');
$db    = new MongoClient();
$query = $db->kdb->event->find();
$query->sort(array(
    'name' => 1
));
$data['query']=$query;?>

	<div class="btn-group pull-left">
                    <a class="btn dropdown-toggle" data-toggle="dropdown">
                  	Sort by
               
                    </a>
                      <ul class="dropdown-menu">
		      <li class="link" onClick="sortchange(0)"><a>Date</a></li>
                      <li class="divider"></li>
                      <li class="link  disabled" onClick="sortchange(1)"><a>Name</a></li>
                      <li class="divider"></li>
                      <li class="link" onClick="sortchange(2)"><a>Location</a></li>
                </ul>
	</div>
	<?php $this->load->view('event/tableFormat',$data); ?>



