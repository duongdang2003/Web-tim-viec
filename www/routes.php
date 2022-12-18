<?php
session_start();
if (isset($_GET["timviec"])){
    if(isset($_SESSION["user"]) && $_SESSION["user"]=="dadangnhap"){
        header("Location: index.php#showJob");
    }else{
        header("Location: ./src/Controllers/C_SignIn.php");
    }
} else
if (isset($_GET["dangviec"])){ //admin
    if(isset($_SESSION["user"]) && $_SESSION["user"]=="dadangnhap"){
        header("Location: ./src/Views/admin/dviec.php");
    }else{
        header("Location: ./src/Controllers/C_SignIn.php");
    }
} else
if (isset($_GET["taocv"])){
    if(isset($_SESSION["user"]) && $_SESSION["user"]=="dadangnhap"){
        Header("location: https://duongdang2003.github.io/Web-cv-icon/");
    }else{
        header("Location: ./src/Controllers/C_SignIn.php");
    }
} else
if (isset($_GET["ungtuyenngay"])){ //client + admin
    if(isset($_SESSION["user"]) && $_SESSION["user"]=="dadangnhap"){
        include("./src/Controllers/C_UngTuyenNgay.php");
        if ($_SESSION["who"]=='Client'){
            $UngTuyenNgay = new UngTuyenNgay();
            $res = $UngTuyenNgay -> ungtuyenngay($_GET["ungtuyenngay"]);
            if ($res ==1){
                header("Location: ./src/Views/user/congviecduocmoi.php#yeucautuyendung");
            } else header("Location: index.php");
        } else{
            $UngTuyenNgay = new UngTuyenNgay();
            $res = $UngTuyenNgay -> tuyenngay($_GET["ungtuyenngay"]);
            if ($res ==1){
                header("Location: ./src/Views/admin/duyetungvien.php#yeucautuyendung");
            } else header("Location: index.php");
        }
    }else{
        header("Location: ./src/Controllers/C_SignIn.php");
    }
} else
if (isset($_GET["yeuthich"])){//client + admin
    if(isset($_SESSION["user"]) && $_SESSION["user"]=="dadangnhap"){
        include("./src/Controllers/C_SendLike.php");
        if ($_SESSION["who"]=='Client'){
            $SendLike = new SendLike();
            $res = $SendLike -> sendlike($_GET["yeuthich"]);
            if ($res ==1){
                header("Location: ./src/Views/user/congviecdathich.php");
            } else header("Location: index.php");
        } else{
            $SendLike = new SendLike();
            $res = $SendLike -> sendlikeByAdmin($_GET["yeuthich"]);
            if ($res ==1){
                header("Location: ./src/Views/admin/nguoitimviecdathich.php");
            } else header("Location: index.php");
        }
    }else{
        header("Location: ./src/Controllers/C_SignIn.php");
    }
}