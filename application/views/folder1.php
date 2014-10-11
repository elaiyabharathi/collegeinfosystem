<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gallery</title>
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
            #galleria{height:450px}

        </style>

        <!-- load jQuery -->
        <script src="assets/js/jquery.js"></script>
         
        <!-- load Galleria -->
        <script src="assets/js/galleria-1.3.3/galleria/galleria-1.3.3.min.js"></script>
        <script src="assets\js\galleria-1.3.3\galleria\themes\classic\galleria.classic.min.js"></script>
    </head>
<body>
    <div class="content">
        <h1>Gallery</h1>
        <p></p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
            
           
           
			 <a href="images/k!.jpg">
                <img 
                    src="images/k!.jpg"
                    data-big="images/k!.jpg"
                    data-title="Kurukshetra"
                    data-description="Battle of brains"
                >
				</a>

				<a href="images/6.jpg">
                <img 
                    src="images/6.jpg"
                    data-big="images/6.jpg"
                    data-title="Live Coding"
                    data-description="COde yur way to euphoria"
                >
            </a>
			 <a href="images/7.jpg">
                <img 
                    src="images/7.jpg"
                    data-big="images/7.jpg"
                    data-title="up"
                    data-description="a movie"
                >
           
            </a>
			<a href="images/4.jpg">
                <img 
                    src="images/4.jpg"
                    data-big="images/4.jpg"
                    data-title="birds"
                    data-description="birds"
                >
           
            </a>
			<a href="images/journ.jpg">
                <img 
                    src="images/journ.jpg"
                    data-big="journ/k!.jpg"
                    data-title="journalism"
                    data-description="journalism"
                >
           
            </a>
			
            <a href="images/k!.jpg">
                <img 
                    src="images/k!.jpg",
                    data-big="images/k!.jpg"
                    data-title="Kurukshetra"
                    data-description="the battle of brains"
                >
            </a>
        </div>
           
        <p class="cred">To know more visit<a href="www.kurukshetra.org.in">www.kurukshetra.org.in</a>.</p>
    </div>

    <script>

    // Load the classic theme
    Galleria.loadTheme('galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
    </body>
</html>