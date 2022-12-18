<?php 
// header("Content-type: text/html; charset=utf-8");
    $host = 'mysql-server'; // tên mysql server
    $user = 'root';
    $pass = 'root';
    $db = 'WebTimViec'; // tên databse
	
    $conn = new mysqli($host, $user, $pass, $db);
    mysqli_options($conn, MYSQLI_OPT_LOCAL_INFILE, 1);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die('Không thể kết nối database: ' . $conn->connect_error);
    }
?>