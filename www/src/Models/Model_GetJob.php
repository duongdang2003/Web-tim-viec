<?php
class Model_GetJob{
    public function getJob(){
        session_start();
        $iduser = $_SESSION['IDUser'];
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF8');
        $sql = $conn -> query("SELECT DangViec.ID_BaiDang,CongTy.TenCongTy,CongTy.linkava,CongTy.thanhpho,DangViec.tencongviec,DangViec.luong,DangViec.loaicongviec,DangViec.tagkinang,DangViec.thoihan
         from `CongTy` INNER JOIN DangViec ON CongTy.ID_CongTy = DangViec.ID_CongTy
         where DangViec.ID_BaiDang not in (select ID_BaiDang from UngTuyen where ID_user = '$iduser');
         ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getDeitalJob($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF8');
        $sql = $conn -> query("SELECT CongTy.ID_CongTy,DangViec.ID_BaiDang,CongTy.TenCongTy,CongTy.thanhpho,DangViec.tencongviec,DangViec.luong,DangViec.motacongviec,DangViec.chucvu,DangViec.thoihan,DangViec.yeucaubangcap,DangViec.quyenloi,DangViec.yeucaucongviec,DangViec.linhvuc,DangViec.soluongtuyendung
         from `CongTy` INNER JOIN DangViec ON CongTy.ID_CongTy = DangViec.ID_CongTy
          where ID_BaiDang='$id'");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getJobWithID($id){
        // session_start();
        $iduser = $_SESSION['IDUser'];
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF8');
        $sql = $conn -> query("SELECT DangViec.ID_BaiDang,CongTy.TenCongTy,CongTy.linkava,CongTy.thanhpho,DangViec.tencongviec,DangViec.luong,DangViec.loaicongviec,DangViec.tagkinang,DangViec.thoihan
         from `CongTy` INNER JOIN DangViec ON CongTy.ID_CongTy = DangViec.ID_CongTy
         where DangViec.ID_CongTy = '$id' and DangViec.ID_BaiDang not in (select ID_BaiDang from UngTuyen where ID_user = '$iduser');
         ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getJobWithIDClient($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF8');
        $sql = $conn -> query("SELECT DangViec.ID_BaiDang,CongTy.TenCongTy,CongTy.linkava,CongTy.thanhpho,DangViec.tencongviec,DangViec.luong,DangViec.loaicongviec,DangViec.tagkinang,DangViec.thoihan
         from `CongTy` INNER JOIN DangViec ON CongTy.ID_CongTy = DangViec.ID_CongTy
         where DangViec.ID_CongTy = '$id' and DangViec.ID_BaiDang not in (select ID_BaiDang from UngTuyen where ID_user = '$id');
         ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
}