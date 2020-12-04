<a href="index.php?c=3&a=3">
    <img src="images/new.png" />
</a>
<div id="search-loaisanpham">
    <form class="searchform" name="frmSearch" action="pages/qlLoai/xlTimKiem.php" method="post" >
        <input type="text" placeholder="Search.." name="search-LSP" id="search-LSP"  size="12" maxlength="20" width="15">    
        <button type="submit">Search</button>
    </form>
</div>
<table cellspacing="0" border="1">
    <tr>
        <th width="100">STT</th>
        <th width="300">Tên loại sản phẩm</th>
        <th width="100">Tình trạng</th>
        <th width="100">Thao tác</th>
    </tr>
    <?php
        $sql = "SELECT * FROM LoaiSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        $i = 1;
        while($row = mysqli_fetch_array($result))
        {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["TenLoaiSanPham"]; ?></td>
                    <td>
                        <?php
                            if($row["BiXoa"] == 1)
                                echo "<img src='images/locked.png' />";
                            else
                                echo "<img src='images/active.png' />";
                        ?>
                    </td>
                    <td>
                        <a href="pages/qlHang/xlXoa.php?id=<?php echo $row["MaLoaiSanPham"] ?>">
                            <img src="images/lock.png" />
                        </a>
                        <a href="index.php?c=3&a=2&id=<?php echo $row["MaLoaiSanPham"] ?>">
                            <img src="images/edit.png" />
                        </a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>