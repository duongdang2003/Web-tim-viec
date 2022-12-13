<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>
<body>
    <form action="../Controllers/C_Register.php" method="post" enctype="multipart/form">
        <input type="text" name="taikhoan" placeholder="Username">
        <input type="text" name="matkhau" placeholder="matkhau">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="sdt" placeholder="sdt">
        <button type='submit' name='dangky'>Đăng Ký</button>
    </form>
</body>
</html>