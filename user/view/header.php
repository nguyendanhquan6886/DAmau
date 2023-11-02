<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dự án mẫu</title>
   <link rel="stylesheet" href="../css/css.css">
   <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
   <!-- <style>
      form li a{
        
      }
    </style> -->
</head>

<body onload="autoslide()">
   <div class="boxcenter">
      <!-- BIGIN HEADER -->
      <header>
         <div class="row mb header">
            <h1>SIÊU THỊ TRỰC TUYẾN</h1>
         </div>
         <div class="row mb menu" style="justify-content:space-between;"  >
            <ul >

               <li class="dropdown">
                  <a class="dropdownbtn" href="../user/trangchunew.php?act=home">Trang chủ</a>
               </li>
               <li class="dropdown">
                  <a class="dropdownbtn" href="">Danh mục</a>
                  <div class="dropdown_content">
                     <ul style="display: block;">
                        <?php
                        $cate = query_allcate();
                        foreach ($cate as $cates) {
                           extract($cates);
                        ?>

                           <li class="dropdown" ><a href="../user/trangchunew.php?act=procate&iddm=<?php echo $cate_id ?>"><?php echo $cate_name ?></a></li>

                        <?php
                        }
                        ?>

                     </ul>
                  </div>
               </li>
               <li class="dropdown">
                  <a class="dropdownbtn" href="trangchunew.php?act=sp">Sản Phẩm</a>
               </li>
               

            </ul>
            <form action="../user/trangchunew.php?act=timkiem" method="post" style="margin-left: 168px;">
               <input type="text" name="searchpro" id="" placeholder="Nhập Từ Khóa Tìm Kiếm" style="padding: 2px;">
               <button type="submit" style="padding: 2px;" name="search">Tìm Kiếm</button>
            </form>
         </div>
      </header>
      <main class="catalog  mb ">

         <div class="boxleft">
            <div class="banner">
               <img id="banner" src="../img/anh0.jpg" alt="">
               <img id="banner" src="../img/anh1.jpg" alt="">
               <img id="banner" src="../img/anh2.jpg" alt="">
               <img id="banner" src="../img/anh3.jpg" alt="">
               <img id="banner" src="../img/anh4.jpg" alt="">

               <button class="pre" onclick="nextslide(-1)">&#10094;</button>
               <button class="next" onclick="nextslide(1)">&#10095;</button>
            </div>