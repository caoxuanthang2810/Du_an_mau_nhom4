<?php
    require_once "./global.php";

    // Gọi tất cả bảng
    function image_selectall(){
        $sql = "SELECT * from images";
        return pdo_query($sql);
    }

    // Gọi hàm Ảnh theo id
    function image_select_id($id){
        $sql = "SELECT * from images where id=?";
        return pdo_query_one($sql,$id);
    }

    // Thêm mới Ảnh
    function image_insert($name){
        $sql = "INSERT INTO images(name) VALUES(?)";
        pdo_execute($sql,$name);
    }
    
    // Update Ảnh 
    function image_update($name,$id){
        $sql = "UPDATE images SET name = ? WHERE id = ?";
        pdo_execute($sql,$name,$id);
    }

    // Xóa Ảnh
    function image_delete($id){
        $sql = "DELETE FROM images WHERE id=?";
        pdo_execute($sql,$id);
    }
?>