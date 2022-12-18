<?php
class like{
    public function getSaveCT(){
        session_start();
        require_once("../Models/Model_Like.php");
        $Model_Like = new Model_Like();
        $res = $Model_Like -> getSaveCT($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["idcongty"=>$r["ID_CongTy"],"id"=>$r["ID_BaiDang"],"TenCongTy"=>$r["TenCongTy"],"linkava"=>$r["linkava"],"thanhpho"=>$r["thanhpho"],"tencongviec"=>$r["tencongviec"],"luong"=>$r["luong"],"loaicongviec"=>$r["loaicongviec"],"tagkinang"=>$r["tagkinang"],"thoihan"=>$r["thoihan"]];
        }
        echo json_encode($data);
    }
    public function getSaveNTV(){
        session_start();
        require_once("../Models/Model_Like.php");
        $Model_Like = new Model_Like();
        $res = $Model_Like -> getSaveNTV($_SESSION["IDUser"]);
        $data = array();
        while ($r = $res->fetch_assoc())
        {
            $data[] = ["ID_user"=>$r["ID_user"],"linkava"=>$r["linkava"],"hoten"=>$r["hoten"],"congviec"=>$r["congviec"],"loaicongviec"=>$r["loaicongviec"],"tagkinang"=>$r["tagkinang"],"thanhpho"=>$r["thanhpho"]];
        }
        echo json_encode($data);
    }
}
$like = new Like();
if ($_POST["type"]=="0"){
    $like -> getSaveCT();
} else{
    $like -> getSaveNTV();
}