<?php
session_start();
include '../model/pdo.php';
include '../model/cate.php';
include '../model/product.php';
include '../model/khachhang.php';
include '../model/coment.php';
include '../model/cart.php';
include './view/header.php';

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'proct':

      if (isset($_GET['pro_id']) && isset($_GET['cate_id'])) {
        $pro_id = $_GET['pro_id'];
        $cate_id = $_GET['cate_id'];
      }
      $result_pro_cate = query_procate($cate_id, $pro_id); // Sản phẩm cùng loại
      $result_coment = query_coment($pro_id);
      include './prochitiet.php';
      break;

    case 'quenmk';
      include './quenmatkhau.php';
      break;

    case 'quenmknew';
      if (isset($_POST['guiemail'])) {
        $email = $_POST['email'];
        if ($email == '') {
          $thongbao1 = 'Xin Mời Bạn Nhập Email';
        }
        $checkmail = check_email($email);

        if (is_array($checkmail)) {
          $thongbao1 = 'Mật Khẩu Của Bạn Là ' . $checkmail['kh_pass'];
        } else {
          $thongbao1 = 'Email Của Bạn Chưa Được Đăng Ký';
        }
        include './quenmatkhau.php';
      }
      break;


    case 'dk';
      include './dangky.php';
      break;
      case 'dangky';
      if (isset($_POST['dangky'])) {
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $diachi = $_POST['diachi'];
      }
      if ($mail == null || $phone == null || $name == null || $pass == null || $diachi == null) {
        $thongbao = 'Xin Mời Nhập Đầy Đủ Trường Dữ Liệu';
      } else {
        addkh($pass, $name, $mail, $phone, $diachi);
        $thongbao = 'Đăng Ký Thành Công';
      }

      include './dangky.php';


      break;
    case 'home';
      include './view/home.php';

      break;
    case 'procate'; // sản Phẩm theo danh mục
      if (isset($_GET['iddm'])) {
        $id_cate = $_GET['iddm'];
        $result_pro_cate = query_procate($id_cate, 0);
      }
      include './showprocate.php';
      break;

    case 'timkiem';
      if (isset($_POST['search'])) {
        $like_pro = $_POST['searchpro'];
      } else {
        $like_pro = '';
      }
      $result_searchpro = queryallpro($like_pro, 0);

      include '../user/searchpro.php';
      break;
  
    case 'dangnhap';
      if (isset($_POST['dangnhap'])) {
        
        $user = $_POST['users'];
        $pass = $_POST['passs'];
        $checktk = check_user($user, $pass);
        if (is_array($checktk)) {
          $_SESSION['acount'] = $checktk;
          header("location:trangchunew.php");
        } else {
          $thongbao = "Xin Mời Nhập Lại Tên Đăng Nhập Hoặc mật khẩu";
          include '../user/view/home.php';
        }
      }
      break;
    case 'thoat';
      session_unset();
      // include './view/home.php';
      header("location:trangchunew.php");

      break;
    case 'edit_tk';
      if (isset($_GET['idtk'])) {
        $value_tk = queryonetk($_GET['idtk']);

        include '../user/edittk.php';
      }
      break;
    case 'edit';
      if (isset($_POST['update'])) {
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $diachi = $_POST['diachi'];
        $id = $_POST['id_kh'];


        if ($mail == null || $phone == null || $name == null || $pass == null || $diachi == null) {
          $thongbao = 'Xin Mời Nhập Đầy Đủ Trường Dữ Liệu';
        } else {
          updatetk($pass, $name, $mail, $phone, $diachi);
          $value_tk = queryonetk($id);
          $thongbao = 'Cập Nhật Thành Công';
        }
      }

      include './edittk.php';
      break;
    case 'addcart';


      if (isset($_POST['addcart'])) {
        if (!isset($_SESSION['acount'])) {
?>
          <script>
            alert('Xin Mời Bạn Đăng Nhập')
          </script>


<?php
          // header("location:trangchunew.php");
  include './view/home.php';
break;


        } else {
          $id_kh = $_POST['id_kh'];
          $id = $_POST['id'];
          $name = $_POST['name'];
          $img = $_POST['img'];
          $price = $_POST['price'];
          $sl = 1;
          $ttien = $price * $sl;
          addcart($id,$name,$img,$price,$sl,$ttien,$id_kh);
        }
        $result_cart = query_allcartkh($id_kh);
        include './cart.php';
      }
      
      break;
      case 'viewcart';
      if(isset($_GET['idkh'])){
      $result_cart = query_allcartkh($_GET['idkh']);
      if($result_cart == null){
        $thongbaocart = 'Bạn Chưa Có Sản Phẩm nào Trong Giỏ Hàng';
      }
        include './cart.php';
      }
      break;


      case 'delcart';
        if(isset($_GET['idcart'])&& isset($_GET['idkh'])){
          $id = $_GET['idcart'];
          deletecart($id);
        }
        $result_cart = query_allcartkh($_GET['idkh']);

        include './cart.php';

        
        // header("location:trangchunew.php?act=viewcart");

      break;
        case 'sp';
          $result_proall = queryallpro('',0);
          include 'allpro.php';
        break;



    default:


      include './view/home.php';
      break;
  }
} else {
  include './view/home.php';
}

include './view/footer.php';
?>