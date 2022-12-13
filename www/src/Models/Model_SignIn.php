<?php
    class Model_Signin{
        public function login($conn,$username,$password){
            $sql = "SELECT TenDangNhap,matkhau FROM Client where TenDangNhap='$username' and matkhau='$password';";
            if($result = $conn ->query($sql)){
                $c = mysqli_num_rows($result);
                // giải phóng bộ nhớ
                mysqli_free_result($result);
            }
            return $c;
        }
    };
?>