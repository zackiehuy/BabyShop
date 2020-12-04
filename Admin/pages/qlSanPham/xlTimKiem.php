<?php
    session_start();
    include "../../../lib/DataProvider.php";

    if(isset($_POST["search-SP"]))
    {
        $S = $_POST["search-SP"];      

       
        $sql = "SELECT s.MaSanPham,s.TenSanPham,s.HinhURL,s.GiaSanPham,s.NgayNhap,s.SoLuongTon,s.SoLuongBan,
                s.SoLuocXem,s.MoTa,s.BiXoa,l.TenLoaiSanPham,h.TenHangSanXuat
                FROM SanPham s,LoaiSanPham l,HangSanXuat h
                WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat 
                and TenSanPham like concat('%' , '$S' , '%') ";
        
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if($row == null)
            DataProvider::ChangeURL("../../index.php?c=2&a=5");
        else
        {
            $_SESSION["MaSanPham"] = $row["MaSanPham"];
            $_SESSION["TenSanPham"] = $row["TenSanPham"];
            $_SESSION["HinhURL"] = $row["HinhURL"];
            $_SESSION["GiaSanPham"]=$row["GiaSanPham"];
            $_SESSION["NgayNhap"] = $row["NgayNhap"];
            $_SESSION["SoLuongTon"] = $row["SoLuongTon"];
            $_SESSION["SoLuongBan"] = $row["SoLuongBan"];
            $_SESSION["SoLuocXem"] = $row["SoLuocXem"];     
            $_SESSION["MoTa"] = $row["MoTa"];
            $_SESSION["BiXoa"] = $row["BiXoa"];
            $_SESSION["TenLoaiSanPham"] = $row["TenLoaiSanPham"];
            $_SESSION["TenHangSanXuat"] = $row["TenHangSanXuat"];
            DataProvider::ChangeURL("../../index.php?c=2&a=4");
        }
    }
    else
        DataProvider::ChangeURL("../../index.php?c=2&a=5");
?>