<h2>Sản phẩm xem nhiều nhất</h2>
<?php
    $sql = "SELECT * FROM SanPham WHERE BiXoa = 0 ORDER BY SoLuocXem DESC LIMIT 0,10";
    $result = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <div class="box">
                <img src="images/<?php echo $row["HinhURL"]; ?>" />
                <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                <div class="action">
                    <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết </a>
                </div>
            </div>
        <?php
    }
?>