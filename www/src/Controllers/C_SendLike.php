<?php
class SendLike{
    public function sendlike($idbaidang){
        require("./src/Models/Model_SendLike.php");
        $Model_SendLike = new Model_SendLike();
        $res = $Model_SendLike->sendlike($_SESSION["IDUser"], $idbaidang);
        return $res;
    }
    public function sendlikeByAdmin($iduser){
        require("./src/Models/Model_SendLike.php");
        $Model_SendLike = new Model_SendLike();
        $res = $Model_SendLike->sendlikeByAdmin($_SESSION["IDUser"], $iduser);
        return $res;
    }
}