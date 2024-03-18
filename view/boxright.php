      
             <div class="boxright">
             <div class="mb">
              <form action="index.php?act=dangnhap" method="post">
                <div class="box_title">TÀI KHOẢN</div>
                <div class="box_content form_account">
                  <?php 
                  if(isset($_SESSION['user']) ){
                     extract($_SESSION['user']);
                     ?>
                     <div class="box_title">

                       <h4>xin chao:<?=$user?> </h4><br>
                       </div>
                   <div class="box_title">
                   <li class=""><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
                   </div>
                   <div class="box_title">
                   <li class=""><a href="index.php?act=edit_taikhoan">cập nhật tài khoan</a></li>
                   </div>
                   <?php if($role ==1){ ?>
                   <div class="box_title">
                   <li class=""><a href="admin/index.php">Đăng nhập admin</a></li>
                   </div>
                   <?php } ?>
                   <div class="box_title">
                   <li class=""><a href="index.php?act=thoat">Thoát</a></li>
                   </div>

                    <?php
                  }else{
                    
                  
                  ?>
                    <form action="index.php?act=dangnhap" method="POST"></form>
                    <h4>Tên đăng nhập</h4><br>
                    <input type="text" name="user" id="">
                    <h4>Mật khẩu</h4><br>
                    <input type="password" name="pass" id=""><br>
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                   <br><input type="submit" name="dangnhap" value="Đăng nhập">
                   <li class="form_li"><a href="#">Quên mật khẩu</a></li>
                   <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                  <?php
                  }
                  ?>
                </div>
             </div>
             </form>
             <div class="mb">
                <div class="box_title">DANH MỤC</div>
                <div class="box_content2 product_portfolio">
                  <ul >
                     <?php
                   foreach ($dsdm as $dm) {
                     extract($dm);
                     $linkdm="index.php?act=sanpham&iddm=".$id;
                   echo ' <li><a href="'.$linkdm.'">'.$name.'</a></li>';
                   }

?>
                  </ul>
                </div>
                <div class="box_search">
                  <form action="index.php?act=sanpham" method="POST">
                     <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                     <input type="submit" name="timkiem" value="Tìm kiếm">
                  </form>
                </div>
             </div>
             <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
             <div class="mb">
                <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
                <div class="box_content">
                  <?php
                foreach ($dstop10 as $sp) {
                  extract($sp);
                  $img=$img_path.$img;
                  $linksp="index.php?act=sanphamct&idsp=".$id;
                  echo '<div class="selling_products" style="width:100%;">
                  
                  <img src="'.$img.'" alt="anh">
                  <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                 
                }

?>
                      </div>
             </div>

             </div>