<?php
class Model_DuyetCongViec{
    public function duyetcongviec($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("SELECT CongViecDuocMoi.ID_CongTy,linkava,TenCongTy,daduyet from 
        CongViecDuocMoi
        inner join CongTy ON CongTy.ID_CongTy = CongViecDuocMoi.ID_CongTy
        where CongViecDuocMoi.ID_user = '$id'
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function yeucautuyendung($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("SELECT CongTy.ID_CongTy,ID_BaiDang,TenCongTy,maungtuyen,daduyet,tencongviec,linkava
        from CongTy,
        (SELECT maungtuyen,tencongviec,daduyet,DangViec.ID_CongTY,UngTuyen.ID_BaiDang from 
                UngTuyen
                inner join DangViec
                on DangViec.ID_BaiDang = UngTuyen.ID_BaiDang
                where UngTuyen.ID_user = '$id') as newtable
        where newtable.ID_CongTy = CongTy.ID_CongTy
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    function dongyduyet($id, $idcongty){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("
        UPDATE CongViecDuocMoi
        SET daduyet = 1
        where ID_user = '$id' and ID_CongTy = '$idcongty'
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    function tuchoiduyet($id, $idcongty){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("
        UPDATE CongViecDuocMoi
        SET daduyet = 0
        where ID_user = '$id' and ID_CongTy = '$idcongty'
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
}