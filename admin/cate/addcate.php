<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="view.php?act=addcates" method="POST">
            <!-- <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" name="maloai" placeholder="nhập vào mã loại">
            </div> -->
            <div class="row2 mb10">
                <label>Tên loại </label> <br>
                <input type="text" name="cate_name" placeholder="Nhập Tên Loại Hàng">
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="addcate" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="../admin/view.php?act=cate"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>