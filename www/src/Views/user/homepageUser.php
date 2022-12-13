<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Boostrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<!-- Boostrap separate -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<!-- Custom.css -->
	<link rel="stylesheet" href="../../assets/Styles/custom.css">
	<!-- navbar.css -->
	<link rel="stylesheet" href="../../assets/Styles/navbar.css">
	<!-- content1.css.css -->
	<link rel="stylesheet" href="../../assets/Styles/content1.css">
	<!-- content3.css.css -->
	<link rel="stylesheet" href="../../assets/Styles/content3.css">
	<!-- content2.css -->
	<link rel="stylesheet" href="../../assets/Styles/content2.css">
	<!-- footer.css -->
	<link rel="stylesheet" href="../../assets/Styles/footer.css">
	<!-- reponsive.css -->
	<link rel="stylesheet" href="../../assets/Styles/reponsive.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>FindWork</title>
</head>

<body>
	<!-- <h1>MVC Example</h1>
	<h3>Menu:</h3>
	<h3>1. <a href="./Controllers/C_student.php">Quan li hoc sinh</a></h3> -->

	<div id="main">
		<?php
			require_once("../layouts/app/content1.php");
			require_once("../layouts/app/content2.php");
			require_once("../layouts/app/content3.php");
			require_once("../layouts/app/footer.php");
		?>
	</div>
</body>
<script src="./test/Script/script.js"></script>
</html>