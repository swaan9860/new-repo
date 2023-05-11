<html>
<head>
	<title>Setting Cookie with PHP</title>
</head>
<body>
	<?php
	if(isset($_COOKIE["name"]))
	echo "Welcome" . $_COOKIE["name"] . "<br/>";
		else
		echo "Sorry. . . . Not recognized" . "<br/>";

		setcookie("name", "Ram", time()+3600, "/","", 0);
		setcookie("age", "36", time()+3600, "/","",0);
?>
</body>
</html>
