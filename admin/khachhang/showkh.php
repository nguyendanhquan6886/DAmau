
<h1>Khách Hàng</h1>
<!-- <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<style>
    img {
        width: 200px;
        height: 200px;

    }

    .timkiem {
        margin-left: -1040px;
        
    }
</style>

<!-- <body> -->
<div class="row2">
    <div class="row2 font_title" style="margin-bottom: 15px">
        <h1 >Danh Sách Khách Hàng</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <div class="timkiem" style="display: inline;">
                    <input type="text" name="searchcate" id="" placeholder="Nhập Từ Khóa Tìm Kiếm" style="width: 200px">
                    <select name="loc" id="" style="height: 28.6px;  ">
                        <option value="0">Tất Cả</option>
                        <?php
                        $resultcates = query_allcate();

                        foreach ($resultcates as $cate) {
                        ?>

                            <option value="<?php echo $cate['cate_id'] ?>"><?php echo $cate['cate_name'] ?></option>


                        <?php
                        }
                        ?>

                    </select>
                    <button type="submit" name="ok" style="height: 28.6px;">Tìm Kiếm</button>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Khách Hàng</th>
                        <th>Tên Đăng Nhập</th>
                        <th>Mật Khẩu</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Vai Trò</th>
                        
                    </tr>
                    <?php
                    // $sql = "select * from cate order by cate_id desc";
                    // $result = pdo_queryall($sql);


                   foreach($result_kh as $value_kh){
                        extract($value_kh)
                   

                    ?>
                        <tr>
                            <td><input type="checkbox" <?php if (isset($_POST['all'])) {
                                                            echo 'checked';
                                                        }
                                                        ?> name="" id=""></td>
                            <td><?php echo $kh_id ?></td>
                            <td><?php echo $kh_name ?></td>
                            <td><?php echo $kh_pass?></td>
                            <td><?php echo $kh_mail ?></td>
                            <td><?php echo $kh_phone ?></td>
                            <td><?php echo $kh_dress ?></td>
                            <td><?php if($kh_vaitro == 1){
                                echo 'Admin';
                            }
                            else{
                                echo 'Người Mua Hàng';
                            } ?></td>
                            

                            


                            







                            <td><button type="submit" name="update"><a href="view.php?act=uppro&v=<?php echo $pro_id ?>">Sửa</a></button> <button type="submit" name="deletepro"><a href="view.php?act=delpro&v=<?php echo $pro_id ?>">Xóa</a></button></td>
                        </tr>
                    <?php
                    }
                    ?>




                </table>
            </div>
            <div class="row mb10 ">
                <button type="submit" name="all">Chọn Tất Cả</button>
                <button type="submit" name="unall">Bỏ Chọn Tất Cả</button>
                <button type="submit" name="add"><a href="view.php?act=thempro">Nhập THêm</a></button>





            </div>
        </form>



    </div>
</div>




</div>
<!-- </body> -->

<!-- </html> -->