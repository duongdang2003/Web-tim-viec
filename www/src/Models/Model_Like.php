<?php
class Model_Like{
    public function getSaveCT($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("SELECT DangViec.ID_CongTy,DangViec.ID_BaiDang,CongTy.TenCongTy,CongTy.linkava,CongTy.thanhpho,DangViec.tencongviec,DangViec.luong,DangViec.loaicongviec,DangViec.tagkinang,DangViec.thoihan
         from `DangViec` INNER JOIN CongTy ON CongTy.ID_CongTy = DangViec.ID_CongTy
        WHERE DangViec.ID_BaiDang in (SELECT ID_BaiDang from `LuuCT` WHERE ID_user = '$id')
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getSaveNTV($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("SELECT *
         from `NguoiTimViec`
        WHERE ID_user in (SELECT ID_user from `LuuNTV` WHERE ID_CongTy = '$id')
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
}