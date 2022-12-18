<?php
class Model_GetUser{
    public function getUser($id){
        // session_start();
        require("../connection.php");
        if ($_SESSION["who"]=='Client')
            $sql = $conn -> query("SELECT hoten,linkava FROM NguoiTimViec WHERE ID_user = '$id';");
        else $sql = $conn -> query("SELECT TenCongTy,linkava FROM CongTy WHERE ID_CongTy = '$id';");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getAllInfoUser($id){
        require("../connection.php");
        $sql = $conn -> query("SELECT * FROM NguoiTimViec INNER JOIN Client 
        ON NguoiTimViec.ID_user = Client.ID_user
        WHERE NguoiTimViec.ID_user = '$id';");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getAllUser(){
        require("../connection.php");
        $sql = $conn -> query("SELECT * FROM NguoiTimViec INNER JOIN Client 
        ON NguoiTimViec.ID_user = Client.ID_user
        ;");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getUserWithID($id){
        require("../connection.php");
        $sql = $conn -> query("SELECT * FROM NguoiTimViec INNER JOIN Client 
        ON NguoiTimViec.ID_user = Client.ID_user
        WHERE NguoiTimViec.ID_user = '$id';");
        if ($sql) 
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
}
?>