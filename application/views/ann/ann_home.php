<style type="text/css">
body
{
    margin-top: 50px;
}
a:hover { text-decoration:none; }
.btn
{
    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}
.btn-read-more
{
    padding: 5px;
    text-align: center;
    border-radius: 0px;
    display: inline-block;
    border: 2px solid #662D91;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    color:#662D91;
}

.btn-read-more:hover
{
    color: #FFF;
    background: #662D91;
}
.post { border-bottom:1px solid #DDD }
.post-title {  color:#662D91; }
.post .glyphicon { margin-right:5px; }
.post-header-line { border-top:1px solid #DDD;border-bottom:1px solid #DDD;padding:5px 0px 5px 15px;font-size: 12px; }
.post-content { padding-bottom: 15px;padding-top: 15px;}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-9">
          <?php $type='';
    if(isset($_SESSION['type'])) 
        $type=$_SESSION['type'];
     if($type=='staff' || $type=='club') {?>
<?PHP echo form_open('anncontroller');?>
<form>
<input type="submit" class="btn btn-lg btn-success btn-sm pull-right" title="New Event" value="+ New Announcement" onClick="FormFull"></input>
</form>
<?php } ?>
          <?php 
  $db = new MongoClient();
      $ann = $this->mongo_db->get('announcement');
      $ann =  array_reverse($ann);
      foreach ($ann as $a) {
        $teacher = $this->mongo_db->get_where('staff',array('staffid'=>$a['staffid']));
        ?>
            <div class="row">
                <div class="col-md-12 post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                                <strong><a href="" class="post-title"><?php echo $a['topic'];?></a></strong></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 post-header-line">
                            <span class="glyphicon glyphicon-user"></span>by <a href="#"><?php echo $teacher[0]['name'] ?></a> | <span class="glyphicon glyphicon-calendar">
                            </span><?php echo $a['date'];?> | <span class="glyphicon glyphicon-tags">
                                </span>Tags : <?php foreach ($a['tags'] as $t) {?><a href="#"> <span class="label label-info">
                                <?php echo $t; } ?>
                              </span></a> 
                        </div>
                    </div>
                    <div class="row post-content">
                        <!-- <div class="col-md-3">
                            <a href="#">
                                <img src="http://4.bp.blogspot.com/-_lqoNpVXeU4/UkxQ7N-QW8I/AAAAAAAACTw/pni-TZyp17o/s1600/cool+share+button+effects+styles.png" alt="" class="img-responsive">
                            </a>
                        </div> -->
                        <div class="col-md-9">
                            <p>
                              <?php echo $a['content'];?>
                            </p>
                            <p>
                                <a class="btn btn-read-more" href="#">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
      }?>
            
        </div>
        <!-- <div class="col-md-3">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
          
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://placehold.it/292/16a085/FFF&text=jQuery" alt="" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/292/d35400/FFF&text=HTML5" alt="" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/292/2980b9/FFF&text=CSS3" alt="" class="img-responsive" />
                    </div>
                    <div class="item">
                        <img src="http://placehold.it/292/8e44ad/FFF&text=jQuery2DotNet" alt="" class="img-responsive" />
                    </div>
                </div>
          
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
        </div> -->
    </div>
</div>
