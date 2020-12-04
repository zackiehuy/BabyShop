<?php
    $sub = 1;
    if(isset($_GET["sub"]))
        $sub = $_GET["sub"];   

    switch($sub){
        case 1:
            include "pages/TimKiem/pDanhSachTK.php";
            break;
        case 2:
            include "pages/TimKiem/ThongBao.php";
            break;
    }
?>