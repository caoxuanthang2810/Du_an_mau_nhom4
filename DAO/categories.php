<?php
    // require_once "./global.php";

    // Gọi tất cả bảng
    function category_selectall(){
        $sql = "SELECT * from categories";
        return pdo_query($sql);
    }

    // Gọi hàm danh mục theo id
    function category_select_id($id){
        $sql = "SELECT * from categories where id=?";
        return pdo_query_one($sql,$id);
    }

    // Thêm mới danh mục
    function category_insert($name){
        $sql = "INSERT INTO categories(name_cate) VALUES(?)";
        pdo_execute($sql,$name);
    }
    
    // Update Danh mục 
    function category_update($name,$id){
        $sql = "UPDATE categories SET name_cate = ? WHERE id = ?";
        pdo_execute($sql,$name,$id);
    }

    // Xóa danh mục
    function category_delete($id){
        $sql = "DELETE FROM categories WHERE id=?";
        pdo_execute($sql,$id);
    }
?>