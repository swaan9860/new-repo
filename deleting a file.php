<?php
if(!unlink('testfile.txt')) // false case:if found/deleted returns true:
echo "Could not delete the file";
else 
	echo "File testfile.txt deleted successfully";
?>