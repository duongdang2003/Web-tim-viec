<?php
class Model_DuyetUngVien{
    public function duyetungvien($id){
        require("../connection.php");
        mysqli_set_charset($conn, 'UTF-8');
        $sql = $conn -> query("SELECT UngTuyen.ID_user,UngTuyen.ID_BaiDang,linkava,hoten,congviec,daduyet from 
        UngTuyen
        inner join NguoiTimViec ON NguoiTimViec.ID_user = UngTuyen.ID_user
        where UngTuyen.ID_BaiDang in (SELECT ID_BaiDang from DangViec where ID_CongTy = '$id')
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
        $sql = $conn -> query("SELECT linkava,hoten,congviec,CongViecDuocMoi.ID_user,daduyet
        from CongViecDuocMoi
        inner join NguoiTimViec 
        on NguoiTimViec.ID_user = CongViecDuocMoi.ID_user
        where CongViecDuocMoi.ID_CongTy = '$id'
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