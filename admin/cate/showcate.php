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
            <h1>DANH SÁCH DANH MỤC</h1>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                        
                        foreach ($result as $value) {
                            extract($value);
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" <?php if(isset($_POST['all'])){ echo'checked';}?> id=""></td>
                                <td><?php echo $cate_id ?></td>
                                <td><?php echo $cate_name ?></td>

                                <td><button type="submit" name="update"><a href="view.php?act=upcate&v=<?php echo $cate_id?>">Sửa</a></button> <button type="submit" name="delete"><a href="view.php?act=delcate&v=<?php echo $cate_id?>">Xóa</a></button></td>
                            </tr>
                        <?php
                        }
                        ?>




                    </table>
                </div>
                <div class="row mb10 ">
                    <button type="submit" name="all">Chọn Tất Cả</button>
                    <button type="submit" name="unall">Bỏ Chọn Tất Cả</button>
                    <button type="submit" name="add"><a href="view.php?act=themcate">Nhập THêm</a></button>





                </div>
            </form>



        </div>
    </div>




    </div>
</body>

</html>