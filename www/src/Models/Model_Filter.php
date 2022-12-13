<?php
class Model_Filter{
    public function showListFilter(){
        require("../connection.php");
        $sql = $conn -> query("SELECT CongTy.thanhpho,DangViec.luong,DangViec.loaicongviec,DangViec.linhvuc from `CongTy` INNER JOIN DangViec ON CongTy.ID_CongTy = DangViec.ID_CongTy;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getFilterFromUser(){
        require("../connection.php");

    }
    public function searchFilterFromUser(){
        require("../connection.php");

    }
}