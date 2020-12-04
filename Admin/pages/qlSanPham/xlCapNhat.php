<?php
    include "../../../lib/DataProvider.php";

    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $ten = $_GET["txtTen"];
        $hang = $_GET["cmbHang"];
        $loai = $_GET["cmbLoai"];
        $hinh = $_GET["fhinh"];
        $gia = $_GET["txtGia"];
        $ton = $_GET["txtTon"];
        $ban = $_GET["txtBan"];
        $mota = $_GET["txtMoTa"];
        $sql = "UPDATE SanPham SET TenSanPham = '$ten', MaHangSanXuat = $hang, MaLoaiSanPham = $loai,
                 HinhURL = '$hinh',GiaSanPham = $gia,SoLuongTon = $ton,SoLuongBan = $ban,MoTa = '$mota'
        WHERE MaSanPham = $id";

        DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL("../../index.php?c=2");
?>