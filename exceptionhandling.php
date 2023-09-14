<?php
	function printdata($data){
	try{
	if($data==0){
	throw new exception('Number is 0.');
	echo "\n after throw (It will never be executed)";
	}
	else
	{
		$result=10/$data;
	}
	}
	catch(exception $e){	//when exception has been thrown by try block
		echo"\n Exception caught", $e->getMessage();
	}
	finally{
		echo "\n Final block will always be executed";
	}
	}
	printdata(0);
	echo"</br>";
	printdata(6);
?>