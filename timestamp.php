<?php 
$temp = "The date is";
echo longdate(time());
function longdate($timestamp){
	return date("I F jS Y", $timestamp);
}
?>