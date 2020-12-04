<?php
    session_start();
    include "../../../lib/DataProvider.php";

    if(isset($_POST["search-DDH"]))
    {
        $S = $_POST["search-DDH"];      

       
        $sql = "SELECT d.MaDonDatHang,d.NgayLap,d.MaTinhTrang,t.TenHienThi,tt.TenTinhTrang
                FROM DonDatHang d,TaiKhoan t,TinhTrang tt
                WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang
                AND d.MaDonDatHang like concat('%' , '$S' , '%') ";
               
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if($row == null)
            DataProvider::ChangeURL("../../index.php?c=5&a=5");
        else
        {
            $_SESSION["MaDonDatHang"] = $row["MaDonDatHang"];
            $_SESSION["NgayLap"] = $row["NgayLap"];          
            $_SESSION["MaTinhTrang"] = $row["MaTinhTrang"];
            $_SESSION["TenHienThi"]=$row["TenHienThi"];
            $_SESSION["TenTinhTrang"]=$row["TenTinhTrang"];
            DataProvider::ChangeURL("../../index.php?c=5&a=4");
        }
    }
    else
        DataProvider::ChangeURL("../../index.php?c=5&a=5");
?>