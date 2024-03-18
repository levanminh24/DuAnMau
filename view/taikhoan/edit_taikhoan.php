<style>
td {
    padding: 0 20px;
}
.thongbao{
    color: red;
}



</style>

<main class="catalog  mb ">
    
    <div class="boxleft">
        
        <div class="  mb">
        <form action="index.php?act=edit_taikhoan" method="post" class="form_account">
            <div class="box_title"> CẬP NHẬT TÀI KHOẢN
            </div>
            <?php
        if(isset($_SESSION['user']) && (is_array($_SESSION['user'])!='')){
            extract($_SESSION['user']);
        }

?>
            <div class="box_content ">
            <form action="index.php?act=dangky" method="post" class="form_account">
               Email <input type="email" name="email" placeholder="Email" value="<?=$email?>" >
               Tên đăng nhập <input type="text" name="user" placeholder="Username" value="<?=$user?>" >
               Password <input type="password" name="pass" placeholder="Password" value="<?=$pass?>" >
               Điạ chỉ <input type="text" name="address" placeholder="Nhập địa chỉ" value="<?=$address?>" >
               Số điện thoại <input type="text" name="tel" placeholder="Số điện thoại" value="<?=$tel?>" >
               <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật Tài khoản">
                <input type="reset" value="Nhập lại">
               </form>
               <h2 class="thongbao">
<?php

if(isset($thongbao)&&($thongbao!="")){
     echo $thongbao;
    }
?>
</h2>
            </div>
        </div>

    </div>
    </form>
    <?php
    include "view/boxright.php";
?>

</main>