<?php

     function addkh($pass,$name,$mail,$phone,$diachi){
        $sql = "insert into khachhang(kh_pass,kh_name,kh_mail,kh_phone,kh_dress) values('$pass','$name','$mail','$phone','$diachi')";
        pdo_execute($sql);
    }
    function check_user($user,$pass){
        $sql= "select * from khachhang where kh_name = '$user' and kh_pass = '$pass'";
        $result_user = pdo_query_one($sql);
        return $result_user;
    }
    function queryonetk($id){
        $sql= "select * from khachhang where kh_id = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
function updatetk($pass,$name,$mail,$phone,$diachi){
    $sql = " update khachhang set kh_pass = '$pass',kh_name = '$name',kh_mail='$mail',kh_phone='$phone',kh_dress = '$diachi'";
    pdo_execute($sql);

}
function check_email($mail){
    $sql= "select * from khachhang where kh_mail = '$mail'";
    $result_user = pdo_query_one($sql);
    return $result_user;
}
function query_allkh(){
    $sql = "select * from khachhang order by kh_id desc";
    $result = pdo_queryall($sql);
    return $result;
}
function query_onekh($id){
    $sql = "select * from khachhang where kh_id = $id ";
    $result = pdo_queryall($sql);
    return $result;
}

?>