<?php

	#  https://www.w3schools.com/php/php_mysql_select.asp
 
    $host = 'mysql-server'; // tên mysql server
    $user = 'root';
    $pass = 'root';
    $db = 'WebTimViec'; // tên databse
	
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die('Không thể kết nối database: ' . $conn->connect_error);
    }

	echo "Kết nối thành công tới database<br><br>";

	$insertToSql = "insert into BaiTimViec
	values('B01','1999-01-03','tim viec js',01)";
	if (mysqli_query($conn,$insertToSql)){
		echo "New record created successfully";
	} else echo "Error: ".$insertToSql."<br>" . mysqli_error($conn)."<br>";

	$sql = "select * from NguoiTimViec";
	$result = $conn->query($sql);

	$sql2 = "select * from BaiTimViec";
	$result2 = $conn->query($sql2);
	echo json_encode($result2->fetch_assoc())."<br>";

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) 
		{
			echo json_encode($row);
			echo "<br>";
		}
	}
	else {
		echo "Bảng chưa có dữ liệu";
	}
	mysqli_close($conn);
	// Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên
	echo "<br><img src='/images/tdt-logo.png' />";
	echo "<p>Đây là ảnh mẫu, lấy từ thư mục images tại web root.</p>";
?>
