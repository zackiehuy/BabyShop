<?php
    session_start();
    include "../../../lib/DataProvider.php";

    if(isset($_POST["search-HSX"]))
    {
        $S = $_POST["search-HSX"];      

       
        $sql = "SELECT * FROM HangSanXuat
                Where TenHangSanXuat like concat('%' , '$S' , '%') ";
        
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);

        if($row == null)
            DataProvider::ChangeURL("../../index.php?c=4&a=5");
        else
        {
            $_SESSION["MaHangSanXuat"] = $row["MaHangSanXuat"];
            $_SESSION["TenHangSanXuat"] = $row["TenHangSanXuat"];          
            $_SESSION["BiXoa"] = $row["BiXoa"];
            DataProvider::ChangeURL("../../index.php?c=4&a=4");
        }
    }
    else
        DataProvider::ChangeURL("../../index.php?c=4&a=5");
?>