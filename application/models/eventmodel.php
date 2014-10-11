<?php
class Eventmodel extends CI_Model{

	function validate($startdate, $starttime,$enddate,$endtime,$location)
	{
		date_default_timezone_set('Asia/Calcutta');
		$sdate=new MongoDate(strtotime($startdate." ".$starttime));
		$edate=new MongoDate(strtotime($enddate." ".$endtime));
		$locationevent = $this->mongo_db->get_where('event', array('location' => $location));
		if($locationevent)
		{	
			$result=$this->mongo_db->get_where('event', array('location' => $location, 'startDate' => array( '$gte' => $sdate, '$lt' => $edate )));
			if($result)
			{
				return false;
			}
			else
			{
				$result=$this->mongo_db->get_where('event', array('location' => $location, 'endDate' => array( '$gte' => $sdate, '$lt' => $edate )));
				if($result)
				{
					return false;
				}
				else
				{
					return true;
				}
			}
		}
		else
		{
			return true;
		}
	}
	function insert($name,$description,$startdate,$starttime,$enddate,$endtime,$location,$target,$type,$uid)
	{
		date_default_timezone_set('Asia/Calcutta');

		$sdate=new MongoDate(strtotime($startdate." ".$starttime));
		$edate=new MongoDate(strtotime($enddate." ".$endtime));

		$this->mongo_db->insert('event',array('name'=>$name,'description'=>$description,'startDate'=>$sdate,'endDate'=>$edate,'location'=>$location,'target'=>$target,'type'=>$type,'createdBy' => $uid));

#echo "done"
		return true;
	}
	function delete($_id)
	{
		echo $_id;
		$mongo = new Mongo();
		$db = $mongo->kdb;
		$co = $db->event;
		$co->remove(array('_id' => new MongoId($_id)), array("safe" => true));
	}
}
?>
