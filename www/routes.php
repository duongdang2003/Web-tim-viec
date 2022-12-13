<?php
if (isset($_GET["timviec"])){
    echo 1;
} else
if (isset($_GET["dangviec"])){
    echo 2;
} else
if (isset($_GET["taocv"])){
    echo 3;
} else
if (isset($_GET["search-main"])){
    echo 4;
} else
if (isset($_GET["ungtuyenngay"])){
    echo 5;
} else
if (isset($_GET["yeuthich"])){
    echo 6;
}