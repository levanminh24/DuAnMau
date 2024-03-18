<style>
td {
    padding: 0 20px;
}
p{
    margin: 0;
    padding: 0;
    width: 100%;
    text-align: center;
    color: #f00;
    font-weight: bold;
    font-size: 25px;
    
}
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        
        <div class="  mb">
            <div class="box_title"> SẢN PHẨM: <strong><?=$tendm?></strong>
            </div>
            <div class="items">
             <?php foreach ($dssp as $sp){
                   extract($sp);
                    $hinh = $img_path.$img;
                  ?>
                   <div class="box_items">
                   <div class="box_items_img">
                   <img src="<?php echo $hinh ?>" alt="">
                   </div>
                   <a class="item_name" href=""><?php echo $name ?></a>
                   <p class="price"><?php echo $price ?></p>
                   </div>
                   <?php } ?>
             </div>
        </div>

    </div>
    <?php
    include "view/boxright.php";
?>

</main>