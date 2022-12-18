<?php
class Model_Filter
{
    public function showListFilter()
    {
        require("../connection.php");
        $sql = $conn->query("SELECT CongTy.thanhpho,DangViec.luong,DangViec.loaicongviec,DangViec.linhvuc from `CongTy` INNER JOIN DangViec ON CongTy.ID_CongTy = DangViec.ID_CongTy;");
        if ($sql)
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function showListFilterAdmin()
    {
        require("../connection.php");
        $sql = $conn->query("SELECT linhvuc,loaicongviec,thanhpho
         from `NguoiTimViec`;");
        if ($sql)
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getFilterFromUser($linhvuc, $luong, $loaicongviec, $thanhpho)
    {
        require("../connection.php");
        $luongele = "and DangViec.luong = '$luong'";
        if ($luong == -1) $luongele = "";
        $loaicongviecele = "and DangViec.loaicongviec = '$loaicongviec'";
        if ($loaicongviec == -1) $loaicongviecele = "";
        $sql = $conn->query("SELECT DangViec.ID_BaiDang,
        CongTy.TenCongTy,CongTy.linkava,CongTy.thanhpho,DangViec.tencongviec,
        DangViec.luong,DangViec.loaicongviec,DangViec.motacongviec,DangViec.tagkinang,
        DangViec.chucvu,DangViec.thoihan,DangViec.yeucaubangcap,DangViec.quyenloi,
        DangViec.yeucaucongviec,DangViec.soluongtuyendung,DangViec.linhvuc
        from `CongTy` INNER JOIN DangViec 
        ON CongTy.ID_CongTy = DangViec.ID_CongTy 
        where DangViec.linhvuc like '%$linhvuc%' $luongele
        $loaicongviecele and CongTy.thanhpho like '%$thanhpho%';
        ");
        if ($sql)
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function getFilterFromAdmin($linhvuc, $loaicongviec, $thanhpho)
    {
        require("../connection.php");
        $loaicongviecele = "and loaicongviec = '$loaicongviec'";
        if ($loaicongviec == -1) $loaicongviecele = "";
        $sql = $conn->query("SELECT * FROM NguoiTimViec INNER JOIN Client
        ON NguoiTimViec.ID_user = Client.ID_user
        where linhvuc like '%$linhvuc%'
        $loaicongviecele and thanhpho like '%$thanhpho%';
        ");
        if ($sql)
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function searchFilterFromAdmin($timkiem,$thanhpho)
    {
        require("../connection.php");
        $gioitinh = $timkiem == "Nam"?"1":"0";
        if ($timkiem == "Toàn thời gian")
        $loaicongviec = "1";
        else $loaicongviec = "0";
        $sql = $conn->query("SELECT * FROM NguoiTimViec INNER JOIN Client
        ON NguoiTimViec.ID_user = Client.ID_user
        where (hoten like '%$timkiem%' 
        or congviec like '%$timkiem%'
        or gioitinh like '%$gioitinh%'
        or loaicongviec like '%$loaicongviec%'
        or linhvuc like '%$timkiem%'
        or diachi like '%$timkiem%'
        or muctieunghenghiep like '%$timkiem%'
        or hocvan like '%$timkiem%'
        or kinang like '%$timkiem%'
        or kinhnghiemlamviec like '%$timkiem%'
        or tagkinang like '%$timkiem%'
        )and thanhpho like '%$thanhpho%'
        ;");
        if ($sql)
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
    public function searchFilterFromUser($timkiem,$thanhpho)
    {
        require("../connection.php");
        $sql = $conn->query("SELECT DangViec.ID_BaiDang,
        CongTy.TenCongTy,CongTy.linkava,CongTy.thanhpho,DangViec.tencongviec,
        DangViec.luong,DangViec.loaicongviec,DangViec.motacongviec,DangViec.tagkinang,
        DangViec.chucvu,DangViec.thoihan,DangViec.yeucaubangcap,DangViec.quyenloi,
        DangViec.yeucaucongviec,DangViec.soluongtuyendung,DangViec.linhvuc
        from `CongTy` INNER JOIN DangViec 
        ON CongTy.ID_CongTy = DangViec.ID_CongTy 
        where (DangViec.linhvuc like '%$timkiem%' 
        or CongTy.TenCongTy like '%$timkiem%'
        or DangViec.tencongviec like '%$timkiem%'
        or DangViec.luong like '%$timkiem%'
        or DangViec.motacongviec like '%$timkiem%'
        or DangViec.tagkinang like '%$timkiem%'
        or DangViec.chucvu like '%$timkiem%'
        or DangViec.yeucaubangcap like '%$timkiem%'
        or DangViec.quyenloi like '%$timkiem%'
        or DangViec.yeucaucongviec like '%$timkiem%'
        or DangViec.linhvuc like '%$timkiem%'
        )and CongTy.thanhpho like '%$thanhpho%'
        ;");
        if ($sql)
            return $sql;
        else {
            die("Can't get job from database");
        }
    }
}
