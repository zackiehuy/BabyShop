<h2>Sản phẩm tìm kiếm</h2>
<?php
   if(isset($_POST["search"]))
   {
       $S = $_POST["search"];      

       $sql = "select * from SanPham
       where BiXoa = 0 
       and TenSanPham like concat('%' , '$S' , '%') order by NgayNhap desc";
       
       $result = DataProvider::ExecuteQuery($sql);
       $row = mysqli_fetch_array($result);

       if($row == null)
           DataProvider::ChangeURL("index.php?a=7&sub=2");
       else
       {
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
       }
   }
   else
       DataProvider::ChangeURL("index.php"); 
?>