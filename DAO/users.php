<?php
    require_once "./global.php";

    //Gọi tất cả bảng
    function user_selectall(){
        $sql = "SELECT * from users";
        return pdo_query($sql);
    }

    // function user_insert($id){
    //     $sql = "INSERT INTO users($id) VALUES('?')";
    //     pdo_execute($sql,$id);
    // }
    
    //Thêm danh mục
    function user_insert($password,$fullname,$email,$phone,$address,$id_position){
        $sql = "INSERT INTO users(password,fullname,email,phone,address,id_position) VALUES(?,?,?,?,?,?)";
        pdo_execute($sql,$password,$fullname,$email,$phone,$address,$id_position);
    }

    //Xóa danh mục
    function user_delete($id){
        $sql = "delete from users where id = ?";
        pdo_execute($sql, $id);
    }
?>