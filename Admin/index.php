<?php
    session_start();
    include "../lib/DataProvider.php";

    if(!isset($_SESSION["MaLoaiTaiKhoan"]) || $_SESSION["MaLoaiTaiKhoan"] != 2)
        DataProvider::ChangeURL("../index.php");
    $c = 0;
    if(isset($_GET["c"]))
        $c = $_GET["c"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Phân hệ quản lý</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
        <style>
            <?php include "css/admin.css"; ?>
        </style>
    </head>
    <body>
        <div id="header">
            <a href="../Admin/index.php">
                Hệ thống quản lý sản phẩm BabyShop
            </a>
        </div>
        <div id="menu">
            <?php
                include "../Admin/modules/mMenu.php";
                include "../Admin/modules/mLogin.php";
            ?>
        </div>
        <div id="content">
            <?php
                switch($c){
                    case 0:
                        include "../Admin/pages/pIndex.php";
                        break;
                    case 1:
                        include "../Admin/pages/qlTaiKhoan/pIndex.php";
                        break;
                    case 2:
                        include "../Admin/pages/qlSanPham/pIndex.php";
                        break;
                    case 3:
                        include "../Admin/pages/qlLoai/pIndex.php";
                        break;
                    case 4:
                        include "../Admin/pages/qlHang/pIndex.php";
                        break;
                    case 5:
                        include "../Admin/pages/qlDonDatHang/pIndex.php";
                        break;
                    default:
                        include "../Admin/pages/pError.php";
                        break;
                }
            ?>
        </div>
        <div id="footer">
                &copy; Design by student of FIT - HCMUS
        </div>
    </body>
</html>