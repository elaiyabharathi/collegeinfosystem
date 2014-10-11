<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>College Info System</title>
  <link rel="shortcut icon" href="/igniter/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="/igniter/assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" media="all" href="/igniter/assets/css/style.css"/>
  <script type="text/javascript" src="/igniter/assets/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="/igniter/assets/js/jquery.leanModal.min.js"></script>
 		<script src="/igniter/assets/js/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('#slider').carouFredSel({
					width: '100%',
					align: false,
					items: 3,
					items: {
						width: $('#wrapper').width() * 0.15,
						height: 500,
						visible: 1,
						minimum: 1
					},
					scroll: {
						items: 1,
						timeoutDuration : 5000,
						onBefore: function(data) {
			
							//	find current and next slide
							var currentSlide = $('.slide.active', this),
								nextSlide = data.items.visible,
								_width = $('#wrapper').width();
			
							//	resize currentslide to small version
							currentSlide.stop().animate({
								width: _width * 0.15
							});		
							currentSlide.removeClass( 'active' );
			
							//	hide current block
							data.items.old.add( data.items.visible ).find( '.slide-block' ).stop().fadeOut();					
			
							//	animate clicked slide to large size
							nextSlide.addClass( 'active' );
							nextSlide.stop().animate({
								width: _width * 0.7
							});						
						},
						onAfter: function(data) {
							//	show active slide block
							data.items.visible.last().find( '.slide-block' ).stop().fadeIn();
						}
					},
					onCreate: function(data){
			
						//	clone images for better sliding and insert them dynamacly in slider
						var newitems = $('.slide',this).clone( true ),
							_width = $('#wrapper').width();

						$(this).trigger( 'insertItem', [newitems, newitems.length, false] );
			
						//	show images 
						$('.slide', this).fadeIn();
						$('.slide:first-child', this).addClass( 'active' );
						$('.slide', this).width( _width * 0.15 );
			
						//	enlarge first slide
						$('.slide:first-child', this).animate({
							width: _width * 0.7
						});
			
						//	show first title block and hide the rest
						$(this).find( '.slide-block' ).hide();
						$(this).find( '.slide.active .slide-block' ).stop().fadeIn();
					}
				});
			
				//	Handle click events
				$('#slider').children().click(function() {
					$('#slider').trigger( 'slideTo', [this] );
				});
			
				//	Enable code below if you want to support browser resizing
				$(window).resize(function(){
			
					var slider = $('#slider'),
						_width = $('#wrapper').width();
			
					//	show images
					slider.find( '.slide' ).width( _width * 0.15 );
			
					//	enlarge first slide
					slider.find( '.slide.active' ).width( _width * 0.7 );
			
					//	update item width config
					slider.trigger( 'configuration', ['items.width', _width * 0.15] );
				});

			});
		</script>
		<style type="text/css">
			html, body {
				height: 100%;
				padding: 0;
				margin: 0;
			}
			body {
				background: #f9f9f3;
			}
			body * {
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				color: #222;
				line-height: 20px;
			}

			#wrapper {
				height: 100%;
				width: 100%;
				min-height: 650px;
				min-width: 900px;
				padding-top: 1px;
			}
			#slider {
				margin: 100px 0 0 0;
				height: 500px;
				overflow: hidden;
				background: url(/igniter/assets/images/img/ajax-loader.gif) center center no-repeat;
			}
			
			#slider .slide {
				position: relative;
				display: none;
				height: 500px;
				float: left;
				background-position: center right;
				cursor: pointer;
				border-left: 1px solid #fff;
			}
			
			#slider .slide:first-child {
				border: none;
			}
			
			#slider .slide.active {
				cursor: default;
			}
			
			#slider .slide-block {
				position: absolute;
				left: 40px;
				bottom: 75px;
				display: inline-block;
				width: 435px;
				background-color: #fff;
				background-color: rgba(255,255,255, 0.8);	
				padding: 20px;
				font-size: 14px;
				color: #134B94;
				border: 1px solid #fff;
				overflow: hidden;
				border-radius: 4px;
			}
			
			#slider .slide-block h4 {
				font-size: 36px;
				font-weight: bold;
				margin: 0 0 10px 0;
				line-height: 1;
			}
			#slider .slide-block p {
				margin: 0;
			}

			#donate-spacer {
				height: 0;
			}
			#donate {
				border-top: 1px solid #999;
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
				color: #999;
			}
			#donate form {
				width: 100px;
			}
		</style>
		 <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
<style>
#menu{
  width: 100%;
  margin-top: 15%;
  padding: 10px 0 0 0;
  list-style: none;  
