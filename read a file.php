<?php
	$fh = fopen("testfile.txt", 'r') or die("File does not exist or you do not have the authority to access the file");
	$text = fread($fh, 32);
	fclose($fh);
	echo $text;
?>