<?php
    session_start();
    include "lib/DataProvider.php";
    
    $_SESSION["path"] = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Website BabyShop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        <?php include "css/style.css"; ?>
    </style>
</head>
<body>
    <div id="wrapper">
        <?php
            include "modules/mHeader.php";
            include "modules/mSidebar.php";
        ?>
        
        <div id="content">
            <?php
                $a = 1;
                if(isset($_GET["a"]) == true)
                    $a = $_GET["a"];

                switch($a){
                    case 1:
                        include "pages/pIndex.php";
                        break;
                    case 2:
                        include "pages/pSanPhamTheoHang.php";
                        break;
                    case 3:
                        include "pages/pSanPhamTheoLoai.php";
                        break;
                    case 4:
                        include "pages/pChiTiet.php";
                        break;
                    case 5:
                        include "pages/GioHang/pIndex.php";
                        break;
                    case 6:
                        include "pages/TaoTaiKhoan/pIndex.php";
                        break;
                    case 7:
                        include "pages/TimKiem/pIndex.php";
                        break;
                    default:
                        include "pages/pError.php";
                        break;
                }    
            ?>
        </div>
        <?php include "modules/mFooter.php"; ?>
    </div>
</body>
</html>