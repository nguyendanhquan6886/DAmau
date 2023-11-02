<?php
// session_start();
//  var_dump($_SESSION['acount']) ;
?>
<div class="boxright">
  <style>
    h5 {
      font-size: 16px;
      color: red;
    }
  </style>
  <div class="mb">
  
    <?php
    if (isset($_SESSION['acount'])) {
      extract($_SESSION['acount']);
    ?>
    <div class="box_title">Tài Khoản</div>
      <div class="box_content2 product_portfolio">
        <?php
        echo "<h5>Xin Chào $kh_name</h5>";
        ?>
        <ul>
          <li><a href="./trangchunew.php?act=thoat">Đăng Xuất</a></li>
          <?php
          if($kh_vaitro){
          ?>
          <li><a href="../admin/view.php">Đăng Nhập Vào Admin</a></li>
          <?php } ?>
          <li><a href="./trangchunew.php?act=edit_tk&idtk=<?php echo $kh_id ?>">Cập Nhật Tài Khoản</a></li>
          <li><a href="./trangchunew.php?act=quenmk">Quên Mật Khẩu</a></li>
          <li><a href="./trangchunew.php?act=viewcart&idkh=<?php echo $kh_id?>">Giỏ Hàng Của Tôi</a></li>

          

        </ul>
      </div>
    <?php
    } else {
    ?>
      <div class="box_title">TÀI KHOẢN</div>
      <div class="box_content form_account">
        <form action="trangchunew.php?act=dangnhap" method="POST">
          <h4>Tên đăng nhập</h4><br>
          <input type="text" name="users" id="">
          <h4>Mật khẩu</h4><br>
          <input type="password" name="passs" id=""><br>
          <?php
          if (isset($thongbao)) {
            echo "<h5>$thongbao</h5>";
          }
          ?>
          <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
          <br><input type="submit" value="Đăng nhập" name="dangnhap">
          <li class="form_li"><a href="./trangchunew.php?act=quenmk">Quên mật khẩu</a></li>
          <li class="form_li"><a href="./trangchunew.php?act=dk">Đăng kí thành viên</a></li>
        </form>

      </div>
    <?php
    }
    ?>
  </div>
  <div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
      <ul>
        <?php
        $result_cate = query_allcate();
        foreach ($result_cate as $value) {
          extract($value);
        ?>
          <li><a href="../user/trangchunew.php?act=procate&iddm=<?php echo $cate_id ?>"><?php echo $cate_name ?></a></li>
        <?php
        }
        ?>

      </ul>
    </div>
    <div class="box_search">
      <form action="#" method="POST">
        <!-- <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
        <button type="submit">Tìm Kiếm</button> -->
      </form>
    </div>
  </div>
  <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
  <div class="mb">
    <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
    <div class="box_content">
    <?php
      $pro_top = showpro_home();
      foreach ($pro_top as $pro_top_one) {
         extract($pro_top_one);
      ?>
      <div class="selling_products" style="width:100%;">
        <img src="<?php echo "../admin/sanpham/img/$pro_img"?>" alt="anh">
        <a  class="item_name" href="./trangchunew.php?act=proct&pro_id=<?php echo $pro_id ?>&cate_id=<?php echo $cate_id ?>"><?php echo $pro_name ?></a>

      </div>
      <?php
      }
      ?>
      
    </div>
  </div>
</div>