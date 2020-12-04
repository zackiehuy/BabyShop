<table cellspacing="0" border="1">
    <tr>
        <th width="100">Mã tài khoản</th>
        <th width="200">Tên đăng nhập</th>
        <th width="200">Tên hiển thị</th>
        <th width="200">Địa chỉ</th>
        <th width="150">Điện thoại</th>
        <th width="200">Email</th>
        <th width="75">Tình trạng</th>
        <th width="150">Loại tài khoản</th>
        <th width="100">Thao tác</th>      
    </tr>
    <tr>
        <td><?php echo $_SESSION["MaTaiKhoan"]; ?></td>
        <td><?php echo $_SESSION["TenDangNhap"]; ?></td>
        <td><?php echo $_SESSION["TenHienThi"]; ?></td>
        <td><?php echo $_SESSION["DiaChi"]; ?></td>
        <td><?php echo $_SESSION["DienThoai"]; ?></td>
        <td><?php echo $_SESSION["Email"]; ?></td>
        <td>
            <?php
                if($_SESSION["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
            ?>
            </td>
            <td><?php echo $_SESSION["TenLoaiTaiKhoan"]; ?></td>
            <td>
                <a href="pages/qlTaiKhoan/xlXoa.php?id=<?php echo $_SESSION["MaTaiKhoan"] ?>">
                    <img src="images/lock.png" />
                </a>
                <a href="index.php?c=1&a=2&id=<?php echo $_SESSION["MaTaiKhoan"] ?>">
                    <img src="images/edit.png" />
                </a>
            </td>
    </tr>
</table>