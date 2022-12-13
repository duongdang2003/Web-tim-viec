<?php
class Register
{
    function signupClient(){
        require_once("../Models/Model_Register.php");
        $Model_Register = new Model_Register(); 
        $taikhoan = $_POST['taikhoan'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $sdt = $_POST['sdt'];
        $count = $Model_Register->check_user($taikhoan, $email);
        if ($count > 0) {
            require_once("../Views/layouts/Register.php");
            require_once("../Views/notification/Wrongregister.php");
            $wrongregister = new Wrongregister();
            $wrongregister->printError("block","Tài khoản này đã tồn tại");
            die('This User Already Exists');
        } else {
            $data = array(
                'taikhoan' => $taikhoan,
                'email' => $email,
                'matkhau' => $matkhau,
                'sdt' => $sdt
            );
            $res = $Model_Register->insert_user($data);
            // header('location:../index.php');
            return $res;
        }
    }
    function signupAdmin(){
        require_once("../Models/Model_Register.php");
        $Model_Register = new Model_Register(); 
        $taikhoan = $_POST['taikhoan'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $sdt = $_POST['sdt'];
        $tendoanhnghiep = $_POST['tendoanhnghiep'];
        $diachi = $_POST['diachi'];
        $website = $_POST['website'];
        $count = $Model_Register->check_admin($taikhoan, $email);
        if ($count > 0) {
            require_once("../Views/layouts/Register.php");
            require_once("../Views/notification/Wrongregister.php");
            $wrongregister = new Wrongregister();
            $wrongregister->printError("block","Tài khoản này đã tồn tại");
            die('This User Already Exists');
        } else {
            $data = array(
                'taikhoan' => $taikhoan,
                'email' => $email,
                'matkhau' => $matkhau,
                'sdt' => $sdt,
                'tendoanhnghiep' => $tendoanhnghiep,
                'diachi' => $diachi,
                'website' => $website
            );
            $res = $Model_Register->insert_admin($data);
            // header('location:../index.php');
            return $res;
        }
    }
}
if (isset($_POST["dangky"])){
    $regis = new Register();
    if ($_POST["type"]=="TV")
        $res = $regis -> signupClient();
    else $res = $regis -> signupAdmin();
    if ($res){
        require_once("../Views/layouts/dnhap.php");
        require_once("../Views/notification/Wronglogin.php");
        $wronglogin = new Wronglogin();
        $wronglogin->printError("block","Đăng kí thành công<br>Vui lòng đăng nhập lại.");
        $formLogin = new FormLogin();
        $formLogin->previousLogin("","");
    }
}
else require_once("../Views/layouts/Register.php");




