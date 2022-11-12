<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<title>list</title>
</head>

<body>
	<h2>List:</h2>

	<?php

		for($i = 1; $i <= sizeof($studentList); $i++) {
			echo  "<p>" .$i .". <a href='?studentId=" .$studentList[$i]->id ."'>" .$studentList[$i]->name ."</a></p>";
		}

	?>

	<br>
	<p><a href="../index.php">Home page</a></p>
</body>
</html>