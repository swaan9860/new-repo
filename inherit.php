<?php
	$object=new Subscriber;
	$object->name = "Fred";
	$object->password = "pword";
	$object->phone = "012 345 7898";
	$object->email = "fred@bloggs.com";
	$object->display()
	class User
	{
		public $name, $password;
		function save_user(){

		echo "Saved User Code Goes Here";
	}
	class Subscriber extends User 
	{
		public $phone, $email;
		function display(){
			echo"Name".$this->name ."<br />";
			echo"Pass".$this->password ."<br />";
			echo"Phone".$this->phone ."<br />";
			echo"Email".$this->email ."<br />";
		}
	}
?>