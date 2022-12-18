<?php
class DuyetUngVien{
    public function duyetungvien(){
        session_start();
        require_once("../Models/Model_DuyetUngVien.php");
        $Model_DuyetUngVien = new Model_DuyetUngVien();
        $res = $Model_DuyetUngVien -> duyetungvien($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["linkava"=>$r["linkava"],"hoten"=>$r["hoten"],"congviec"=>$r["congviec"],"ID_user"=>$r["ID_user"],"ID_BaiDang"=>$r["ID_BaiDang"],"daduyet"=>$r["daduyet"]];
        }
        echo json_encode($data);
    }
    public function yeucautuyendung(){
        session_start();
        require_once("../Models/Model_DuyetUngVien.php");
        $Model_DuyetUngVien = new Model_DuyetUngVien();
        $res = $Model_DuyetUngVien -> yeucautuyendung($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["linkava"=>$r["linkava"],"hoten"=>$r["hoten"],"congviec"=>$r["congviec"],"daduyet"=>$r["daduyet"],"ID_user"=>$r["ID_user"]];
        }
        echo json_encode($data);
    }
    public function dongyduyet($idcongty){
        session_start();
        require_once("../Models/Model_DuyetCongViec.php");
        $Model_DuyetCongViec = new Model_DuyetCongViec();
        $res = $Model_DuyetCongViec -> dongyduyet($_SESSION["IDUser"],$idcongty);
        if ($res) echo json_encode(1);
        else echo json_encode(0);
    }
    public function tuchoiduyet($idcongty){
        session_start();
        require_once("../Models/Model_DuyetCongViec.php");
        $Model_DuyetCongViec = new Model_DuyetCongViec();
        $res = $Model_DuyetCongViec -> tuchoiduyet($_SESSION["IDUser"],$idcongty);
        if ($res) echo json_encode(1);
        else echo json_encode(0);
    }
}
$DuyetUngVien = new DuyetUngVien();
if ($_POST["type"]=="0"){
    $DuyetUngVien -> duyetungvien();
} else if ($_POST["type"]=="1"){
    $DuyetUngVien ->yeucautuyendung();
} else if ($_POST["type"]=="2"){
    $DuyetUngVien ->dongyduyet($_POST["idcongty"]);
} else if ($_POST["type"]=="3"){
    $DuyetUngVien ->tuchoiduyet($_POST["idcongty"]);
}