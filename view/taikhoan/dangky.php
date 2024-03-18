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
            <div class="box_title"> ĐĂNG KÝ THÀNH VIÊN
            </div>
            <div class="box_content ">
               <form action="index.php?act=dangky" method="post" class="form_account">
               Email <input type="email" name="email" placeholder="Email" >
               Tên đăng nhập <input type="text" name="user" placeholder="Username" >
               Password <input type="password" name="pass" placeholder="Password" >
                <input type="submit" name="dangky" value="Đăng ký">
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
    <?php
    include "view/boxright.php";
?>

</main>