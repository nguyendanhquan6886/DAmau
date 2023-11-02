<div class="row2">
    <div class="row2 font_title">
        <h1>Cập Nhật Loại Hàng Hóa</h1>
    </div>
    <div class="row2 form_content ">
        <form action="view.php?act=suacate" method="POST">
            <!-- <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" name="maloai" placeholder="nhập vào mã loại">
            </div> -->
             <?php
                // if(isset($_GET['v'])){
                //     $cate_id = $_GET['v'];
                //     $sql = "Select * from cate where cate_id = $cate_id";
                //     $result = pdo_queryall_one($sql);
                    
                // }
                
             ?>
            <div class="row2 mb10">
                <label for="">Mã Loại</label> <br>
                <input type="text" name="cate_id" id="" value="<?php echo $result['cate_id']?>" hidden>
                <label>Tên loại </label> <br>
                <input type="text" name="cate_name" value="<?php echo $result['cate_name']?>" placeholder="Nhập Tên Loại Hàng">
            </div>
            <div class="row mb10 ">
                <!-- <button type="submit" name="updatecate"><a href="view.php?act=cate">Cập Nhật</a></button> -->
                <input class="mr20"  type="submit" name="updatecate" value="Cập Nhật">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="../admin/view.php?act=cate"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <!-- <?php
            // if(isset($_POST['updatecate'])){
            //     $cate_name = $_POST['cate_name'];
            //     $cate_id = $_POST['cate_id'];
            //     $sql = "update cate set cate_name='$cate_name' where cate_id = $cate_id";
            //     pdo_execute($sql);
            // }
            ?> -->
        </form>
    </div>
</div>