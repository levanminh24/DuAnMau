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
            <div class="box_title">QUÊN MẬT KHẨU
            </div>
            <div class="box_content ">
               <form action="index.php?act=quenmk" method="post" class="form_account">
               Email <input type="email" name="email" placeholder="Email" >
                <input type="submit" name="guiemail" value="Gửi">
                <input type="reset" value="Nhập lại">
               </form>
               <h4 class="thongbao">
<?php

if(isset($thongbao)&&($thongbao!="")){
     echo $thongbao;
    }
?>
</h4>
            </div>
        </div>

    </div>
    <?php
    include "view/boxright.php";
?>

</main>