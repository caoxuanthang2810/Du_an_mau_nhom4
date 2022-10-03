<?php
    require_once "./global.php";

    //Tất cả bảng chức vụ
    function position_selectall(){
        $sql = "SELECT * from positions";
        return pdo_query($sql);
    }

    //Chức vụ theo id
    function position_select_id($id){
        $sql = "SELECT * from positions where id=?";
        return pdo_query_one($sql,$id);
    }

    //Thêm chức vụ
    function position_insert($name){
        $sql = "INSERT INTO positions(name) VALUES(?)";
        pdo_execute($sql,$name);
    }

    // Sửa chức vụ
    function position_update($name,$id){
        $sql = "UPDATE positions SET name = ? WHERE id = ?";
        pdo_execute($sql,$name,$id);
    }

    //Xóa chức vụ
    function position_delete($id){
        $sql = "DELETE from positions where id = ?";
        pdo_execute($sql, $id);
    }
?>