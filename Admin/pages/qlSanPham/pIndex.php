<h1>Quản lý sản phẩm</h1>
<?php
    $a = 1;
    if(isset($_GET["a"]))
        $a = $_GET["a"];

    switch($a){
        case 1:
            include "pages/qlSanPham/pDanhSach.php";
            break;
        case 2:
            include "pages/qlSanPham/pCapNhat.php";
            break;
        case 3:
            include "pages/qlSanPham/pThemMoi.php";
            break;   
        case 4:
            include "pages/qlSanPham/SPTimKiem.php";
            break;
        case 5:
            include "pages/qlSanPham/pErrorSP.php";
            break;
        default:
            include "pages/pError.php";
            break;
    }
?>