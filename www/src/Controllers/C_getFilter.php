<?php
header("Content-type: text/html; charset=utf-8");
class getFilter
{
    public function showListFilter(){
        require_once("../Models/Model_Filter.php");
        $Model_Filter = new Model_Filter();
        $filters = $Model_Filter -> showListFilter();
        while ($r = $filters->fetch_assoc())
        {
            $data[] = ["thanhpho"=>$r["thanhpho"],"luong"=>$r["luong"],"loaicongviec"=>$r["loaicongviec"],"linhvuc"=>$r["linhvuc"]];
        }
        echo json_encode($data);
    }
    public function showListFilterAdmin(){
        require_once("../Models/Model_Filter.php");
        $Model_Filter = new Model_Filter();
        $filters = $Model_Filter -> showListFilterAdmin();
        while ($r = $filters->fetch_assoc())
        {
            $data[] = ["thanhpho"=>$r["thanhpho"],"loaicongviec"=>$r["loaicongviec"],"linhvuc"=>$r["linhvuc"]];
        }
        echo json_encode($data);
    }
    public function getFilterFromUser($linhvuc,$luong,$loaicongviec,$thanhpho){
        require_once("../Models/Model_Filter.php");
        $Model_Filter = new Model_Filter();
        $filters = $Model_Filter->getFilterFromUser($linhvuc,$luong,$loaicongviec,$thanhpho);
        $data = array();
        while ($r = $filters->fetch_assoc())
        {
            $data[] = ["id"=>$r["ID_BaiDang"],"TenCongTy"=>$r["TenCongTy"],"motacongviec"=>$r["motacongviec"],"thanhpho"=>$r["thanhpho"],"tencongviec"=>$r["tencongviec"],"luong"=>$r["luong"],"chucvu"=>$r["chucvu"],"yeucaubangcap"=>$r["yeucaubangcap"],"thoihan"=>$r["thoihan"],"yeucaucongviec"=>$r["yeucaucongviec"],"quyenloi"=>$r["quyenloi"],"linhvuc"=>$r["linhvuc"],"soluongtuyendung"=>$r["soluongtuyendung"],"linkava"=>$r["linkava"],"loaicongviec"=>$r["loaicongviec"],"tagkinang"=>$r["tagkinang"]];
        }
        echo json_encode($data);
    }
    public function getFilterFromAdmin($linhvuc,$loaicongviec,$thanhpho){
        require_once("../Models/Model_Filter.php");
        $Model_Filter = new Model_Filter();
        $filters = $Model_Filter->getFilterFromAdmin($linhvuc,$loaicongviec,$thanhpho);
        $data = array();
        while ($r = $filters->fetch_assoc())
        {
            $data[] = ["thanhpho"=>$r["thanhpho"],"loaicongviec"=>$r["loaicongviec"],"id" => $r["ID_user"],"hoten" => $r["hoten"], "linkava" => $r["linkava"],"congviec" => $r["congviec"],"ngaysinh" => $r["ngaysinh"],"gioitinh" => $r["gioitinh"],"linhvuc" => $r["linhvuc"],"diachi" => $r["diachi"],"muctieunghenghiep" => $r["muctieunghenghiep"],"hocvan" => $r["hocvan"],"kinang" => $r["kinang"],"kinhnghiemlamviec" => $r["kinhnghiemlamviec"],"chitiet" => $r["chitiet"],"tagkinang" => $r["tagkinang"],"sdt" => $r["sdt"],"email" => $r["email"]];
        }
        echo json_encode($data);
    }
    public function searchFilterFromUser($timkiem,$thanhpho){
        require_once("../Models/Model_Filter.php");
        $Model_Filter = new Model_Filter();
        $filters = $Model_Filter->searchFilterFromUser($timkiem,$thanhpho);
        $data = array();
        while ($r = $filters->fetch_assoc())
        {
            $data[] = ["id"=>$r["ID_BaiDang"],"TenCongTy"=>$r["TenCongTy"],"motacongviec"=>$r["motacongviec"],"thanhpho"=>$r["thanhpho"],"tencongviec"=>$r["tencongviec"],"luong"=>$r["luong"],"chucvu"=>$r["chucvu"],"yeucaubangcap"=>$r["yeucaubangcap"],"thoihan"=>$r["thoihan"],"yeucaucongviec"=>$r["yeucaucongviec"],"quyenloi"=>$r["quyenloi"],"linhvuc"=>$r["linhvuc"],"soluongtuyendung"=>$r["soluongtuyendung"],"linkava"=>$r["linkava"],"loaicongviec"=>$r["loaicongviec"],"tagkinang"=>$r["tagkinang"]];
        }
        echo json_encode($data);
    }
    public function searchFilterFromAdmin($timkiem,$thanhpho){
        require_once("../Models/Model_Filter.php");
        $Model_Filter = new Model_Filter();
        $filters = $Model_Filter->searchFilterFromAdmin($timkiem,$thanhpho);
        $data = array();
        while ($r = $filters->fetch_assoc())
        {
            $data[] = ["thanhpho"=>$r["thanhpho"],"loaicongviec"=>$r["loaicongviec"],"id" => $r["ID_user"],"hoten" => $r["hoten"], "linkava" => $r["linkava"],"congviec" => $r["congviec"],"ngaysinh" => $r["ngaysinh"],"gioitinh" => $r["gioitinh"],"linhvuc" => $r["linhvuc"],"diachi" => $r["diachi"],"muctieunghenghiep" => $r["muctieunghenghiep"],"hocvan" => $r["hocvan"],"kinang" => $r["kinang"],"kinhnghiemlamviec" => $r["kinhnghiemlamviec"],"chitiet" => $r["chitiet"],"tagkinang" => $r["tagkinang"],"sdt" => $r["sdt"],"email" => $r["email"]];
        }
        echo json_encode($data);
    }
}
$getFilter = new getFilter();
if ($_POST["type"]=="1"){
    $getFilter -> showListFilter();
} else if ($_POST["type"]=="2"){
    $getFilter -> getFilterFromUser($_POST["linhvuc"],$_POST["luong"],$_POST["loaicongviec"],$_POST["thanhpho"]);
} else if ($_POST["type"]=="3"){
    $getFilter -> searchFilterFromUser($_POST["timkiem"],$_POST["thanhpho"]);
} else if ($_POST["type"]=="4"){
    $getFilter -> showListFilterAdmin();
} else if ($_POST["type"]=="5"){
    $getFilter -> getFilterFromAdmin($_POST["linhvuc"],$_POST["loaicongviec"],$_POST["thanhpho"]);
} else {
    $getFilter -> searchFilterFromAdmin($_POST["timkiem"],$_POST["thanhpho"]);
}
