<?php
class DuyetCongViec{
    public function congviecduocmoi(){
        session_start();
        require_once("../Models/Model_DuyetCongViec.php");
        $Model_DuyetCongViec = new Model_DuyetCongViec();
        $res = $Model_DuyetCongViec -> duyetcongviec($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["ID_CongTy"=>$r["ID_CongTy"],"TenCongTy"=>$r["TenCongTy"],"daduyet"=>$r["daduyet"],"linkava"=>$r["linkava"]];
        }
        echo json_encode($data);
    }
    public function yeucautuyendung(){
        session_start();
        require_once("../Models/Model_DuyetCongViec.php");
        $Model_DuyetCongViec = new Model_DuyetCongViec();
        $res = $Model_DuyetCongViec -> yeucautuyendung($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["ID_CongTy"=>$r["ID_CongTy"],"ID_BaiDang"=>$r["ID_BaiDang"],"TenCongTy"=>$r["TenCongTy"],"daduyet"=>$r["daduyet"],"linkava"=>$r["linkava"],"tencongviec"=>$r["tencongviec"],"maungtuyen"=>$r["maungtuyen"]];
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
$DuyetCongViec = new DuyetCongViec();
if ($_POST["type"]=="0"){
    $DuyetCongViec -> congviecduocmoi();
} else if ($_POST["type"]=="1"){
    $DuyetCongViec ->yeucautuyendung();
} else if ($_POST["type"]=="2"){
    $DuyetCongViec ->dongyduyet($_POST["idcongty"]);
} else if ($_POST["type"]=="3"){
    $DuyetCongViec ->tuchoiduyet($_POST["idcongty"]);
}