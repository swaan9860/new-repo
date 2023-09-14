<?php
//salina.gurung009@gmail.com
$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "test";
$result = 0;
/* Create connection */
$conn = new mysqli($host, $username, $password, $dbname);
/* Check connection */
if ($conn->connect_error) {
     die("Connection to database failed: " . $conn->connect_error);
}
sleep(10);

/* Get data from Client side using $_POST array */
$uname  = $_POST['username'];
$age  = $_POST['age'];
$email  = $_POST['email'];
/* validate whether user has entered all values. */
if(!$uname || !$age || !$email){
  $result = 2;
}else {
   //SQL query to get results from database
   $sql    = "insert into users (username, age, email) values (?, ?, ?)  ";
   $stmt   = $conn->prepare($sql);
   $stmt->bind_param('sss', $uname, $age, $email);
   if($stmt->execute()){
     $result = 1;
   }
}
echo $result;
$conn->close();

?>
