<?php
header("Content-type: text/html; charset=utf-8");
    class GetJob{
        public function getjob(){
            require_once("../Models/Model_GetJob.php");
            $Model_GetJob = new Model_GetJob();
            $jobs = $Model_GetJob -> getJob();
            $data = array();
            while ($r = $jobs->fetch_assoc())
            {
                $data[] = ["id"=>$r["ID_BaiDang"],"TenCongTy"=>$r["TenCongTy"],"linkava"=>$r["linkava"],"thanhpho"=>$r["thanhpho"],"tencongviec"=>$r["tencongviec"],"luong"=>$r["luong"],"loaicongviec"=>$r["loaicongviec"],"tagkinang"=>$r["tagkinang"],"thoihan"=>$r["thoihan"]];
            }
            echo json_encode($data);
        }
        public function getDetailJob($id){
            require_once("../Models/Model_GetJob.php");
            $Model_GetJob = new Model_GetJob();
            $jobs = $Model_GetJob -> getDeitalJob($id);
            $data = array();
            while ($r = $jobs->fetch_assoc())
            {
                $data[] = ["id"=>$r["ID_BaiDang"],"TenCongTy"=>$r["TenCongTy"],"motacongviec"=>$r["motacongviec"],"thanhpho"=>$r["thanhpho"],"tencongviec"=>$r["tencongviec"],"luong"=>$r["luong"],"chucvu"=>$r["chucvu"],"yeucaubangcap"=>$r["yeucaubangcap"],"thoihan"=>$r["thoihan"],"yeucaucongviec"=>$r["yeucaucongviec"],"quyenloi"=>$r["quyenloi"],"linhvuc"=>$r["linhvuc"],"soluongtuyendung"=>$r["soluongtuyendung"]];
            }
            echo json_encode($data);
        }
    }
    $GetJob = new GetJob();
    if ($_POST["type"]=="0"){
        $GetJob -> getJob();
    } else $GetJob -> getDetailJob($_POST["idbaidang"]);
?>