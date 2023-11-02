<?php
     function query_coment($id){
        $sql = "Select * from coment where pro_id = $id";
        $result = pdo_queryall($sql);
        return $result;
    }
    function addcmt($content,$idpro,$idkh,$date){
        $sql = "insert into coment values (null,'$content',$idpro,$idkh,'$date')";
        pdo_execute($sql);
    }
    function delcmt_pro($id){
        $sql = "delete from coment where pro_id = $id";
        pdo_execute($sql);
    }
    function query_comentall(){
        $sql = "Select * from coment ";
        $result = pdo_queryall($sql);
        return $result;
    }
    function delcmt($id){
        $sql = "delete from coment where cmt_id = $id";
        pdo_execute($sql);
    }
?>