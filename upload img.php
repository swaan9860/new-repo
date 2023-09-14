<?php // upload.php
	echo <<<_END
<html>
<head>
<title>
PHP Form Upload
</title>
</head>
<body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
select file: <input type = 'file' name='filename' />
<input type='submit' value='Upload' />
</form>
_END;
if($_FILES){
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo "Uploaded image '$name'<br /> <img src='$name' />";
}	
echo"</body></html>"
?>