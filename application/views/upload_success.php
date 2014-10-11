<html>

<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php 
echo anchor('upload', 'Upload Another File!'); ?></p>
<?php 
$record = array("name" => "my photo","photo" => new MongoBinData(file_get_contents("1.jpg"),2));
	$this->mongo_db->insert('files',$record);


$record =$this->mongo_db->get_where('files',array("name" => "my photo")); 
$imagebody = $record[0]["photo"];
//header('Content-Type: image/png');
// Output the image
//imagejpeg("/uploads/1.jpg");

?>

</body>
</html>