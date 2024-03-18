<main class="catalog  mb ">
    <div class="boxleft">
        <form action="index.php?act=billconfrim" method="POST" class="form_account">
            <div class="row2 mb10 formds_loai">
                <div class="row2 font_title">
                    <h2> Thông Tin Đặt Hàng</h2>
                </div>
                <table>
                    <?php
                    if(isset($_SESSION['user'])){
                        $user=$_SESSION['user']['user'];
                        $email=$_SESSION['user']['email'];
                        $address=$_SESSION['user']['address'];
                        $tel=$_SESSION['user']['tel'];
                    }else{
                        $user="";
                        $email="";
                        $address="";
                        $tel="";
                    }


?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" value="<?= $user?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?= $address?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?= $email?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" name="tel" value="<?= $tel?>"></td>
                    </tr>
                </table>
        </form>
        <div class="row2 mb10 formds_loai">
            <div class="row2 font_title">
                <h2> Thông Tin Đặt Hàng</h2>
            </div>
            <table border="1px">
                <tr>
                    <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                    <td><input type="radio" name="pttt" checked>Chuyển khoản khi nhận hàng</td>
                    <td><input type="radio" name="pttt" checked>Thanh toán online</td>
                </tr>
            </table>
        </div>
        <div class="row2 font_title">
            <h2>GIỎ HÀNG</h2>
        </div>
        <table>
            <?php
                 viewcart(0);
?>
        </table>
        <a href=""> <input class="mr20" type="submit" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG"></a>


        </form>

    </div>
    </div>

    <?php include "./view/boxright.php" ?>
</main>
<!-- BANER 2 -->