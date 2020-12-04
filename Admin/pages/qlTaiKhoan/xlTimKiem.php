<?php
    session_start();
    include "../../../lib/DataProvider.php";

    if(isset($_POST["search-TK"]))
    {
        $S = $_POST["search-TK"];      

        $sql = "SELECT t.MaTaiKhoan,t.TenDangNhap,t.TenHienThi,t.DiaChi,
        t.DienThoai,t.Email,t.BiXoa,l.TenLoaiTaiKhoan 
        from TaiKhoan t,LoaiTaiKhoan l
        where BiXoa = 0 and t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan
        and TenDangNhap like concat('%' , '$S' , '%') or TenHienThi like concat('%' , '$S' , '%')";
        
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if($row == null)
            DataProvider::ChangeURL("../../index.php?c=1&a=4");
        else
        {
            $_SESSION["MaTaiKhoan"] = $row["MaTaiKhoan"];
            $_SESSION["TenDangNhap"] = $row["TenDangNhap"];
            $_SESSION["TenHienThi"] = $row["TenHienThi"];
            $_SESSION["DiaChi"]=$row["DiaChi"];
            $_SESSION["DienThoai"] = $row["DienThoai"];
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["BiXoa"] = $row["BiXoa"];
            $_SESSION["TenLoaiTaiKhoan"] = $row["TenLoaiTaiKhoan"];     
            DataProvider::ChangeURL("../../index.php?c=1&a=3");
        }
    }
    else
        DataProvider::ChangeURL("../../index.php?c=1&a=4");
?>