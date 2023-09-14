<?php //formtest2.php
if(isset($_GET['name'])) $name = $_GET['name'];
else $name = "(Not Entered)";
echo<<<_END
<html>
<head>

	<title>Form Test</title>
</head>
<body>
Your name is : $name<br />
<form method="GET" action="formtest2.php">
What is your name ?
<input type="Text" name="name" />
<input type="submit" />
</form>
</body>
</html>
_END
?>