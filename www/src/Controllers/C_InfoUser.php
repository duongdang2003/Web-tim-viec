<?php
class C_InfoUser{
    public function getOnlyId(){
        session_start();
        require_once("../Models/Model_GetUser.php");
        $Model_GetUser = new Model_GetUser();
        $iduser = $Model_GetUser -> getUser($_SESSION['IDUser']);
        $data = array();
        if ($_SESSION["who"]=='Client'){
            while ($r = $iduser->fetch_assoc()) {
                $data[] = ["type"=>"Client","hoten" => $r["hoten"], "linkava" => $r["linkava"]];
            }
        } else {
            while ($r = $iduser->fetch_assoc()) {
                $data[] = ["type"=>"Admin","hoten" => $r["TenCongTy"], "linkava" => $r["linkava"]];
            }
        }
        echo json_encode($data[0]);
    }
    public function getAll(){
        session_start();
        require_once("../Models/Model_GetUser.php");
        $Model_GetUser = new Model_GetUser();
        $user = $Model_GetUser -> getAllInfoUser($_SESSION['IDUser']);
        $data = array();
        while ($r = $user->fetch_assoc()) {
            $data[] = ["hoten" => $r["hoten"], "linkava" => $r["linkava"],"congviec" => $r["congviec"],"ngaysinh" => $r["ngaysinh"],"gioitinh" => $r["gioitinh"],"linhvuc" => $r["linhvuc"],"diachi" => $r["diachi"],"muctieunghenghiep" => $r["muctieunghenghiep"],"hocvan" => $r["hocvan"],"kinang" => $r["kinang"],"kinhnghiemlamviec" => $r["kinhnghiemlamviec"],"chitiet" => $r["chitiet"],"tagkinang" => $r["tagkinang"],"sdt" => $r["sdt"],"email" => $r["email"]];
        }
        echo json_encode($data[0]);
    }
    public function getAllUser(){
        require_once("../Models/Model_GetUser.php");
        $Model_GetUser = new Model_GetUser();
        $user = $Model_GetUser -> getAllUser();
        $data = array();
        while ($r = $user->fetch_assoc()) {
            $data[] = ["thanhpho"=>$r["thanhpho"],"loaicongviec"=>$r["loaicongviec"],"id" => $r["ID_user"],"hoten" => $r["hoten"], "linkava" => $r["linkava"],"congviec" => $r["congviec"],"ngaysinh" => $r["ngaysinh"],"gioitinh" => $r["gioitinh"],"linhvuc" => $r["linhvuc"],"diachi" => $r["diachi"],"muctieunghenghiep" => $r["muctieunghenghiep"],"hocvan" => $r["hocvan"],"kinang" => $r["kinang"],"kinhnghiemlamviec" => $r["kinhnghiemlamviec"],"chitiet" => $r["chitiet"],"tagkinang" => $r["tagkinang"],"sdt" => $r["sdt"],"email" => $r["email"]];
        }
        echo json_encode($data);
    }
    public function getUserWithID($id){
        session_start();
        require_once("../Models/Model_GetUser.php");
        $Model_GetUser = new Model_GetUser();
        $user = $Model_GetUser -> getUserWithID($id);
        $data = array();
        while ($r = $user->fetch_assoc()) {
            $data[] = ["ID_user"=>$r["ID_user"],"thanhpho"=>$r["thanhpho"],"loaicongviec"=>$r["loaicongviec"],"hoten" => $r["hoten"], "linkava" => $r["linkava"],"congviec" => $r["congviec"],"ngaysinh" => $r["ngaysinh"],"gioitinh" => $r["gioitinh"],"linhvuc" => $r["linhvuc"],"diachi" => $r["diachi"],"muctieunghenghiep" => $r["muctieunghenghiep"],"hocvan" => $r["hocvan"],"kinang" => $r["kinang"],"kinhnghiemlamviec" => $r["kinhnghiemlamviec"],"chitiet" => $r["chitiet"],"tagkinang" => $r["tagkinang"],"sdt" => $r["sdt"],"email" => $r["email"]];
        }
        echo json_encode($data[0]);
    }
}

$C_InfoUser = new C_InfoUser();
if (isset($_POST["type"])){
    if ($_POST["type"]=="0"){
        $C_InfoUser -> getOnlyId();
    } else if ($_POST["type"]=="1"){
        $C_InfoUser -> getAll();
    } else if ($_POST["type"]=="2"){
        $C_InfoUser -> getAllUser();
    } else{
        $C_InfoUser -> getUserWithID($_POST["iduser"]);
    }

}