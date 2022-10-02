<?php
    
    // Gọi tất cả hàm
    function category_selectall(){
        $sql = "SELECT * from categories order by name";
        return pdo_query($sql);
    }

    function category_insert($id){
        $sql = "INSERT INTO categories($id) VALUES('?')";
        pdo_execute($sql,$id);
    }

    function category_delete($id){
        $sql = "DELETE FROM categories WHERE id=$id";
        pdo_execute($sql,$id);
    }
    // update 
    function category_update(){
        $sql = "UPDATE category SET name = '?' WHERE id = '?'";
        pdo_execute($sql);
        return pdo_query($sql);
    }
?>