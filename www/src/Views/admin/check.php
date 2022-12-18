<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: ../../Controllers/C_SignIn.php");
} else {
	if ($_SESSION["user"] != "dadangnhap")
		header("Location: ../../Controllers/C_SignIn.php");
}
?>