/*  background: #111;
 /* background: -moz-linear-gradient(#444, #111); 
        background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));  
  background: -webkit-linear-gradient(#444, #111);  
  background: -o-linear-gradient(#444, #111);
  background: -ms-linear-gradient(#444, #111);
  background: linear-gradient(#444, #111);
  -moz-border-radius: 50px;
  border-radius: 50px;
  -moz-box-shadow: 0 2px 1px #9c9c9c;$class
  -webkit-box-shadow: 0 2px 1px #9c9c9c;
  box-shadow: 0 2px 1px #9c9c9c;*/
}

#menu li{
  float: left;
  padding: 0 0 10px 0;
  position: relative;
}

#menu a{
  float: left;
  height: 25px;
  padding: 0 25px;
  color: #999;
  text-transform: uppercase;
  font: bold 12px/25px Arial, Helvetica;
  text-decoration: none;
  text-shadow: 0 1px 0 #000;
}

#menu li:hover > a{
  color: #fafafa;
}

*html #menu li a:hover{ /* IE6 */
  color: #fafafa;
}

#menu li:hover > ul{
  display: block;
}

/* Sub-menu */

#menu ul{
    list-style: none;
    margin: 0;
    padding: 5%;    
    display: none;
    position: absolute;
    top: 35px;
    left: 0;
    z-index: 99999;    
    background: #444;
    background: -moz-linear-gradient(#444, #111);
    background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
    background: -webkit-linear-gradient(#444, #111);    
    background: -o-linear-gradient(#444, #111); 
    background: -ms-linear-gradient(#444, #111);  
    background: linear-gradient(#444, #111);  
    -moz-border-radius: 5px;
    border-radius: 5px;
}

#menu ul li{
    float: none;
    margin: 0;
    padding: 0;
    display: block;  
    -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
    -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
    box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
}

#menu ul li:last-child{   
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;    
}

#menu ul a{    
    padding: 10px;
    height: auto;
    line-height: 1;
    display: block;
    white-space: nowrap;
    float: none;
    text-transform: none;
}

*html #menu ul a{ /* IE6 */   
  height: 10px;
  width: 150px;
}

*:first-child+html #menu ul a{ /* IE7 */    
  height: 10px;
  width: 150px;
}

#menu ul a:hover{
        background: #0186ba;
  background: -moz-linear-gradient(#04acec,  #0186ba);  
  background: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
  background: -webkit-linear-gradient(#04acec,  #0186ba);
  background: -o-linear-gradient(#04acec,  #0186ba);
  background: -ms-linear-gradient(#04acec,  #0186ba);
  background: linear-gradient(#04acec,  #0186ba);
}

#menu ul li:first-child a{
    -moz-border-radius: 5px 5px 0 0;
    -webkit-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
}

#menu ul li:first-child a:after{
    content: '';
    position: absolute;
    left: 30px;
    top: -8px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid #444;
}

#menu ul li:first-child a:hover:after{
    border-bottom-color: #04acec; 
}

#menu ul li:last-child a{
    -moz-border-radius: 0 0 5px 5px;
    -webkit-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
}

/* Clear floated elements */
#menu:after{
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

* html #menu             { zoom: 1; } /* IE6 */
*:first-child+html #menu { zoom: 1; } /* IE7 */
span{
  font-size: 18px;
  color:white;
  text-decoration: none;
}
.iv{
  font-size: 24px;
}
label{
  font-size: 14px;
  font-weight: bolder;
}
img{
  width: 100%;
  height: auto;
}
.value{
   padding-top: 50%;
}
.value1{
  padding-top: 35px;
}
.hai{
      text-decoration: none;
      font-size: 12px;
    }
 h1{
 	font-weight: bolder;
 	font-size: 20px;
 }
</style>

</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
  <div class="container">
    <div class="header"> 
        <a class="navbar-brand value1" href="#"><h2 class="iv" style="color:white">College Info System</h2></a>
      </div>
	      <div class="col-md-4" style="margin-top:2%">
    <table><tr><td>
      
           <input type="text" placeholder="Search Student Staff Club and Projects" id="search" class="form-control" style="width:300px" onblur="makeblank1()" onkeyup="showresult1(this.value)"/>
    </td><td>
         
  <div class="btn-group bootstrap-select">
         <select class="form-control filter-option pull-left" id="person">
    <option value="all">All</option>
    <option value="student">Student</option>
    <option value="staff">Staff</option>
    <option value="club">Club</option>
    <option value="project">Project</option>
    </select>
  </div>
</td>
</tr><tr><td>
  <div id="overlay" style="margin-top:8%;width:300px;margin-left:1em">
         </div>
       </td></tr>
  </table>
