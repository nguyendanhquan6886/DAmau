
  <!-- END HEADER -->
  <!-- <main class="catalog  mb ">

    <div class="boxleft"> -->
      <style>
        .label{
          width: 150px;
          margin-left: 21%;
          text-align: start;
          color: red;
        }
        h5{
          font-size: 16px;
          color: red;
          margin: 10px 0;
        }
      </style>
      <div class="box_title">Đăng ký thành viên</div>
      <?php
          if(isset($thongbao)){
            echo "<h5 >$thongbao</h5>";
          }
        ?>
      <div class="box_content form_account">
        <form action="trangchunew.php?act=dangky" method="post">
          <div>
            <p class="label">Email</p>
            <input type="email" name="email" placeholder="Email" style="width:58%;">
          </div>
          <div>
          <p class="label">Số Điện Thoại</p>
           
            <input type="text" name="phone"  placeholder="Phone" style="width:58%;">
          </div>

          <div>
          <p class="label">Tên Đăng Nhập</p>
            <input type="text" name="name"  placeholder="User" style="width:58%;">
          </div>
          <div>
          <p class="label">Mật Khẩu</p>
            <input type="password" name="pass" id="" placeholder="Password" style="width:58%">
          </div>
          <div>
          <p class="label">Địa Chỉ</p>
            <input type="text" name="diachi"  placeholder="Adress" style="width:58%;">
          </div>
          <input type="submit" value="Đăng ký" name="dangky">
          <input type="reset" value="Nhập lại">
          <a href=""></a>

        </form>
       

      </div>

    </div>
    <?php
      include '../user/view/boxright.php';
    ?>

  </main>
  <!-- BANNER 2 -->

  <!-- FOOTER -->
  