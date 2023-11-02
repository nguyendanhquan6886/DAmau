<?php
// include '../model/pdo.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row2">
        <div class="row2 font_title">
            <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <!-- <th></th> -->
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th>Số Lượng Sản Phẩm</th>
                            <th>Sản Phẩm Giá Cao Nhất</th>
                            <th>Sản Phẩm Giá Thấp Nhất</th>
                            <th>Giá Trung Bình</th>
                            <!-- <th></th> -->
                        </tr>
                        <?php
                        foreach ($thongke as $value) {
                            extract($value);
                        ?>
                            <tr>
                                
                                <td><?php echo $cate_id ?></td>
                                <td><?php echo $cate_name ?></td>
                                <td><?php echo $soluong ?></td>
                                <td><?php echo $maxprice ?></td>
                                <td><?php echo $minprice ?></td>
                                <td><?php echo $tb_price ?></td>
                                

                                
                            </tr>
                        <?php
                        }
                        ?>








                    </table>
                </div>
                <a href="./view.php?act=bieudo">Biểu Đồ</a>
                <!-- <div class="row mb10 ">
                    <button type="submit" name="all">Chọn Tất Cả</button>
                    <button type="submit" name="unall">Bỏ Chọn Tất Cả</button>
                    <button type="submit" name="add"><a href="view.php?act=themcate">Nhập THêm</a></button>





                </div> -->
            </form>



        </div>
    </div>




    </div>
</body>

</html>