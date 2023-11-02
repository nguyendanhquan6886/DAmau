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
            <h1>DANH SÁCH Bình Luận</h1>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ Bình Luận</th>
                            <th>Nội Dung</th>
                            <th>ID Sản Phẩm</th>
                            <th>Id Khách Hàng</th>
                            <th>Thời Gian Bình Luận </th>
                            
                        </tr>
                        <?php
                        
                        foreach ($resultcmt as $value) {
                            extract($value);
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" <?php if(isset($_POST['all'])){ echo'checked';}?> id=""></td>
                                <td><?php echo $cmt_id?></td>
                                <td><?php echo $cmt_content ?></td>
                                <td><?php echo $pro_id ?></td>
                                <td><?php echo $kh_id ?></td>
                                
                                <td><?php echo $cmt_date ?></td>

                                <td><button type="submit" name="update"><a href="view.php?act=upcmt&v=<?php echo $cmt?>">Sửa</a></button> <button type="submit" name="delete"><a href="view.php?act=delcmt&delcmt=<?php echo $cmt_id?>">Xóa</a></button></td>
                            </tr>
                        <?php
                        }
                        ?>




                    </table>
                </div>
                <div class="row mb10 ">
                    <button type="submit" name="all">Chọn Tất Cả</button>
                    <button type="submit" name="unall">Bỏ Chọn Tất Cả</button>
                    





                </div>
            </form>



        </div>
    </div>




    </div>
</body>

</html>
