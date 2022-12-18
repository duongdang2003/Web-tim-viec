<?php
class Model_SendLike{
    public function sendlike($iduser, $idbaidang){
        require("./src/connection.php");
        $test = "select * from LuuCT where ID_BaiDang = '$idbaidang' and ID_user = '$iduser'";
        $num = mysqli_num_rows($conn->query($test));
        if ($num ==0){
            $sql = "INSERT INTO LuuCT( ID_CongTy, ID_BaiDang, ID_user )
             values((select ID_CongTy from DangViec where ID_BaiDang=$idbaidang),$idbaidang,$iduser);";
            if ($conn->query($sql) === TRUE) {
                return 1;
            } else {
                return 0;
            }
        } else return 0;
        $conn->close();
    }
    public function sendlikeByAdmin($idcongty, $iduser){
        require("./src/connection.php");
        $test = "select * from LuuNTV where ID_CongTy = '$idcongty' and ID_user = '$iduser'";
        $num = mysqli_num_rows($conn->query($test));
        if ($num ==0){
            $sql = "INSERT INTO LuuNTV( ID_CongTy, ID_user )
             values($idcongty,$iduser);";
            if ($conn->query($sql) === TRUE) {
                return 1;
            } else {
                return 0;
            }
        } else return 0;
        $conn->close();
    }
}