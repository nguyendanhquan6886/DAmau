<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án mẫu</title>
  <link rel="stylesheet" href="css/css.css">
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <style>
    
  </style>
</head>

<body>
  
    <!-- END HEADER -->
    <!-- <main class="catalog  mb ">

      <div class="boxleft"> -->

        <div class="box_title">Quên mật khẩu</div>
        <div class="box_content form_account">
          <form action="trangchunew.php?act=quenmknew" method="post">
            <div>
              <p>Email</p>
              <input type="email" name="email" placeholder="email">
            </div>

            <input type="submit" value="Gửi" name="guiemail">
            <input type="reset" value="Nhập lại">
          </form>
          <?php
            if(isset($thongbao1)){
              echo "<h5>$thongbao1</h5>";
            }
          ?>
        </div>

      </div>
     
      <?php
        include './view/boxright.php';
      ?>

    </main>
    <!-- BANNER 2 -->

    <!-- FOOTER -->
    