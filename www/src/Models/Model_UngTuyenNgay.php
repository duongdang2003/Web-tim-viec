<?php
class Model_UngTuyenNgay
{
    public function ungTuyenNgay($iduser, $idbaidang)
    {
        require("./src/connection.php");
        $test = "select * from UngTuyen where ID_BaiDang = '$idbaidang' and ID_user = '$iduser'";
        $num = mysqli_num_rows($conn->query($test));
        if ($num ==0){
            $sql = "INSERT INTO UngTuyen(
                daduyet,
                ID_BaiDang,
                ID_user
            )
            values(-1,$idbaidang,$iduser);";
            if ($conn->query($sql) === TRUE) {
                return 1;
            } else {
                return 0;
            }
        } else return 0;
        $conn->close();
    }
    public function tuyenNgay($idcongty, $iduser){
        require("./src/connection.php");
        $test = "select * from CongViecDuocMoi where ID_CongTy = '$idcongty' and ID_user = '$iduser'";
        $num = mysqli_num_rows($conn->query($test));
        if ($num ==0){
            $sql = "INSERT INTO CongViecDuocMoi(
                daduyet,
                ID_CongTy,
                ID_user
            )
            values(-1,$idcongty,$iduser);";
            if ($conn->query($sql) === TRUE) {
                return 1;
            } else {
                return 0;
            }
        } else return 0;
        $conn->close();
    }
}
