<!-- END HEADER -->
<!-- <main class="catalog  mb ">

  <div class="boxleft"> -->
    <style>
      #chitiet{
        width: 250px;
        height: 250px;
      }
    </style>
<div class="  mb">
  <div class="box_title">CHI TIẾT SẢN PHẨM</div>
  <div class="box_content">
    <?php
    if (isset($_GET['pro_id'])) {
      $id = $_GET['pro_id'];
      $pro_ctiet = queryonepro($id);
    }

    ?>
    <img src="<?php echo "../admin/sanpham/img/" . $pro_ctiet['pro_img'] ?>" id="chitiet">
    <p><?php echo $pro_ctiet['pro_ctiet']?></p>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
   
      $("#binhluan").load("binhluan.php", {idpro: <?php echo $pro_ctiet['pro_id']?>});
    });
  
</script>
<div class="mb" id="binhluan">
<?php

?>

</div>

<div class=" mb">
  <div class="box_title" style="margin-bottom: 15px;">SẢN PHẨM CÙNG LOẠI</div>
  <div class="items">
    <?php


    foreach ($result_pro_cate as $pro_cate) {
      extract($pro_cate);
    ?>
      <div class="box_items" style="height: 321px; ">
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
</div>
<?php
include './view/boxright.php';
?>
</main>
<!-- BANNER 2 -->

<!-- FOOTER -->