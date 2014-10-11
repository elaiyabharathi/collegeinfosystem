<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Club Details</title>
		<meta charset="utf-8">
    <style>
	      img{
          margin: 10px;
          }
          .td1{
            padding:35px;
          }
          .spin{
            padding:30px;
            margin-top:17%;
            margin-bottom: 25%;
          }
    
         .back{
          background-color: #777777;
          }
          textarea{
          resize:none;
          }
	
	h4{
	  text-align: center;
      font-size: 14px;
      text-decoration: underlined;
      font-family: Ubuntu, Geneva, sans-serif;
      color: red;
      font-weight: bold;
      background-color: transparent;
	}
	/*span{
	  text-align: center;
	  font-size: 20px;
	}*/
    .item {
    color: #666;
    background: #333; 
    height: 300px;
    line-height: 300px; /* Align the text vertically center. */
    font-size: 52px;
    text-align: center;    
    font-family: "trebuchet ms", sans-serif;    
    }
   .carousel{   
    margin-top: 20px;
   }
   .carousel-control{
	top: 50%;
   }
  .bs-example{
	margin: 20px;
	}
	p{
	
    background: #F9F9F9;
    border: 1px solid #E1E1E8;
    margin: 10px 0;
    padding: 8px;
	}
    </style>
	</head>
	<body>
	
<?php
      $query = $this->mongo_db->get_where('club',array('clubid'=>$_SESSION['clubid']));?>
    
    
<div class="col-md-9">	

<div id="eventSidebar">
</div>

<div class="bs-example">
    <div id="myCarousel" class="carousel slide" style="width:1000px">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
           <!-- <li data-target="#myCarousel" data-slide-to="2"></li>-->
        </ol>   
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item"><?php foreach($query as $row) echo $row['clubname'];?></div>
            <div class="item"><?php foreach($query as $row) echo $row['description'];?></div>

            <div class="item"><a href="/igniter/assets/root/classic-demo.html">GALLERY</a></div>

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<!--<div class="bs-example">
    <div id="myAccordion" class="accordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapseOne" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><h3><strong><?php #foreach($query as $row) echo $row['clubname'];?></strong></h3></a>
            </div>
            <div class="accordion-body collapse" id="collapseOne">
                <div class="accordion-inner">
                 <div class="container">
                <h2>About:</h2>
                <p><?#php foreach($query as $row) echo $row['description'];?></p>
                
            </div>
        </div>
</div>   
                </div>
            </div>
        </div>-->  
<?php $query1=$this->mongo_db->get_where('club',array('clubid' =>$_SESSION['clubid']));?>
    <div class="bs-example">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapseOne" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><h3><strong><?php  foreach($query1 as $row) echo $row['clubname'];?></strong></h3></a>
            </div>
            <div class="accordion-body collapse in" id="collapseOne">
                <div class="accordion-inner">
        <table class="table-hover" class="pull-right">
          <tr class="" align="center">
            <td class=""><?php echo $query1[0]['description']; ?></td>
           </tr>
  </table>
</div>
                </div>
            </div>
        </div>  
        <?php $query=$this->mongo_db->get_where('clubmem',array('clubid' =>$_SESSION['clubid']));?>
    <div class="bs-example">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapseTwo" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><h3><strong>The Team</strong></h3></a>
            </div>
            <div class="accordion-body collapse in" id="collapseTwo">
                <div class="accordion-inner">
        <table class="table table-condensed " align="center">
	        <tr>
                <td><strong>President</strong></td>
                <td><?php 
                if($query){
    $query2=$this->mongo_db->get_where('student',array('regno'=>$query[0]['president']));
    if($query2)
    {
      echo '<a href="'.site_url('welcome/student/'.$query2[0]['regno']).'">';
      echo $query2[0]['name'];
      echo '</a>';
    }else {echo " ";}}?></td>
         
            </tr>
            <tr>
                <td><strong>Vice President</strong></td>
                <td><?php 
                if($query)
                {
    $query3=$this->mongo_db->get_where('student',array('regno'=>$query[0]['vice_president']));
    if($query3)
    {
      echo '<a href="'.site_url('welcome/student/'.$query3[0]['regno']).'">';
      echo $query3[0]['name'];
      echo '</a>';
    }else {echo " ";}}?></td>
         
            </tr>
            <tr>
                <td><strong>Directors</strong></td>
                <td><?php for($i=0;;$i++)
  {
    if(!isset($query[0]['directors'][$i]))
    {
      break;
    }
    else
    {
      $query4=$this->mongo_db->get_where('student',array('regno'=>$query[0]['directors'][$i]));
    if($query4)
    {
      echo '<a href="'.site_url('welcome/student/'.$query4[0]['regno']).'">';
      echo $query4[0]['name'];
      echo '</a>';
    }else {echo " ";}
         }
    echo '<br>';
  }
  
  ?></td>
            </tr><tr><td></td></tr>
	</table>
</div>
                </div>
            </div>
        </div>
       <?php $query=$this->mongo_db->get_where('club',array('clubid' =>$_SESSION['clubid']));?>
    <div class="bs-example">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapseThree" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><h3><strong>Contact</strong></h3></a>
            </div>
            <div class="accordion-body collapse in" id="collapseThree">
                <div class="accordion-inner">
        <table class="table table-condensed table-bordered table-striped table-hover">
          <tr>
            <th>Name</th>
            <th>Phone No</th>
          </tr>
          <tr>
            <td><?php if(isset($query[0]['cname1'])){echo $query[0]['cname1'];}else {echo " ";}?></td>
            <td><?php if(isset($query[0]['cnum1'])){echo $query[0]['cnum1'];}else {echo " ";}?></td>
           </tr>
           <tr>
            <td><?php if(isset($query[0]['cname2'])){echo $query[0]['cname2'];}else {echo " ";}?></td>
            <td><?php if(isset($query[0]['cnum2'])){echo $query[0]['cnum2'];}else {echo " ";}?></td>
           </tr>
  </table>
</div>

                </div>
            </div>
        </div>  
</div>
</div>