</div>
      <table align="right">
        <tr><td>
      <nav class="pull-right">
        <ul id="menu" class="value">
    <li><br><a href="#" class="btn dropdown-toggle value" data-toggle="dropdown"><span><blink><p style="color:white">Login</p></blink></span></a><br><br>
              <ul>
                  <li><a href="#studentmodal" class="dropdown" id="studenttrigger"><span>Student</span></a></li>
                  <li><a href="#staffmodal" class="dropdown" id="stafftrigger"><span>Staff</span></a></li>
                  <li><a href="#clubsmodal" class="dropdown" id="clubstrigger"><span>Club</span></a></li>
              </ul>

    </li>
    <!--
 <li><a href="#" class="btn dropdown-toggle value1"><span>Register</span></a>
      <ul>
                  <li><a href="/igniter/index.php/p_logincheck/studsign"><span>Student</span></a></li>
                  <li><a href="/igniter/index.php/p_logincheck/staffsign"><span>Staff</span></a></li>
                  <li><a href="/igniter/index.php/welcome/club"><span>Club</span></a></li>
              </ul>

    </li>
    -->
  </ul>
</nav></td></tr>
 <tr class="value">
 <td style="color:red;font-size:16px" class="value">
      <?php 
                if(isset($error)){
                   echo "<script type='text/javascript'>alert('$error');</script>";
                }
                  ?>
</nav></td></tr>
</table>
<br/><br/><br/>
    </div>
</div> 
</div>
<div class="w">
    <div class="content">
   
    </div>
  </div>
  <div id="studentmodal" style="display:none;">
    <h1>Student Login</h1>
    <?php 
      echo form_open('p_logincheck');
    ?>
    <form id="studentform" name="studentform" method="post" action="">
      <label for="regno">Register No:</label>
      <input type="text" name="regno" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="pass" id="password" class="txtfield" tabindex="2">
        <div class="hai"><a href="#" class="hai" tabindex="2">Forgot Your Password</a></div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
  <div id="staffmodal" style="display:none;">
    <h1>Staff Login</h1>
    <?php 
      echo form_open('stafflogin');
    ?>
    <form id="staffform" name="staffform" method="post" action="">
      <label for="regno">Staff ID:</label>
      <input type="text" name="staffid" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="pass" id="password" class="txtfield" tabindex="2">
        <div class="hai"><a href="#" class="hai" tabindex="2">Forgot Your Password</a></div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
  <div id="clubsmodal" style="display:none;">
    <h1>Club Login</h1>
    <?php echo form_open('clublogin');?>
    <form id="clubsform" name="clubsform" method="post" action="">
      <label for="regno">Club ID:</label>
      <input type="text" name="clubid" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="pass" id="password" class="txtfield" tabindex="2">
      <div class="hai"><a href="#" class="hai" tabindex="2">Forgot Your Password</a></div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function(){
  $('#studentform').submit(function(e){
    return false;
  });
  
  $('#studenttrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
$(function(){
  $('#staffform').submit(function(e){
    return false;
  });
  
  $('#stafftrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
$(function(){
  $('#clubsform').submit(function(e){
    return false;
  });
  
  $('#clubstrigger').leanModal({ top: 115, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>
	<div id="wrapper">
			<div id="slider">
	  
				<div class="slide" style="background-image: url(/igniter/assets/images/img/k!.jpg);background-repeat:no-repeat;">
					<div class="slide-block">
						<h4><a href = "#" style="color:red">Wall of fame</a></h4>
						<p>Fame comes here!</p>
					</div>
				</div>
		
				<div class="slide" style="background-image: url(/igniter/assets/images/img/k2.png);background-repeat:no-repeat;">
					<div class="slide-block">
						<h4><a href = "#" style="color:red">Staffs</a></h4>
						<p></p>
					</div>
				</div>
		
				<div class="slide" style="background-image: url(/igniter/assets/images/img/livecoding.jpg);background-repeat:no-repeat;">
					<div class="slide-block">
						<h4><a href = "#" style="color:red">Clubs</a></h4>
						<p>rock and roll</p>
					</div>
				</div>
				

				<!--<div class="slide" style="background-image: url(/igniter/assets/images/img/up.jpg);background-repeat:no-repeat;">
					<div class="slide-block">
						<h4>UP</h4>
						<p>A comedy adventure in which 78-year-old Carl Fredricksen fulfills his dream of a great adventure when he ties thousands of balloons to his house and flies away to the wilds of South America.</p>
					</div>
				</div>-->

			</div>
		</div>

</body>
</html>
