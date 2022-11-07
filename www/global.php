<?php
session_start();
if (!isset($_SESSION['diem']))
    $_SESSION['diem'] = 0;
if (true) {
    $a =1;
    $b=2;
    $ope = rand(1,4);
    $res;
    if ($ope == 1)
    $res ='+'
    else if ($ope == 2)
    $res = '-'else if($ope ==2)
    $res = '*'
    else $res = '/'
    
}
?>