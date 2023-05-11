<?php
	$fh = fopen("testfile.txt", 'w') or die("Failed to create file"); // w=write, r=read
	$text = <<<_END
	Line 1
	Line 2
	Line 3
	_END;
	fwrite($fh, $text) or die("Could not write to file");
	fclose($fh);
	echo ($fh);
	echo "File 'testfile.txt' written successfully";
?>