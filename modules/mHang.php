<dl>
    <dt>Hãng sản xuất</dt>
    <?php
        $sql = "SELECT * FROM HangSanXuat WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            ?>
                <dd>
                    <a href="index.php?a=2&id=<?php echo $row["MaHangSanXuat"]; ?>">
                        <?php echo $row["TenHangSanXuat"]; ?>
                    </a>
                </dd>
            <?php
        }
    ?>
</dl>