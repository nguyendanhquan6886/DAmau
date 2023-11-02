<!-- END HEADER -->
<!-- <main class="catalog  mb ">

    <div class="boxleft"> -->
<style>
    .label {
        width: 150px;
        margin-left: 21%;
        text-align: start;
        color: red;
    }

    h5 {
        font-size: 16px;
        color: red;
        margin: 10px 0;
    }
</style>
<div class="box_title">Cập Nhật Tài Khoản</div>
<?php
if (isset($thongbao)) {
    echo "<h5 >$thongbao</h5>";
}
// foreach ($result_tk as $value_tk) {
//     // extract($value_tk);
// }
?>
<div class="box_content form_account">
    <form action="trangchunew.php?act=edit" method="post">
        <input type="text" name="id_kh" id="" value="<?php echo $value_tk['kh_id']?>" hidden>
        <div>
            <p class="label">Email</p>
            <input type="email" name="email" placeholder="Email" style="width:58%;" value="<?php echo $value_tk['kh_mail'] ?>">
        </div>
        <div>
            <p class="label">Số Điện Thoại</p>

            <input type="text" name="phone" placeholder="Phone" style="width:58%;" value="<?php echo $value_tk['kh_phone'] ?>">
        </div>

        <div>
            <p class="label">Tên Đăng Nhập</p>
            <input type="text" name="name" placeholder="User" style="width:58%;" value="<?php echo $value_tk['kh_name'] ?>">
        </div>
        <div>
            <p class="label">Mật Khẩu</p>
            <input type="password" name="pass" id="" placeholder="Password" style="width:58%" value="<?php echo $value_tk['kh_pass'] ?>">
        </div>
        <div>
            <p class="label">Địa Chỉ</p>
            <input type="text" name="diachi" placeholder="Adress" style="width:58%;" value="<?php echo $value_tk['kh_dress'] ?>">
        </div>
        <input type="submit" value="Cập Nhật" name="update">
        <input type="reset" value="Nhập lại">
        <a href=""></a>

    </form>


</div>
</div>


<?php
include '../user/view/boxright.php';
?>

</main>
<!-- BANNER 2 -->

<!-- FOOTER -->