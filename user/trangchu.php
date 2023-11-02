<?php
include '../model/pdo.php';
include '../model/product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/trangchu.css">
    <title>Trang Chủ</title>
</head>


<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li id="menucon">
                        <a href="">Danh Mục</a>
                        <ul id="sub_menu">
                            <li><a href="">Áo</a></li>
                            <li><a href="">Quần</a></li>
                            <li><a href="">Giày</a></li>
                            <li><a href="">Dép</a></li>
                        </ul>
                    </li>
                    <li><a href="">Tin Tức</a></li>
                    <li><a href="">Liên Hệ</a></li>
                    <li><a href="">Giới Thiệu</a></li>
                    <!-- <li><a href=""></a></li>
                    <li><a href=""></a></li> -->
                </ul>
            </div>
            <div class="search">
                <form action="" method="post">

                    <input type="" name="" id="" placeholder="Tìm Kiếm">
                    <i class="ti-search" id="search"><a href=""></a></i>
                    <a href=""><i class="ti-user"></i></a>
                    <a href=""><i class="ti-shopping-cart"></i></a>
                </form>
            </div>
        </div>
        <div class="slideshow">
            <!-- <img src="./img/bannerDAmau1.png" alt="" class="autoslide"> -->
            <!-- <img src="./img/bannerDAmau2.jpg" alt="" class="autoslide">
           <img src="./img/bannerDAmau3.jpg" alt="" class="autoslide">
           <img src="./img/bannerDAmau4.jpg" alt="" class="autoslide"> -->

        </div>
        <h3>Các Sản Phẩm Mới Nhất</h3>
        <div class="content">
            <div class="product">

                <?php
                $resultpro = showpro_home();
                foreach ($resultpro as $value) {
                    extract($value);
                ?>
                    <div class="item">
                        <img src="<?php echo "../admin/sanpham/img/$pro_img" ?>" alt="">
                        <div class="text">
                            <h5><?php echo $pro_name ?></h5>
                            <p><?php echo "$pro_price VNĐ" ?></p>
                        </div>


                    </div>
                <?php
                }
                ?>

            </div>
            <div class="top">
                <h3>Top sản Phẩm được yêu thích nhất</h3>
                <table>
                    <?php
                    foreach ($resultpro as $value) {
                        extract($value);
                    ?>
                        <tr>
                            <td><img src="<?php echo "../admin/sanpham/img/$pro_img" ?>" alt=""></td>
                            <td><?php echo $pro_name ?></td> <br>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>