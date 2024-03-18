<style>
td {
    padding: 0 20px;
}
p{
     
     margin: 0;
     padding: 0;
     width: 100%;
     color: #f00;
     font-weight: bold;
     font-size: 25px;
    }
</style>
<main class="catalog  mb ">
    <div class="boxleft">
    <?php extract($onesp); ?>
        <div class="  mb">
            <div class="box_title"> CHI TIẾT SẢN PHẨM
            </div>
            <div class="box_content">
                <?php 
                    $img = $img_path . $img;
                    echo "<img src='$img' width='300'>";
                    echo "<h3>$name</h3>";
                    echo "<p>$price</p>";
                    echo "<span>$mota</span>";
                ?>

            </div>
        </div>
        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung']?></td>
                        <td><?php echo $value['iduser']?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$id?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }

                ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
?>

</main>