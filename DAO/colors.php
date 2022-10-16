<?php
    // require_once "./global.php";

    // Gọi tất cả bảng
    function color_selectall(){
        $sql = "SELECT * from colors";
        return pdo_query($sql);
    }

    // Gọi hàm màu theo id
    function color_select_id($id){
        $sql = "SELECT * from colors where id=?";
        return pdo_query_one($sql,$id);
    }

    // Thêm mới màu
    function color_insert($name){
        $sql = "INSERT INTO colors(name_color) VALUES(?)";
        pdo_execute($sql,$name);
    }
    
    // Update màu 
    function color_update($name,$id){
        $sql = "UPDATE colors SET name_color = ? WHERE id = ?";
        pdo_execute($sql,$name,$id);
    }

    // Xóa màu
    function color_delete($id){
        $sql = "DELETE FROM colors WHERE id=?";
        pdo_execute($sql,$id);
    }
?>