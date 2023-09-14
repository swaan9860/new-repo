<?php
	//the message
$msg = "First line of text\n Second line of text";

//use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

//send email
mail("swaan800@gmail.com", test email, $msg);
?>