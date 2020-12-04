<div id="header">
    <a href="index.php">
        <img src="img/4-logo-the-gioi-di-song-dien-may-xanh.jpg" >
    </a>
    <div id="search-control">
        <form class="searchform" name="frmSearch" action="index.php?a=7&sub=1" method="post" >
            <input type="text" placeholder="Search.." name="search" id="search"  size="12" maxlength="20" width="15">    
            <button type="submit">Search</button>
        </form>
    </div>
    <div id="login_nav">
        <?php
            if(isset($_SESSION["MaTaiKhoan"]))
            {
                ?>
                Hello, <?php echo $_SESSION["TenHienThi"]; ?>
                <a href="modules/xlDangXuat.php">Đăng xuất</a>
                <?php
            }
            else
            {
                ?>
                    <form name="frmLogin" action="modules/xlDangNhap.php" method="post" onsubmit="return KiemTraDangNhap()">
                        Tài khoản: <input name="txtUS" type="text" id="txtUS" size="12" maxlength="20" width="15">
                        Mật khẩu: <input name="txtPS" type="password" id="txtPS" size="12" maxlength="20" width="15">
                        <input type="submit" value="Đăng nhập">
                        <input type="button" value="Đăng kí" onclick="ChuyenTrangDangKy()" />
                    </form>
                    <script type="text/javascript">
                        function ChuyenTrangDangKy(){
                            location = "index.php?a=6";
                        }
                    </script>
                <?php
            }
        ?>
    </div>
</div>