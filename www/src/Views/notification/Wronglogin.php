<?php
    class Wronglogin{
        function printError($display,$content){
            // echo "<h3 style='diplay:$display;position: relative;z-index:100;' class='text-center text-uppercase align-center text-white'>$content</h3>";
            echo "<div style='opacity:0.1;font-size:initial;diplay:$display;position: absolute;bottom:5px;right:5px;z-index:100;opacity:1;' class='m-0 toast' >
            <div class='toast-header text-dark'>Thông báo</div>
            <div class='toast-body bg-primary text-white'>
                $content
            </div>
          </div>";
        }
    }
?>