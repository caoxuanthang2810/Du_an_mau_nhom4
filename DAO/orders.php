<?php
    require_once "./global.php";

    // Gọi tất cả bảng
    function order_selectall(){
        $sql = "SELECT * from orders";
        return pdo_query($sql);
    }

    // Gọi hàm đơn hàng theo id
    function order_select_id($id){
        $sql = "SELECT * from orders where id=?";
        return pdo_query_one($sql,$id);
    }

    // Thêm mới đơn hàng
    function order_insert($name_product,$id_user,$time_buy,$status,$price,$image){
        $sql = "INSERT INTO orders(name_product,id_user,time_buy,status,price,image) VALUES(?,?,?,?,?,?)";
        pdo_execute($sql,$name_product,$id_user,$time_buy,$status,$price,$image);
    }
    
    // Update đơn hàng 
    function order_update($name_product,$id_user,$time_buy,$status,$price,$image,$id){
        $sql = "UPDATE orders SET name_product = ?,id_user = ?,time_buy = ?,status = ?,price = ?,image = ? WHERE id = ?";
        pdo_execute($sql,$name_product,$id_user,$time_buy,$status,$price,$image,$id);
    }

    // Xóa đơn hàng
    function order_delete($id){
        $sql = "DELETE FROM orders WHERE id=?";
        pdo_execute($sql,$id);
    }
?>