<?php
    function order_selectall(){
        $sql = "SELECT * from orders";
        return pdo_query($sql);
    }

    function order_insert($id){
        $sql = "INSERT INTO orders($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>