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
	span{
	  text-align: center;
	  font-size: 20px;
	}
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
      $db = new Mongo();
      $query = $this->mongo_db->get_where('pic',array('name'=>'Richard Garry'));?>
      <img src="/igniter/assets/images/img/<?php foreach($query as $row) echo $row['profile_pic'];?>" />
		  </body>
		  </html>
          
  