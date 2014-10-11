<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
       College Info System
        </title>
<!--         <link rel="shortcut icon" href="/igniter/favicon.ico"> -->
        <style>

            /* Demo styles */
            html,body{background:#222;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px}
        </style>
        <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <!-- load Galleria -->
        <script src="/igniter/assets/js/galleria-1.3.3.min.js"></script>
    </head>
    <body onload="init()">
     <?php $this->load->view('navbar');?>    
        <?php $this->load->view('sidebar');?>
    <div class="content">
        <h1><?php echo $_SESSION['fname'];        
        //$noofpics=$this->mongo_db->get_where('club',array('clubid'=>$_SESSION['clubid']));   
//$noofpics=$noofpics[0]['noofpics'];            
        $noofpics=$result;            

        ?></h1>
        <div id="galleria">
           <?php 

            for($i=1;$i<=$noofpics;$i++)
            {
                 echo '<a href="/igniter/assets/images/gallery/'.$_SESSION['clubid'].'/'.$i.'.jpg">';
                echo '<img 
                    src="/igniter/assets/images/gallery/'.$_SESSION['clubid'].'/'.$i.'.jpg",                    
                ></a>';
            }
            ?>
        </div>
    </div>
    <script>  // Load the classic theme
    Galleria.loadTheme('/igniter/assets/js/galleria.classic.min.js');
    // Initialize Galleria
    Galleria.run('#galleria');
    </script>
    </body>
</html>