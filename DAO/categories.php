<?php
    // Gọi tất cả bảng
    function category_selectall(){
        $sql = "SELECT * from categories order by name";
        return pdo_query($sql);
    }

    // Gọi hàm danh mục theo id
    function category_select_id($id){
        $sql = "SELECT * from categories where id=?";
        return pdo_query($sql,$id);
    }

    // Thêm mới danh mục
    function category_insert($name){
        $sql = "INSERT INTO categories(name) VALUES(?)";
        pdo_execute($sql,$name);
    }

    // Xóa danh mục
    function category_delete($id){
        $sql = "DELETE FROM categories WHERE id= $id";
        pdo_execute($sql,$id);
    }

    // Update Danh mục 
    function category_update(){
        $sql = "UPDATE category SET name = '?' WHERE id = '?'";
        pdo_execute($sql);
        return pdo_query($sql);
    }
?>