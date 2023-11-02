<div class="items">
      <?php
         
         foreach ($result_searchpro as $pro) {
            extract($pro);
         ?>

            <div class="box_items">
               <div class="box_items_img">
                  <img src="<?php echo "../admin/sanpham/img/$pro_img" ?>" alt="">
                  <div class="add" href="">ADD TO CART</div>
               </div>
               <a class="item_name" href="./trangchunew.php?act=proct&pro_id=<?php echo $pro_id ?>&cate_id=<?php echo $cate_id ?>"><?php echo $pro_name ?></a>
               <p class="price"><?php echo "$pro_price VNĐ" ?></p>

            </div>





         <?php
         }
         ?>
         
      </div>
   </div>
      <?php
      include_once "../user/view/boxright.php";
      ?>
      
      
</main>