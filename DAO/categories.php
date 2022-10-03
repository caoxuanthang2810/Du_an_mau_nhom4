<?php

    // Gọi tất cả hàm
    function category_selectall(){
        $sql = "SELECT * from categories order by name";
        return pdo_query($sql);
    }

    function category_selectid($id){
        $sql = "SELECT * from categories where id=?";
        return pdo_query_one($sql,$id);
    }
   

    function category_insert($name){
        $sql = "INSERT INTO categories(name) VALUES(?)";
        pdo_execute($sql,$name);
    }

    function category_delete($id){
     
        $sql = "DELETE FROM categories WHERE id=?";
        pdo_execute($sql,$id);
   
    }
    // update 
    function category_update(){
        $sql = "UPDATE category SET name = '?' WHERE id =?";
        pdo_execute($sql);
        return pdo_query($sql);
    }
?>