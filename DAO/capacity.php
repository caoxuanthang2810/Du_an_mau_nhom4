<?php
    require_once "./global.php";

    // Gọi tất cả bảng
    function capacity_selectall(){
        $sql = "SELECT * from capacity";
        return pdo_query($sql);
    }

    // Gọi hàm dung lượng theo id
    function capacity_select_id($id){
        $sql = "SELECT * from capacity where id=?";
        return pdo_query_one($sql,$id);
    }

    // Thêm mới dung lượng
    function capacity_insert($name){
        $sql = "INSERT INTO capacity(name) VALUES(?)";
        pdo_execute($sql,$name);
    }
    
    // Update dung lượng 
    function capacity_update($name,$id){
        $sql = "UPDATE capacity SET name = ? WHERE id = ?";
        pdo_execute($sql,$name,$id);
    }

    // Xóa dung lượng
    function capacity_delete($id){
        $sql = "DELETE FROM capacity WHERE id=?";
        pdo_execute($sql,$id);
    }
?>