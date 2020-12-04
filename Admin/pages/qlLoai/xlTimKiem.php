<?php
    session_start();
    include "../../../lib/DataProvider.php";

    if(isset($_POST["search-LSP"]))
    {
        $S = $_POST["search-LSP"];      

       
        $sql = "SELECT * FROM LoaiSanPham
                Where TenLoaiSanPham like concat('%' , '$S' , '%') ";
        
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if($row == null)
            DataProvider::ChangeURL("../../index.php?c=3&a=5");
        else
        {
            $_SESSION["MaLoaiSanPham"] = $row["MaLoaiSanPham"];
            $_SESSION["TenLoaiSanPham"] = $row["TenLoaiSanPham"];          
            $_SESSION["BiXoa"] = $row["BiXoa"];
            DataProvider::ChangeURL("../../index.php?c=3&a=4");
        }
    }
    else
        DataProvider::ChangeURL("../../index.php?c=3&a=5");
?>