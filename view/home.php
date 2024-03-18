<style>
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
             <div class="banner">
             <img id="banner" src="./img/anh0.jpg" alt="">
             <button class="pre" onclick="pre()">&#10094;</button>
             <button class="next" onclick="next()">&#10095;</button>
         </div>
              <div class="items">
                <?php foreach ($spnew as $sp) : ?>
                <?php extract($sp); ?>
                <?php $link = "index.php?act=sanphamct&idsp=" . $id; ?>
                <?php $hinh = $img_path . $img; ?>
            
                <div class="box_items">
                    <div class="box_items_img">
                        <img src="<?php echo $hinh ?>" alt="">
                    </div>
                    <a class="item_name" href="<?php echo $link ?>"><?php echo $name ?></a>
                    <p class="price"><?php echo '$' . $price  ?></p>
            
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="name" value="<?= $name ?>">
                        <input type="hidden" name="img" value="<?= $img ?>">
                        <input type="hidden" name="price" value="<?= $price ?>">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            
            <?php endforeach; ?>
            
                 
         </div>
       </div>
          
                <?php include "boxright.php" ?>
            
            
         </main>
         <!-- BANNER 2 -->