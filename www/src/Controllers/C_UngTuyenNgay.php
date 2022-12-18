<?php
class UngTuyenNgay
{
    public function ungtuyenngay($idbaidang)
    {
        require("./src/Models/Model_UngTuyenNgay.php");
        $Model_UngTuyenNgay = new Model_UngTuyenNgay();
        $res = $Model_UngTuyenNgay->ungTuyenNgay($_SESSION["IDUser"], $idbaidang);
        return $res;
    }
    public function tuyenngay($iduser)
    {
        require("./src/Models/Model_UngTuyenNgay.php");
        $Model_UngTuyenNgay = new Model_UngTuyenNgay();
        $res = $Model_UngTuyenNgay->tuyenNgay($_SESSION["IDUser"], $iduser);
        return $res;
    }
}
