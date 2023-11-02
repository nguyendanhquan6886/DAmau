<?php
    function addcart($pro_id,$ten,$pro_img,$pro_price,$sl,$ttien,$id_kh){
        $sql = "insert into cart values('null',$pro_id,'$ten','$pro_img',$pro_price,$sl,$ttien,$id_kh)";
        pdo_execute($sql);
    }
    function query_allcartkh($id_kh){
        $sql = "select * from cart  where kh_id=$id_kh order by cart_id desc";
        $result_cart = pdo_queryall($sql);
        return $result_cart;
    }
    function deletecart($id){
        $sql = "delete from cart where cart_id = $id";
        pdo_execute($sql);
    }
    function deletecart_pro($id){
        $sql = "delete from cart where pro_id = $id";
        pdo_execute($sql);
    }

?>