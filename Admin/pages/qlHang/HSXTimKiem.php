<table cellspacing="0" border="1">
    <tr>      
        <th width="300">Tên hãng sản xuất</th>
        <th width="100">Tình trạng</th>
        <th width="100">Thao tác</th>
    </tr>
    <tr>       
        <td><?php echo $_SESSION["TenHangSanXuat"]; ?></td>
        <td>
            <?php
                if($_SESSION["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
            ?>
        </td>
        <td>
            <a href="pages/qlHang/xlXoa.php?id=<?php echo $_SESSION["MaHangSanXuat"] ?>">
                <img src="images/lock.png" />
            </a>
            <a href="index.php?c=4&a=2&id=<?php echo $_SESSION["MaHangSanXuat"] ?>">
                <img src="images/edit.png" />
            </a>
        </td>
    </tr> 
</table> 