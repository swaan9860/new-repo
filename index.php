<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM registered ORDER BY id ASC"); // using mysqli_query instead
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));

?>


<html>
<head>  
    <title>Homepage</title>
</head>

<body>
<br/><br/>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Age</td>
        <td>Email</td>
        <td>Userame</td>
        <td>Password</td>
    </tr>
    <?php 
    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
while ($row = mysqli_fetch_array($result)) {  
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['email']."</td>"; 
        echo "<td>".$row['username']."</td>"; 
        echo "<td>".$row['password']."</td>";
        echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
    }
    ?>
    </table>
</body>
</html>