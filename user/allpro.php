<h1 style="margin: 14px;">Tất Cả Sản Phẩm</h1>
   <div class="items">
      <?php
      
      foreach ($result_proall as $pro_all) {
         extract($pro_all);
      ?>

         <div class="box_items">
            <div class="box_items_img" style="height: 250px; margin-bottom:15px;">
               <img src="<?php echo "../admin/sanpham/img/$pro_img" ?>" alt="">
               <?php
                  

                  if(isset($_SESSION['acount'])){
                     extract($_SESSION['acount']);
                     $id_kh = $kh_id;
                  }
               ?>
               <form action="trangchunew.php?act=addcart" method="post">
                  <input type="text" name="id" id="" value="<?php echo $pro_id?>" hidden>
                  <input type="text" name="id_kh" id="" value="<?php echo $id_kh?>" hidden>

                  <input type="text" name="name" id="" value="<?php echo $pro_name?>" hidden>
                  <input type="text" name="img" id="" value="<?php echo $pro_img?>" hidden>
                  <input type="text" name="price" id="" value="<?php echo $pro_price?>" hidden>
                  <a  href=""><button type="submit" name="addcart">
                  <?php
                  
                  
               ?>
                        <div class="add" style="left:0">ADD TO CART</div>
                     </button></a>
               </form>
               
               <!-- <a href="../user/trangchunew.php?act=cart"><div class="add" >ADD TO CART</div></a> -->
            </div>
            <a style="text-align:center" class="item_name" href="./trangchunew.php?act=proct&pro_id=<?php echo $pro_id ?>&cate_id=<?php echo $cate_id ?>"><?php echo $pro_name ?></a>
            <p style="text-align:center" class="price" style=""><?php echo "$pro_price VNĐ" ?></p>

         </div>





      <?php
      }
      ?>


   </div>
   </div>
   <?php
      
   ?>
   <?php
   include_once "../user/view/boxright.php";
   ?>


   </main>

   <!-- BANNER 2 -->