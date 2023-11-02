<?php
session_start();
include '../model/khachhang.php';
include '../model/coment.php';
include '../model/pdo.php';
$idpro = $_REQUEST['idpro'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Document</title>
</head>

<body>
    <div class="mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2  product_portfolio binhluan ">
            <table>
                <?php
                   $result_coment =  query_coment($idpro);
                   
                   foreach($result_coment as $value_cmt){
                    extract($value_cmt);
                        $kh_cmt = queryonetk($kh_id);
                   
                ?>
                <tr>
                    <td><h3><?php echo $kh_cmt['kh_name']?></h3> <br>
                    <p style="margin-left:15px; margin-top:5px"><?php echo $cmt_content?></p>
                    <p style="margin-left:15px; font-size:14px"><?php echo $cmt_date?></p>
                </td> 
                    
                </tr>
                <?php
                   }
                ?>
            </table>
        </div>
        <?php
        if (isset($_SESSION['acount'])) {
            extract($_SESSION['acount']);
            $idkh = $kh_id;
        
        ?>
        <div class="box_search">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan'])) {
            $id_pro = $_POST['idpro'];
            $id_kh = $idkh;
            $content = $_POST['noidung'];
            date_default_timezone_set('Asia/Ho_Chi_Minh'); // timezone Việt Nam
            // Danh sách time_zone
            $timezone = DateTimeZone::listIdentifiers();
            foreach ($timezone as $item) {
                // echo $item . '<br/>';
            }
            $time = date('d-m-y');
            if($content == null){
              $thongbaocmt = "Xin Mời Bạn Nhập Bình Luận";
              echo $thongbaocmt;
              header("Location:".$_SERVER['HTTP_REFERER']);
            }
            else{
            addcmt($content,$id_pro,$id_kh,$time);
            header("Location:".$_SERVER['HTTP_REFERER']);

            }
            
            // header("Location:".$_SERVER['HTTP_REFERER']);

            
            
        }
        ?>
        <?php
        }
        ?>
    </div>

</body>

</html>