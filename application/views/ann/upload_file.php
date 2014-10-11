<?php $allowedExts = array("gif", "jpeg", "jpg", "png","pdf","pptx","ppt","docx","doc","xlsx","xls");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			echo '<script>alert("'.'inga err first if'.$_FILES["file"]["size"].$_POST['aname'].'")</script>';
			if (($_FILES["file"]["size"] < 2000000)
			&& in_array($extension, $allowedExts)) {
				echo '<script>alert("'.'inga err first if'.$_FILES["file"]["size"].'")</script>';
			  if ($_FILES["file"]["error"] > 0) {
			  	echo '<script>alert("'.'inga err")</script>';
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			  } else {
			    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			    echo "Type: " . $_FILES["file"]["type"] . "<br>";
			    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			    if (file_exists("upload/" . $_FILES["file"]["name"])) {
			      echo $_FILES["file"]["name"] . " already exists. ";
			    } else {
			      move_uploaded_file($_FILES["file"]["tmp_name"],
			      "upload/" . $_FILES["file"]["name"]);
			      echo '<script>alert("'.'Stored in: ' . 'upload/' . $_FILES["file"]["name"].'")</script>';
			    }
			  }
			} else {
			  echo '<script>alert("'.'Invalid file'.'")</script>';
			}
			$this->load->view('studhome.php');
			?>