<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
<title>Gallery</title>
<style type="text/css">
body {
    margin: 0 auto 20px;
    padding: 0;
    background: #acacac;
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
}
table {
    width: 100%;
}
img {
    display: block;
    margin: 20px auto 10px;
    width: 400px;
	height: 400px
    outline: none;
}
img:active {
    max-width: 100%;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
  
<?php
$folder = 'assets/images/gallery/gt/';
$filetype = '*.*';
$files = glob($folder.$filetype);
#echo '<table>';
for ($i=0; $i<count($files); $i++) {
 #   echo '<tr><td>';
    echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'" /></a>';
    echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
  #  echo '</td></tr>';
}
#echo '</table>';
?>
</body>
</html>