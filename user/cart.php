<h1 style="margin: 14px;">Giỏ Hàng Của Bạn</h1>
<div class="items">
    
<style>
        td,th{
                border: 1px solid black;
                padding: 30px;
        }
        table{
                border-collapse: collapse;
        }
</style>
<?php
        if(isset($thongbaocart)){
                echo $thongbaocart;
        }
        else{
?>
        <!-- <div class="box_items"> -->
            <table >
                <tr>
                        <th>Id Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá Sản Phẩm</th>
                        <th>Tổng Tiền</th>
                        <th></th>
                </tr>
                <?php
                
                        foreach($result_cart as $cart){
                                extract($cart);
                                ?>
                                        <tr>
                                                <td><?php echo $pro_id ?></td>
                                                <td><?php echo $pro_name?></td>
                                                <td><img style="height:50px;width:50px;" src="<?php echo "../admin/sanpham/img/$pro_img"?>" alt=""></td>
                                                <td><?php echo $cart_sl ?></td>
                                                <td><?php echo $pro_price?></td>
                                                <td><?php echo $cart_ttien?></td>
                                                <td><button type="submit"><a href="../user/trangchunew.php?act=delcart&idcart=<?php echo $cart_id?>&idkh=<?php echo $kh_id?>">Xóa</a></button></td>
                                        </tr>
                                <?php
                        }
                }
                ?>
            </table>

        <!-- </div> -->


</div>
</div>
<?php
include_once "../user/view/boxright.php";
?>


</main>