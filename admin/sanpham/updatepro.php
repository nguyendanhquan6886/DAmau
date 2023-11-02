<style>
    img{
        width: 200px;
        height: 200px;
    }
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>Cập Nhật Sản Phẩm</h1>
    </div>
    <div class="row2 form_content ">
        <form action="view.php?act=suapro" method="POST" enctype="multipart/form-data">
           
            <div class="row2 mb10">
                
                <input type="text" name="pro_id" id="" value="<?php echo $result['pro_id']?>" hidden>
                <label>Tên Sản Phẩm </label> <br>
                <input type="text" name="pro_name" value="<?php echo $result['pro_name']?>" placeholder="Nhập Tên Sản Phẩm">
                <label>Giá Sản Phẩm </label> <br>
                <input type="text" name="pro_price" value="<?php echo $result['pro_price']?>" placeholder="Nhập Giá Sản Phẩm">
                <label>Ưu Đãi Sản Phẩm </label> <br>
                <input type="text" name="pro_sale" value="<?php echo $result['pro_sale']?>" placeholder="Nhập Ưu Đãi Sản Phẩm">
                <label>Ảnh Sản Phẩm </label> <br>
                
                <img src="<?php echo "./sanpham/img/".$result['pro_img']?>" alt=""> <br>
                <input type="file" name="pro_img" >
                <label>Chi Tiết Sản Phẩm </label> <br>
                <input type="text" name="pro_ctiet" value="<?php echo $result['pro_ctiet']?>" placeholder="Nhập Chi Tiết Sản Phẩm">
                <label>Danh Mục Sản Phẩm </label> <br>
                <select name="cate" id="">
                    <?php
                        foreach($resultcate as $cate){
                            ?>
                                <option <?php if($result['cate_id'] == $cate['cate_id']){ echo 'selected';}?> value="<?php echo $cate['cate_id']?>"><?php echo $cate['cate_name']?></option>
                            <?php
                        }
                    ?>
                </select>
                
            </div>
            <div class="row mb10 ">
                <!-- <button type="submit" name="updatecate"><a href="view.php?act=cate">Cập Nhật</a></button> -->
                <input class="mr20"  type="submit" name="updatepro" value="Cập Nhật">
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