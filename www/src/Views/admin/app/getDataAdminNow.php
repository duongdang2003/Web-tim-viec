<?php
// session_start();
function returnAll($id)
{
    require("../../connection.php");
    $sql = $conn->query("SELECT * FROM CongTy INNER JOIN Admin 
        ON CongTy.ID_CongTy = Admin.ID_CongTy
        WHERE CongTy.ID_CongTy = '$id';");
    if ($sql) {
        $data = array();
        while ($r = $sql->fetch_assoc()) {
            $data[] = ["phucloi" => $r["phucloi"],"linhvuc" => $r["linhvuc"],"linkava" => $r["linkava"],"motacongty" => $r["motacongty"],"website" => $r["website"],"diachi" => $r["diachi"],"TenCongTy" => $r["TenCongTy"],"thanhpho" => $r["thanhpho"], "sdt" => $r["sdt"], "email" => $r["email"]];
        }
    } else {
        die("Can't get job from database");
    }
    return $data[0];
}
$data = returnAll($_SESSION["IDUser"]);
?>