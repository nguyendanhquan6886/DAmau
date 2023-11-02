<div class="row2">
    <div class="row2 font_title">
        <h1>Thêm Mới Sản Phẩm</h1>
    </div>
    <div class="row2 form_content ">
        <form action="view.php?act=addpros" method="POST" enctype="multipart/form-data">
            <!-- <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" name="maloai" placeholder="nhập vào mã loại">
            </div> -->
            <div class="row2 mb10">
                <label>Tên Sản Phẩm </label> <br>
                <input type="text" name="pro_name" placeholder="Nhập Tên Sản Phẩm">
            </div>
            <div class="row2 mb10">
                <label>Giá Sản Phẩm </label> <br>
                <input type="text" name="pro_price" placeholder="Nhập Giá Sản Phẩm">
            </div>
            <div class="row2 mb10">
                <label>Sale </label> <br>
                <input type="text" name="pro_sale" placeholder="Nhập Ưu Đãi  Sản Phẩm">
            </div>
            <div class="row2 mb10">
                <label>Ảnh Sản Phẩm </label> <br>
                <input type="file" name="pro_img">
            </div>
            <div class="row2 mb10">
                <label>Chi Tiết Sản Phẩm </label> <br>
                <input type="text" name="pro_ctiet">
            </div>
            <div class="row2 mb10">
                <label>Danh Mục Sản Phẩm </label> <br>
                <select name="cate" id="">
                <?php
                    foreach($resultcate as $cate){
                        extract($cate);
                        ?>
                        <option value="<?php echo $cate_id?>"><?php echo $cate_name?></option>
                        <?php
                    }
                ?>
                
                    <option value=""></option>
                </select>
            </div>

            <div class="row mb10 ">
                <input class="mr20" type="submit" name="addpro" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="../admin/view.php?act=pro"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>