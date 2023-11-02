<?php
include '../model/pdo.php';
include '../model/cate.php';
include '../model/product.php';
include '../model/khachhang.php';
include '../model/coment.php';
include '../model/cart.php';
include 'header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home';
        include 'content.php';
        break;
        case 'cate':
            $result = query_allcate();
            include './cate/showcate.php';

            break;
        case 'themcate';
            include './cate/addcate.php';
            break;
        case 'addcates':
            if (isset($_POST['addcate']) && ($_POST['addcate'])) {
                $cate_name = $_POST['cate_name'];

                addcate($cate_name);
            }
            $result = query_allcate();
            include './cate/showcate.php';



            break;
        case 'upcate';

            if (isset($_GET['v'])) {
                $cate_id = $_GET['v'];

                $result =  query_onecate($cate_id);
            }

            include './cate/updatecate.php';
            break;
        case 'suacate';
            if (isset($_POST['updatecate'])) {
                $cate_name = $_POST['cate_name'];
                $cate_id = $_POST['cate_id'];

                updatecate($cate_name, $cate_id);
            }

            $result = query_allcate();
            include './cate/showcate.php';
            break;
        case 'delcate';
            if (isset($_GET['v'])) {
                $cate_id = $_GET['v'];
                deleteprocate($cate_id);
                deletecate($cate_id);
            }

            $result = query_allcate();
            include './cate/showcate.php';
            break;

        case 'sp':

            if (isset($_POST['ok'])) {
                $keyw = $_POST['searchcate'];
                $id = $_POST['loc'];
            } else {
                $keyw = '';
                $id = 0;
            }
            $result = queryallpro($keyw, $id);
            include './sanpham/showpro.php';

            break;
        case 'thempro';
            $resultcate = query_allcate();
            include './sanpham/addpro.php';
            break;
        case 'addpros';
            if (isset($_POST['addpro']) && ($_POST['addpro'])) {
                $pro_name = $_POST['pro_name'];
                $pro_price = $_POST['pro_price'];
                $pro_sale = $_POST['pro_sale'];
                $img_name = $_FILES['pro_img']['name'];
                $img_tmp = $_FILES['pro_img']['tmp_name'];
                move_uploaded_file($img_tmp, "./sanpham/img/" . $img_name);
                $pro_ctiet = $_POST['pro_ctiet'];
                $cate = $_POST['cate'];


                addpro($pro_name, $pro_price, $pro_sale, $img_name, $pro_ctiet, $cate);

                $result = queryallpro('', 0);
                // $resultcates = query_allcate();


                include './sanpham/showpro.php';
            }
            break;
        case 'uppro';
            $resultcate = query_allcate();
            if (isset($_GET['v'])) {
                $pro_id = $_GET['v'];
                $result = queryonepro($pro_id);
            }
            include './sanpham/updatepro.php';
            break;

        case 'suapro';
            if (isset($_POST['updatepro'])) {
                $pro_id = $_POST['pro_id'];
                $sql = "select * from product where pro_id = $pro_id";
                $resultone = pdo_query_one($sql);

                $pro_name = $_POST['pro_name'];
                $pro_price = $_POST['pro_price'];
                $pro_sale = $_POST['pro_sale'];
                $pro_ctiet = $_POST['pro_ctiet'];
                $cate = $_POST['cate'];
                $img_tmp = $_FILES['pro_img']['tmp_name'];
                if ($_FILES['pro_img']['name'] != null) {
                    $img_name = $_FILES['pro_img']['name'];
                } else {
                    $img_name = $resultone['pro_img'];
                }
                move_uploaded_file($img_tmp, "./sanpham/img/" . $img_name);

                updatepro($pro_name, $pro_price, $pro_sale, $img_name, $pro_ctiet, $cate, $pro_id);
                $result = queryallpro('', 0);
                include './sanpham/showpro.php';
            }

            break;

        case 'delpro';
            if (isset($_GET['v'])) {
                $pro_id = $_GET['v'];
                deletecart_pro($pro_id);
                delcmt_pro($pro_id);
                deletepro($pro_id);
                $result = queryallpro('', 0);

                include './sanpham/showpro.php';
            }
            break;
        case 'kh':

            $result_kh = query_allkh();
            include './khachhang/showkh.php';
            break;
        case 'cmt':
            $resultcmt = query_comentall();
            include './binhluan/show.php';
            break;


        case 'thongke';
            $thongke = select_thongke();
            include 'thongke.php';
            break;
        case 'bieudo';
        $thongke = select_thongke();

            include 'bieudo.php';
            break;
        case 'delcmt';
        if(isset($_GET['delcmt'])){
        delcmt($_GET['delcmt']);
        $resultcmt = query_comentall();
            include './binhluan/show.php';
        }
        break;
       
        default:
            include 'content.php';
            break;
    }
} else {
    include 'content.php';
    // include 'footer.php';
}


include 'footer.php';
function select_thongke()
{
    $sql = "select cate.cate_id as cate_id , cate.cate_name as cate_name , count(product.pro_id) as soluong, product.pro_name as pro_name , max(product.pro_price) as maxprice , min(product.pro_price) as minprice , avg(product.pro_price) as tb_price from product left join cate on cate.cate_id = product.cate_id group by cate_id and group by pro_price";
    $thongke = pdo_queryall($sql);
    return $thongke;
}
