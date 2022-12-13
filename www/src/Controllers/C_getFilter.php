<?php
header("Content-type: text/html; charset=utf-8");
class getFilter
{
    public function showListFilter(){
        require_once("../Models/Model_Filter.php");

    }
    public function getFilterFromUser($linhvuc,$luong,$loaicongviec,$thanhpho){
        require_once("../Models/Model_Filter.php");

    }
    public function searchFilterFromUser($timkiem,$thanhpho){
        require_once("../Models/Model_Filter.php");

    }
}
$getFilter = new getFilter();
if ($_POST["type"]=="1"){
    $getFilter -> showListFilter();
} else if ($_POST["type"]=="2"){
    $getFilter -> getFilterFromUser($_POST["linhvuc"],$_POST["luong"],$_POST["loaicongviec"],$_POST["thanhpho"]);
} else {
    $getFilter -> searchFilterFromUser($_POST["timkiem"],$_POST["thanhpho"]);
}
