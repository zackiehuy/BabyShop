<table cellspacing="0" border="1">
    <tr>        
        <th width="150">Mã đơn đặt hàng</th>
        <th width="100">Ngày lập</th>
        <th width="200">Khách hàng</th>
        <th width="100">Tình trạng</th>
        <th width="100">Thao tác</th>
    </tr>
    <?php
        $c = "";
        switch($_SESSION["MaTinhTrang"])
        {
            case 2:
                $c = "classGiaoHang";
                break;
            case 3:
                $c = "classThanhToan";
                break;
            case 4:
                $c = "classHuy";
                 break;
        }
    ?>
    <tr class="<?php echo $c; ?>">       
        <td><?php echo $_SESSION["MaDonDatHang"]; ?></td>
        <td><?php echo $_SESSION["NgayLap"]; ?></td>
        <td><?php echo $_SESSION["TenHienThi"]; ?></td>
        <td><?php echo $_SESSION["TenTinhTrang"]; ?></td>
        <td>
            <a href="index.php?c=5&a=2&id=<?php echo $_SESSION["MaDonDatHang"] ?>">
                <img src="images/edit.png" />
            </a>
        </td>
    </tr>
</table>