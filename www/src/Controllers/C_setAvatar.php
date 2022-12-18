<?php
session_start();
if (!empty($_FILES)) {
    if (isset($_FILES['avatar']['tmp_name'])) {
        $sourcePath = $_FILES['avatar']['tmp_name'];
        if ($_SESSION["who"] == 'Admin') {
            $targetPath = "../../src/assets/Images/avaAdmin/" . $_FILES['avatar']['name'];
        } else {
            $targetPath = "../../src/assets/Images/avaClient/" . $_FILES['avatar']['name'];
        }
        $target_dir = "./";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (file_exists($target_file)) {
            header("Location: ../../../index.php");
            $uploadOk = 2;
        }
        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 0;;
        } else {
            header("Location: ../../../index.php");
            $uploadOk = 1;
        }
        if ($_FILES["avatar"]["size"] > 1024 * 1024 * 1024) {
            header("Location: ../../../index.php");
            $uploadOk = 3;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpge") {
            header("Location: ../../../index.php");
            $uploadOk = 4;
        }
        if ($uploadOk == 0) {
            if (move_uploaded_file($sourcePath, $targetPath)) {
                if ($_SESSION["who"] == 'Admin')
                    changeAvatarAdmin($targetPath);
                else changeAvatarClient($targetPath);
                header("Location: ../../../src/Views/admin/pageinfoAdmin.php");
            } else {
                header("Location: ../../../index.php");
            }
        } else {
            header("Location: ../../../index.php");
        }
    }
} else die("Không thể up ảnh ngay lúc này");

function changeAvatarAdmin($linkava)
{
    require("../connection.php");
    mysqli_set_charset($conn, 'UTF-8');
    $idcongty = $_SESSION['IDUser'];
    $sql = $conn->query("
        UPDATE CongTy
        set linkava= '../$linkava'
        where ID_CongTy = '$idcongty';
    ");
    if ($sql)
        header("Location: ../../../src/Views/admin/pageinfoAdmin.php");
    else {
        header("Location: ../../../index.php");
    }
}
function changeAvatarClient($linkava)
{
    require("../connection.php");
    mysqli_set_charset($conn, 'UTF-8');
    $iduser = $_SESSION['IDUser'];
    $sql = $conn->query("
        UPDATE NguoiTimViec
        set linkava= '../$linkava'
        where ID_user = '$iduser';
    ");
    if ($sql)
        header("Location: ../../../src/Views/admin/pageinfoAdmin.php");
    else {
        header("Location: ../../../index.php");
    }
}