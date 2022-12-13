<?php
session_start();
$homePage = '../Views/user/homepageUser.php';
if (isset($_SESSION['taikhoan']) && isset($_SESSION['matkhau'])) {
    header("Location: $homePage");
    exit();
}
?>
<?php
if (isset($_COOKIE['taikhoan']) && isset($_COOKIE['matkhau'])) {
    $previousUser = $_COOKIE['taikhoan'];
    $previousPass = $_COOKIE['matkhau'];
} else {
    $previousUser = "";
    $previousPass = "";
}
if (isset($_POST['SignIn'])) {
    require_once("../connection.php");
    require_once("../Models/Model_SignIn.php");

    $displayErr = "display: none";
    $errorMess = "";
    if (isset($_POST['taikhoan']) && isset($_POST['matkhau'])) {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        // kiểm tra tài khoản và mật khẩu từ databse
        $modelSignin = new Model_Signin();
        $canLogin = $modelSignin->login($conn, $taikhoan, $matkhau);
        if (empty($taikhoan)) {
            $errorMess = "Bạn chưa nhập username";
            $displayErr = "block";
        } else if (empty($matkhau)) {
            $errorMess = "Bạn chưa nhập password";
            $displayErr = "block";
        } else if (!$canLogin) {
            $errorMess = "Sai tên username hoặc password";
            $displayErr = "block";
        } else{
            $displayErr = "display:none";
            // lưu lại lần đăng nhập trước
            $previousUser = $taikhoan;
            $previousPass = $matkhau;
            if (isset($_POST["remember"])&&$_POST["remember"]=="1"){
                setcookie("taikhoan",$taikhoan,time()+3600*24*365);//1 nam
                setcookie("matkhau",$matkhau,time()+3600*24*365);//1 nam
            }
            $_SESSION['taikhoan'] = $taikhoan;
            $_SESSION['matkhau'] = $matkhau;
        }
        if ($canLogin) {
            header("Location: ../Views/user/homepageUser.php");
        } else {
            require_once("../Views/layouts/dnhap.php");
            require_once("../Views/notification/Wronglogin.php");
            $wronglogin = new Wronglogin();
            $wronglogin->printError($displayErr,$errorMess);
            $formLogin = new FormLogin();
            $formLogin->previousLogin($previousUser,$previousPass);
        }
    }
    mysqli_close($conn);
} else{
    require_once("../Views/layouts/dnhap.php");
    $formLogin = new FormLogin();
    $formLogin->previousLogin($previousUser,$previousPass);
}
?>
