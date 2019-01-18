<!DOCTYPE php>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
	<form method="post" action="recommendation.php">
		Type your email here <input type="text" name="email"/>
	</form>
	<?php
	if (count($_POST) > 0){
		echo $_POST['error'];
	}
	?>
</body>
</html>
