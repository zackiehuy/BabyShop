<table cellspacing="0" border="1" class="qlsanpham">
    <tr >
        
        <th width="300">Tên sản phẩm</th>
        <th width="100">Hình</th>
        <th width="100">Giá</th>
        <th width="100">Ngày nhập</th>
        <th width="10">Số lượng tồn</th>
        <th width="100">Số lượng bán</th>
        <th width="100">Số lượt xem</th>
        <th width="100">Loại</th>
        <th width="100">Hãng</th>        
        <th width="100">Mô tả</th>        
        <th width="100">Trạng thái</th>        
        <th width="200">Thao tác</th>        
    </tr>
    <tr>
      
        <td><?php echo $_SESSION["TenSanPham"]; ?></td>
        <td>
            <img src="../images/<?php echo $_SESSION["HinhURL"]; ?>" height="50" /> 
        </td>
        <td><?php echo $_SESSION["GiaSanPham"]; ?></td>
        <td><?php echo $_SESSION["NgayNhap"]; ?></td>
        <td><?php echo $_SESSION["SoLuongTon"]; ?></td>
        <td><?php echo $_SESSION["SoLuongBan"]; ?></td>
        <td><?php echo $_SESSION["SoLuocXem"]; ?></td>
        <td><?php echo $_SESSION["TenLoaiSanPham"]; ?></td>
        <td><?php echo $_SESSION["TenHangSanXuat"]; ?></td>
        <td>
            <?php
                if(strlen($_SESSION["MoTa"]) > 20)
                    $sMoTa = substr($_SESSION["MoTa"],0,20)."...";
                else
                    $sMoTa = $_SESSION["MoTa"];
                    echo $sMoTa;
            ?>
            <div class="fullMoTa">
                <?php echo $_SESSION["MoTa"]; ?>
            </div>
        </td>
        <td>
            <?php 
                if($_SESSION["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
            ?>
        </td>
        <td>
            <a href="pages/qlSanPham/xlXoa.php?id=<?php echo $_SESSION["MaSanPham"] ?>">
                <img src="images/lock.png" />
            </a>
            <a href="index.php?c=2&a=2&id=<?php echo $_SESSION["MaSanPham"] ?>">
                <img src="images/edit.png" />
            </a>
            </td>
    </tr>
</table>