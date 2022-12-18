<?php
    class Model_Signin{
        public function login($conn,$username,$password,$who){
            if ($who)
                $sql = "SELECT TenDangNhap,matkhau FROM Client where TenDangNhap='$username' and matkhau='$password';";
            else $sql = "SELECT TenDangNhap,matkhau FROM Admin where TenDangNhap='$username' and matkhau='$password';";
            if($result = $conn ->query($sql)){
                $c = mysqli_num_rows($result);
                // giải phóng bộ nhớ
                mysqli_free_result($result);
            }
            return $c;
        }
        public function getId($conn,$username,$password,$who){
            if ($who)
                $sql = $conn->query("SELECT ID_user FROM Client where TenDangNhap='$username' and matkhau='$password';");
            else $sql = $conn->query("SELECT ID_CongTy FROM Admin where TenDangNhap='$username' and matkhau='$password';");
            $data = array();
            while ($r = $sql->fetch_assoc())
            {
                if ($who)
                    $data[] = ["id"=>$r["ID_user"]];
                else $data[] = ["id"=>$r["ID_CongTy"]];
            }
            return $data[0]["id"];
        }
    };
?>