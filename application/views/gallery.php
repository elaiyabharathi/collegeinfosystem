<!DOCTYPE html>
<html lang="en">
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	
	<head>
		<title>Gallery</title>
		<meta charset="utf-8">
	</head>
	<body>
	<div id="gallery">
	</div>
	<div id="upload">
	<?php
	echo form_open_multipart('gallery');
	echo form_upload('userfile');
	echo form_submit('upload','UPLOAD');
	echo form_close();
	?>
	</div>
	</body>
	</html>